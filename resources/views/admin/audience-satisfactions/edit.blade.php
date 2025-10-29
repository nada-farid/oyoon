@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} قياس رضا الجمهور
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.audience-satisfactions.update", [$audienceSatisfaction->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">العنوان</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $audienceSatisfaction->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="published">{{ trans('cruds.hawkma.fields.published') }}</label>
                <input class="form-control {{ $errors->has('published') ? 'is-invalid' : '' }}" type="checkbox" name="published" id="published" value="1" {{ old('published', $audienceSatisfaction->published) ? 'checked' : '' }}>
                @if($errors->has('published'))
                    <div class="invalid-feedback">
                        {{ $errors->first('published') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="sort_order">ترتيب العرض</label>
                <input class="form-control {{ $errors->has('sort_order') ? 'is-invalid' : '' }}" type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $audienceSatisfaction->sort_order) }}">
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

