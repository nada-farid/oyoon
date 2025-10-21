<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyVideoCategoryRequest;
use App\Http\Requests\StoreVideoCategoryRequest;
use App\Http\Requests\UpdateVideoCategoryRequest;
use App\Models\VideoCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class VideoCategoryController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('video_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $videoCategories = VideoCategory::all();

        return view('admin.video-categories.index', compact('videoCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('video_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.video-categories.create');
    }

    public function store(StoreVideoCategoryRequest $request)
    {
        $videoCategory = VideoCategory::create($request->all());

        return redirect()->route('admin.video-categories.index');
    }

    public function edit(VideoCategory $videoCategory)
    {
        abort_if(Gate::denies('video_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.video-categories.edit', compact('videoCategory'));
    }

    public function update(UpdateVideoCategoryRequest $request, VideoCategory $videoCategory)
    {
        $videoCategory->update($request->all());

        return redirect()->route('admin.video-categories.index');
    }

    public function show(VideoCategory $videoCategory)
    {
        abort_if(Gate::denies('video_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.video-categories.show', compact('videoCategory'));
    }

    public function destroy(VideoCategory $videoCategory)
    {
        abort_if(Gate::denies('video_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $videoCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyVideoCategoryRequest $request)
    {
        VideoCategory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
