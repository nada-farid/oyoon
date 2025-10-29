@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} قياس رضا الجمهور
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.hawkamCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $audienceSatisfaction->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            العنوان
                        </th>
                        <td>
                            {{ $audienceSatisfaction->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hawkma.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $audienceSatisfaction->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            ترتيب العرض
                        </th>
                        <td>
                            {{ $audienceSatisfaction->sort_order }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.audience-satisfactions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection

