@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.volunteerGuide.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.volunteerGuide.fields.id') }}
                        </th>
                        <td>
                            {{ $volunteerGuide->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.volunteerGuide.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $volunteerGuide->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.volunteerGuide.fields.file') }}
                        </th>
                        <td>
                            @if($volunteerGuide->file)
                                <a href="{{ $volunteerGuide->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.volunteerGuide.fields.title') }}
                        </th>
                        <td>
                            {{ $volunteerGuide->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.volunteerGuide.fields.icon') }}
                        </th>
                        <td>
                            @if($volunteerGuide->icon)
                                <a href="{{ $volunteerGuide->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $volunteerGuide->icon->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.volunteer-guides.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection