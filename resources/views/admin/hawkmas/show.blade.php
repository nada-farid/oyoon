@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.hawkma.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.hawkma.fields.id') }}
                        </th>
                        <td>
                            {{ $hawkma->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hawkma.fields.title') }}
                        </th>
                        <td>
                            {{ $hawkma->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hawkma.fields.file') }}
                        </th>
                        <td>
                            @if($hawkma->file)
                                <a href="{{ $hawkma->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hawkma.fields.icon') }}
                        </th>
                        <td>
                            @if($hawkma->icon)
                                <a href="{{ $hawkma->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $hawkma->icon->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hawkma.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $hawkma->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hawkma.fields.category') }}
                        </th>
                        <td>
                            {{ $hawkma->category->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.hawkmas.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection