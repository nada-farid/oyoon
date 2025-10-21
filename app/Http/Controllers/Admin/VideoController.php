<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyVideoRequest;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;
use App\Models\VideoCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class VideoController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('video_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $videos = Video::with(['category'])->get();

        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        abort_if(Gate::denies('video_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = VideoCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.videos.create', compact('categories'));
    }

    public function store(StoreVideoRequest $request)
    {
        $video = Video::create($request->all());

        if ($request->input('thumbnail', false)) {
            $video->addMedia(storage_path('tmp/uploads/' . basename($request->input('thumbnail'))))->toMediaCollection('thumbnail');
        }

        if ($request->input('video_file', false)) {
            $video->addMedia(storage_path('tmp/uploads/' . basename($request->input('video_file'))))->toMediaCollection('video_file');
        }

        return redirect()->route('admin.videos.index');
    }

    public function edit(Video $video)
    {
        abort_if(Gate::denies('video_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = VideoCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $video->load('category');

        return view('admin.videos.edit', compact('categories', 'video'));
    }

    public function update(UpdateVideoRequest $request, Video $video)
    {
        $video->update($request->all());

        if ($request->input('thumbnail', false)) {
            if (!$video->thumbnail || $request->input('thumbnail') !== $video->thumbnail->file_name) {
                if ($video->thumbnail) {
                    $video->thumbnail->delete();
                }
                $video->addMedia(storage_path('tmp/uploads/' . basename($request->input('thumbnail'))))->toMediaCollection('thumbnail');
            }
        } elseif ($video->thumbnail) {
            $video->thumbnail->delete();
        }

        if ($request->input('video_file', false)) {
            if (!$video->video_file_url || $request->input('video_file') !== basename($video->video_file_url)) {
                if ($video->getMedia('video_file')->count() > 0) {
                    $video->getMedia('video_file')->first()->delete();
                }
                $video->addMedia(storage_path('tmp/uploads/' . basename($request->input('video_file'))))->toMediaCollection('video_file');
            }
        }

        return redirect()->route('admin.videos.index');
    }

    public function show(Video $video)
    {
        abort_if(Gate::denies('video_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $video->load('category');

        return view('admin.videos.show', compact('video'));
    }

    public function destroy(Video $video)
    {
        abort_if(Gate::denies('video_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $video->delete();

        return back();
    }

    public function massDestroy(MassDestroyVideoRequest $request)
    {
        Video::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('video_create') && Gate::denies('video_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Video();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
