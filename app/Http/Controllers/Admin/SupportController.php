<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySupportRequest;
use App\Http\Requests\StoreSupportRequest;
use App\Http\Requests\UpdateSupportRequest;
use App\Models\Support;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SupportController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('support_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supports = Support::with(['media'])->get();

        return view('admin.supports.index', compact('supports'));
    }

    public function create()
    {
        abort_if(Gate::denies('support_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.supports.create');
    }

    public function store(StoreSupportRequest $request)
    {
        $support = Support::create($request->all());

        if ($request->input('icon', false)) {
            $support->addMedia(storage_path('tmp/uploads/' . basename($request->input('icon'))))->toMediaCollection('icon');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $support->id]);
        }

        return redirect()->route('admin.supports.index');
    }

    public function edit(Support $support)
    {
        abort_if(Gate::denies('support_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.supports.edit', compact('support'));
    }

    public function update(UpdateSupportRequest $request, Support $support)
    {
        $support->update($request->all());

        if ($request->input('icon', false)) {
            if (! $support->icon || $request->input('icon') !== $support->icon->file_name) {
                if ($support->icon) {
                    $support->icon->delete();
                }
                $support->addMedia(storage_path('tmp/uploads/' . basename($request->input('icon'))))->toMediaCollection('icon');
            }
        } elseif ($support->icon) {
            $support->icon->delete();
        }

        return redirect()->route('admin.supports.index');
    }

    public function show(Support $support)
    {
        abort_if(Gate::denies('support_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.supports.show', compact('support'));
    }

    public function destroy(Support $support)
    {
        abort_if(Gate::denies('support_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $support->delete();

        return back();
    }

    public function massDestroy(MassDestroySupportRequest $request)
    {
        $supports = Support::find(request('ids'));

        foreach ($supports as $support) {
            $support->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('support_create') && Gate::denies('support_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Support();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
