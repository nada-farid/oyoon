@can($viewGate)
    <a class="btn btn-xs btn-primary" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}">
        {{ trans('global.view') }}
    </a>
@endcan
@can($editGate)
    <a class="btn btn-xs btn-info" href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}">
        {{ trans('global.edit') }}
    </a>
@endcan
@can($editGate)
    <button class="btn btn-xs {{ $row->is_active ? 'btn-warning' : 'btn-success' }}" onclick="toggleActive({{ $row->id }}, {{ $row->is_active ? 'true' : 'false' }})">
        {{ $row->is_active ? 'إلغاء التفعيل' : 'تفعيل' }}
    </button>
@endcan
@can($deleteGate)
    <form action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
    </form>
@endcan

<script>
function toggleActive(memberId, isActive) {
    if (confirm('هل أنت متأكد من ' + (isActive ? 'إلغاء تفعيل' : 'تفعيل') + ' هذا العضو؟')) {
        $.ajax({
            url: '/admin/members/' + memberId + '/toggle-active',
            type: 'POST',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            success: function(response) {
                if (response.success) {
                    alert(response.message);
                    location.reload();
                }
            },
            error: function() {
                alert('حدث خطأ أثناء تحديث الحالة');
            }
        });
    }
}
</script>

