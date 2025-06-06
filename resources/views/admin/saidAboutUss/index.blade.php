@extends('layouts.admin')
@section('content')
@can('said_about_us_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.said-about-uss.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.saidAboutUs.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.saidAboutUs.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-SaidAboutUs">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.saidAboutUs.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.saidAboutUs.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.saidAboutUs.fields.position') }}
                        </th>
                        <th>
                            {{ trans('cruds.saidAboutUs.fields.review') }}
                        </th>
                        <th>
                            {{ trans('cruds.saidAboutUs.fields.image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($saidAboutUss as $key => $saidAboutUs)
                        <tr data-entry-id="{{ $saidAboutUs->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $saidAboutUs->id ?? '' }}
                            </td>
                            <td>
                                {{ $saidAboutUs->name ?? '' }}
                            </td>
                            <td>
                                {{ $saidAboutUs->position ?? '' }}
                            </td>
                            <td>
                                {{ $saidAboutUs->review ?? '' }}
                            </td>
                            <td>
                                @if($saidAboutUs->image)
                                    <a href="{{ $saidAboutUs->image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $saidAboutUs->image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('said_about_us_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.said-about-uss.show', $saidAboutUs->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('said_about_us_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.said-about-uss.edit', $saidAboutUs->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('said_about_us_delete')
                                    <form action="{{ route('admin.said-about-uss.destroy', $saidAboutUs->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('said_about_us_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.said-about-uss.massDestroy') }}",
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
  let table = $('.datatable-SaidAboutUs:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection