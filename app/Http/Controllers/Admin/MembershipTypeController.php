<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyMembershipTypeRequest;
use App\Http\Requests\StoreMembershipTypeRequest;
use App\Http\Requests\UpdateMembershipTypeRequest;
use App\Models\MembershipType;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class MembershipTypeController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('membership_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membershipTypes = MembershipType::with(['media'])->get();

        return view('admin.membershipTypes.index', compact('membershipTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('membership_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.membershipTypes.create');
    }

    public function store(StoreMembershipTypeRequest $request)
    {
        $membershipType = MembershipType::create($request->all());

        if ($request->input('file', false)) {
            $membershipType->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
        }

        if ($request->input('image', false)) {
            $membershipType->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $membershipType->id]);
        }

        return redirect()->route('admin.membership-types.index');
    }

    public function edit(MembershipType $membershipType)
    {
        abort_if(Gate::denies('membership_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.membershipTypes.edit', compact('membershipType'));
    }

    public function update(UpdateMembershipTypeRequest $request, MembershipType $membershipType)
    {
        $membershipType->update($request->all());

        if ($request->input('file', false)) {
            if (! $membershipType->file || $request->input('file') !== $membershipType->file->file_name) {
                if ($membershipType->file) {
                    $membershipType->file->delete();
                }
                $membershipType->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
            }
        } elseif ($membershipType->file) {
            $membershipType->file->delete();
        }

        if ($request->input('image', false)) {
            if (! $membershipType->image || $request->input('image') !== $membershipType->image->file_name) {
                if ($membershipType->image) {
                    $membershipType->image->delete();
                }
                $membershipType->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($membershipType->image) {
            $membershipType->image->delete();
        }

        return redirect()->route('admin.membership-types.index');
    }

    public function show(MembershipType $membershipType)
    {
        abort_if(Gate::denies('membership_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.membershipTypes.show', compact('membershipType'));
    }

    public function destroy(MembershipType $membershipType)
    {
        abort_if(Gate::denies('membership_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $membershipType->delete();

        return back();
    }

    public function massDestroy(MassDestroyMembershipTypeRequest $request)
    {
        $membershipTypes = MembershipType::find(request('ids'));

        foreach ($membershipTypes as $membershipType) {
            $membershipType->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('membership_type_create') && Gate::denies('membership_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new MembershipType();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}