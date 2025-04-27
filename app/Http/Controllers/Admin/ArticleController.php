<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyArticleRequest;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('article_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Article::query()->select(sprintf('%s.*', (new Article)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'article_show';
                $editGate      = 'article_edit';
                $deleteGate    = 'article_delete';
                $crudRoutePart = 'articles';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('image', function ($row) {
                if ($photo = $row->image) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('inner_image', function ($row) {
                if ($photo = $row->inner_image) {
                    return sprintf(
                        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
                        $photo->url,
                        $photo->thumbnail
                    );
                }

                return '';
            });
            $table->editColumn('images', function ($row) {
                if (! $row->images) {
                    return '';
                }
                $links = [];
                foreach ($row->images as $media) {
                    $links[] = '<a href="' . $media->getUrl() . '" target="_blank"><img src="' . $media->getUrl('thumb') . '" width="50px" height="50px"></a>';
                }

                return implode(' ', $links);
            });
            $table->editColumn('writer_name', function ($row) {
                return $row->writer_name ? $row->writer_name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'image', 'inner_image', 'images']);

            return $table->make(true);
        }

        return view('admin.articles.index');
    }

    public function create()
    {
        abort_if(Gate::denies('article_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.articles.create');
    }

    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->all());

        if ($request->input('image', false)) {
            $article->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($request->input('inner_image', false)) {
            $article->addMedia(storage_path('tmp/uploads/' . basename($request->input('inner_image'))))->toMediaCollection('inner_image');
        }

        foreach ($request->input('images', []) as $file) {
            $article->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('images');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $article->id]);
        }

        return redirect()->route('admin.articles.index');
    }

    public function edit(Article $article)
    {
        abort_if(Gate::denies('article_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.articles.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        if ($request->input('image', false)) {
            if (! $article->image || $request->input('image') !== $article->image->file_name) {
                if ($article->image) {
                    $article->image->delete();
                }
                $article->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($article->image) {
            $article->image->delete();
        }

        if ($request->input('inner_image', false)) {
            if (! $article->inner_image || $request->input('inner_image') !== $article->inner_image->file_name) {
                if ($article->inner_image) {
                    $article->inner_image->delete();
                }
                $article->addMedia(storage_path('tmp/uploads/' . basename($request->input('inner_image'))))->toMediaCollection('inner_image');
            }
        } elseif ($article->inner_image) {
            $article->inner_image->delete();
        }

        if (count($article->images) > 0) {
            foreach ($article->images as $media) {
                if (! in_array($media->file_name, $request->input('images', []))) {
                    $media->delete();
                }
            }
        }
        $media = $article->images->pluck('file_name')->toArray();
        foreach ($request->input('images', []) as $file) {
            if (count($media) === 0 || ! in_array($file, $media)) {
                $article->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('images');
            }
        }

        return redirect()->route('admin.articles.index');
    }

    public function show(Article $article)
    {
        abort_if(Gate::denies('article_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.articles.show', compact('article'));
    }

    public function destroy(Article $article)
    {
        abort_if(Gate::denies('article_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $article->delete();

        return back();
    }

    public function massDestroy(MassDestroyArticleRequest $request)
    {
        $articles = Article::find(request('ids'));

        foreach ($articles as $article) {
            $article->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('article_create') && Gate::denies('article_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Article();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
