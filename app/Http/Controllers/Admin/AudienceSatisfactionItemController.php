<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAudienceSatisfactionItemRequest;
use App\Http\Requests\StoreAudienceSatisfactionItemRequest;
use App\Http\Requests\UpdateAudienceSatisfactionItemRequest;
use App\Models\AudienceSatisfaction;
use App\Models\AudienceSatisfactionItem;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AudienceSatisfactionItemController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('audience_satisfaction_item_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = AudienceSatisfactionItem::with(['audienceSatisfaction'])->select(sprintf('%s.*', (new AudienceSatisfactionItem)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'audience_satisfaction_item_show';
                $editGate      = 'audience_satisfaction_item_edit';
                $deleteGate    = 'audience_satisfaction_item_delete';
                $crudRoutePart = 'audience-satisfaction-items';

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
            $table->editColumn('description', function ($row) {
                return $row->description ? (mb_strlen($row->description) > 50 ? mb_substr($row->description, 0, 50) . '...' : $row->description) : '';
            });
            $table->editColumn('published', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->published ? 'checked' : null) . '>';
            });
            $table->editColumn('sort_order', function ($row) {
                return $row->sort_order ? $row->sort_order : '';
            });
            $table->editColumn('file', function ($row) {
                return $row->file ? '<a href="' . $row->file->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });
            $table->addColumn('audience_satisfaction_title', function ($row) {
                return $row->audienceSatisfaction ? $row->audienceSatisfaction->title : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'published', 'file']);

            return $table->make(true);
        }

        return view('admin.audience-satisfaction-items.index');
    }

    public function create()
    {
        abort_if(Gate::denies('audience_satisfaction_item_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $audienceSatisfactions = AudienceSatisfaction::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.audience-satisfaction-items.create', compact('audienceSatisfactions'));
    }

    public function store(StoreAudienceSatisfactionItemRequest $request)
    {
        $audienceSatisfactionItem = AudienceSatisfactionItem::create($request->all());

        if ($request->input('file', false)) {
            $audienceSatisfactionItem->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
        }

        if ($request->input('icon', false)) {
            $audienceSatisfactionItem->addMedia(storage_path('tmp/uploads/' . basename($request->input('icon'))))->toMediaCollection('icon');
        }

        if ($media = $request->input('ck-media', false)) {
            \Spatie\MediaLibrary\MediaCollections\Models\Media::whereIn('id', $media)->update(['model_id' => $audienceSatisfactionItem->id]);
        }

        return redirect()->route('admin.audience-satisfaction-items.index');
    }

    public function edit(AudienceSatisfactionItem $audienceSatisfactionItem)
    {
        abort_if(Gate::denies('audience_satisfaction_item_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $audienceSatisfactions = AudienceSatisfaction::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $audienceSatisfactionItem->load('audienceSatisfaction');

        return view('admin.audience-satisfaction-items.edit', compact('audienceSatisfactions', 'audienceSatisfactionItem'));
    }

    public function update(UpdateAudienceSatisfactionItemRequest $request, AudienceSatisfactionItem $audienceSatisfactionItem)
    {
        $audienceSatisfactionItem->update($request->all());

        if ($request->input('file', false)) {
            if (! $audienceSatisfactionItem->file || $request->input('file') !== $audienceSatisfactionItem->file->file_name) {
                if ($audienceSatisfactionItem->file) {
                    $audienceSatisfactionItem->file->delete();
                }
                $audienceSatisfactionItem->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
            }
        } elseif ($audienceSatisfactionItem->file) {
            $audienceSatisfactionItem->file->delete();
        }

        if ($request->input('icon', false)) {
            if (! $audienceSatisfactionItem->icon || $request->input('icon') !== $audienceSatisfactionItem->icon->file_name) {
                if ($audienceSatisfactionItem->icon) {
                    $audienceSatisfactionItem->icon->delete();
                }
                $audienceSatisfactionItem->addMedia(storage_path('tmp/uploads/' . basename($request->input('icon'))))->toMediaCollection('icon');
            }
        } elseif ($audienceSatisfactionItem->icon) {
            $audienceSatisfactionItem->icon->delete();
        }

        return redirect()->route('admin.audience-satisfaction-items.index');
    }

    public function show(AudienceSatisfactionItem $audienceSatisfactionItem)
    {
        abort_if(Gate::denies('audience_satisfaction_item_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $audienceSatisfactionItem->load('audienceSatisfaction');

        return view('admin.audience-satisfaction-items.show', compact('audienceSatisfactionItem'));
    }

    public function destroy(AudienceSatisfactionItem $audienceSatisfactionItem)
    {
        abort_if(Gate::denies('audience_satisfaction_item_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $audienceSatisfactionItem->delete();

        return back();
    }

    public function massDestroy(MassDestroyAudienceSatisfactionItemRequest $request)
    {
        $audienceSatisfactionItems = AudienceSatisfactionItem::find(request('ids'));

        foreach ($audienceSatisfactionItems as $audienceSatisfactionItem) {
            $audienceSatisfactionItem->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('audience_satisfaction_item_create') && Gate::denies('audience_satisfaction_item_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AudienceSatisfactionItem();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

