@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} فيديو
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.videos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">عنوان الفيديو</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">عنوان الفيديو باللغة العربية</span>
            </div>
            <div class="form-group">
                <label for="description">وصف الفيديو</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description') !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">وصف مفصل للفيديو</span>
            </div>
            <div class="form-group">
                <label class="required" for="category_id">الفئة</label>
                <select class="form-control select2 {{ $errors->has('category_id') ? 'is-invalid' : '' }}" name="category_id" id="category_id" required>
                    @foreach($categories as $id => $name)
                        <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
                @if($errors->has('category_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category_id') }}
                    </div>
                @endif
                <span class="help-block">اختر فئة الفيديو</span>
            </div>
            <div class="form-group">
                <label for="youtube_url">رابط YouTube</label>
                <input class="form-control {{ $errors->has('youtube_url') ? 'is-invalid' : '' }}" type="url" name="youtube_url" id="youtube_url" value="{{ old('youtube_url', '') }}">
                @if($errors->has('youtube_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('youtube_url') }}
                    </div>
                @endif
                <span class="help-block">رابط فيديو YouTube (اختياري)</span>
            </div>
            <div class="form-group">
                <label class="required" for="thumbnail">صورة مصغرة</label>
                <div class="needsclick dropzone {{ $errors->has('thumbnail') ? 'is-invalid' : '' }}" id="thumbnail-dropzone">
                </div>
                @if($errors->has('thumbnail'))
                    <div class="invalid-feedback">
                        {{ $errors->first('thumbnail') }}
                    </div>
                @endif
                <span class="help-block">صورة مصغرة للفيديو</span>
            </div>
            <div class="form-group">
                <label for="video_file">ملف الفيديو</label>
                <div class="needsclick dropzone {{ $errors->has('video_file') ? 'is-invalid' : '' }}" id="video_file-dropzone">
                </div>
                @if($errors->has('video_file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('video_file') }}
                    </div>
                @endif
                <span class="help-block">ملف فيديو محلي (اختياري إذا كان لديك رابط YouTube)</span>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="published" id="published" value="1" {{ old('published', true) ? 'checked' : '' }}>
                    <label class="form-check-label" for="published">
                        نشر الفيديو
                    </label>
                </div>
                @if($errors->has('published'))
                    <div class="invalid-feedback">
                        {{ $errors->first('published') }}
                    </div>
                @endif
                <span class="help-block">عرض الفيديو في الموقع</span>
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
    var uploadedThumbnailMap = {}
Dropzone.options.thumbnailDropzone = {
    url: '{{ route('admin.videos.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="thumbnail"]').remove()
      $('form').append('<input type="hidden" name="thumbnail" value="' + response.name + '">')
      uploadedThumbnailMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedThumbnailMap[file.name]
      }
      $('form').find('input[name="thumbnail"]').remove()
      this.options.maxFiles = this.options.maxFiles + 1
    },
    init: function () {
@if(isset($video) && $video->thumbnail)
      var file = {!! json_encode($video->thumbnail) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="thumbnail" value="' + file.file_name + '">')
      uploadedThumbnailMap[file.name] = file.file_name
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

var uploadedVideoFileMap = {}
Dropzone.options.videoFileDropzone = {
    url: '{{ route('admin.videos.storeMedia') }}',
    maxFilesize: 100, // MB
    acceptedFiles: '.mp4,.avi,.mov,.wmv,.flv,.webm',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 100
    },
    success: function (file, response) {
      $('form').find('input[name="video_file"]').remove()
      $('form').append('<input type="hidden" name="video_file" value="' + response.name + '">')
      uploadedVideoFileMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedVideoFileMap[file.name]
      }
      $('form').find('input[name="video_file"]').remove()
      this.options.maxFiles = this.options.maxFiles + 1
    },
    init: function () {
@if(isset($video) && $video->video_file_url)
      var file = {!! json_encode($video->getMedia('video_file')->first()) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="video_file" value="' + file.file_name + '">')
      uploadedVideoFileMap[file.name] = file.file_name
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
