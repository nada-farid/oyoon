@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.reportCategory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.reportCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $reportCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportCategory.fields.type') }}
                        </th>
                        <td>
                            {{ App\Models\ReportCategory::TYPE_SELECT[$reportCategory->type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportCategory.fields.name') }}
                        </th>
                        <td>
                            {{ $reportCategory->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportCategory.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $reportCategory->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.report-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection