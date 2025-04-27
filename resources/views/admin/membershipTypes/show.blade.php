@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.membershipType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipType.fields.id') }}
                        </th>
                        <td>
                            {{ $membershipType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipType.fields.title') }}
                        </th>
                        <td>
                            {{ $membershipType->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipType.fields.description') }}
                        </th>
                        <td>
                            {!! $membershipType->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipType.fields.file') }}
                        </th>
                        <td>
                            @if($membershipType->file)
                                <a href="{{ $membershipType->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.membershipType.fields.image') }}
                        </th>
                        <td>
                            @if($membershipType->image)
                                <a href="{{ $membershipType->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $membershipType->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.membership-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection