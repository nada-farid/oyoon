@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} عنصر قياس رضا الجمهور
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.audience-satisfaction-items.update", [$audienceSatisfactionItem->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">العنوان</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $audienceSatisfactionItem->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">الوصف</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" rows="3">{{ old('description', $audienceSatisfactionItem->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label class="required" for="audience_satisfaction_id">قياس رضا الجمهور</label>
                <select class="form-control select2 {{ $errors->has('audience_satisfaction') ? 'is-invalid' : '' }}" name="audience_satisfaction_id" id="audience_satisfaction_id" required>
                    @foreach($audienceSatisfactions as $id => $entry)
                        <option value="{{ $id }}" {{ old('audience_satisfaction_id', $audienceSatisfactionItem->audience_satisfaction_id) == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('audience_satisfaction'))
                    <div class="invalid-feedback">
                        {{ $errors->first('audience_satisfaction') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="file">{{ trans('cruds.hawkma.fields.file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file-dropzone">
                </div>
                @if($errors->has('file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="published">{{ trans('cruds.hawkma.fields.published') }}</label>
                <input class="form-control {{ $errors->has('published') ? 'is-invalid' : '' }}" type="checkbox" name="published" id="published" value="1" {{ old('published', $audienceSatisfactionItem->published) ? 'checked' : '' }}>
                @if($errors->has('published'))
                    <div class="invalid-feedback">
                        {{ $errors->first('published') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="sort_order">ترتيب العرض</label>
                <input class="form-control {{ $errors->has('sort_order') ? 'is-invalid' : '' }}" type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $audienceSatisfactionItem->sort_order) }}">
                @if($errors->has('sort_order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sort_order') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.fileDropzone = {
    url: '{{ route('admin.audience-satisfaction-items.storeMedia') }}',
    maxFilesize: 50, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 50
    },
    success: function (file, response) {
      $('form').find('input[name="file"]').remove()
      $('form').append('<input type="hidden" name="file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($audienceSatisfactionItem) && $audienceSatisfactionItem->file)
      var file = {!! json_encode($audienceSatisfactionItem->file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="file" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection

