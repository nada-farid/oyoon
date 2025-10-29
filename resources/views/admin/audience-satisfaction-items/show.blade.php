@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} عنصر قياس رضا الجمهور
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
                            {{ $audienceSatisfactionItem->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            العنوان
                        </th>
                        <td>
                            {{ $audienceSatisfactionItem->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            الوصف
                        </th>
                        <td>
                            {{ $audienceSatisfactionItem->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            قياس رضا الجمهور
                        </th>
                        <td>
                            {{ $audienceSatisfactionItem->audienceSatisfaction->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hawkma.fields.published') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $audienceSatisfactionItem->published ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            ترتيب العرض
                        </th>
                        <td>
                            {{ $audienceSatisfactionItem->sort_order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.hawkma.fields.file') }}
                        </th>
                        <td>
                            @if($audienceSatisfactionItem->file)
                                <a href="{{ $audienceSatisfactionItem->file->getUrl() }}" target="_blank">{{ trans('global.downloadFile') }}</a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.audience-satisfaction-items.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection

