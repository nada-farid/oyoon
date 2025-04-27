@extends('layouts.admin')
@section('content')
@can('membership_type_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.membership-types.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.membershipType.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.membershipType.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-MembershipType">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.membershipType.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.membershipType.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.membershipType.fields.file') }}
                        </th>
                        <th>
                            {{ trans('cruds.membershipType.fields.image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($membershipTypes as $key => $membershipType)
                        <tr data-entry-id="{{ $membershipType->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $membershipType->id ?? '' }}
                            </td>
                            <td>
                                {{ $membershipType->title ?? '' }}
                            </td>
                            <td>
                                @if($membershipType->file)
                                    <a href="{{ $membershipType->file->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($membershipType->image)
                                    <a href="{{ $membershipType->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $membershipType->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('membership_type_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.membership-types.show', $membershipType->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('membership_type_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.membership-types.edit', $membershipType->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('membership_type_delete')
                                    <form action="{{ route('admin.membership-types.destroy', $membershipType->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('membership_type_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.membership-types.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  });
  let table = $('.datatable-MembershipType:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection