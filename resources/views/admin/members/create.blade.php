@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.member.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.members.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.member.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="type_id">{{ trans('cruds.member.fields.type') }}</label>
                <select class="form-control select2 {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type_id" id="type_id" required>
                    @foreach($types as $id => $entry)
                        <option value="{{ $id }}" {{ old('type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.type_helper') }}</span>
            </div>
            <hr style="margin: 30px 0; border-color: #ddd;">
            <h5 style="color: #666; margin-bottom: 20px;">معلومات إضافية (اختياري)</h5>
            <div class="form-group">
                <label for="job">{{ trans('cruds.member.fields.job') }}</label>
                <input class="form-control {{ $errors->has('job') ? 'is-invalid' : '' }}" type="text" name="job" id="job" value="{{ old('job', '') }}">
                @if($errors->has('job'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.job_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="employer">{{ trans('cruds.member.fields.employer') }}</label>
                <input class="form-control {{ $errors->has('employer') ? 'is-invalid' : '' }}" type="text" name="employer" id="employer" value="{{ old('employer', '') }}">
                @if($errors->has('employer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('employer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.employer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_number">{{ trans('cruds.member.fields.phone_number') }}</label>
                <input class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}">
                @if($errors->has('phone_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.member.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="identity_number">{{ trans('cruds.member.fields.identity_number') }}</label>
                <input class="form-control {{ $errors->has('identity_number') ? 'is-invalid' : '' }}" type="text" name="identity_number" id="identity_number" value="{{ old('identity_number', '') }}">
                @if($errors->has('identity_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('identity_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.identity_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="identity_date">{{ trans('cruds.member.fields.identity_date') }}</label>
                <input class="form-control date {{ $errors->has('identity_date') ? 'is-invalid' : '' }}" type="text" name="identity_date" id="identity_date" value="{{ old('identity_date') }}">
                @if($errors->has('identity_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('identity_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.identity_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_birth">{{ trans('cruds.member.fields.date_of_birth') }}</label>
                <input class="form-control date {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}" type="text" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}">
                @if($errors->has('date_of_birth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_birth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.date_of_birth_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="residence">{{ trans('cruds.member.fields.residence') }}</label>
                <input class="form-control {{ $errors->has('residence') ? 'is-invalid' : '' }}" type="text" name="residence" id="residence" value="{{ old('residence', '') }}">
                @if($errors->has('residence'))
                    <div class="invalid-feedback">
                        {{ $errors->first('residence') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.residence_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="neighborhood">{{ trans('cruds.member.fields.neighborhood') }}</label>
                <input class="form-control {{ $errors->has('neighborhood') ? 'is-invalid' : '' }}" type="text" name="neighborhood" id="neighborhood" value="{{ old('neighborhood', '') }}">
                @if($errors->has('neighborhood'))
                    <div class="invalid-feedback">
                        {{ $errors->first('neighborhood') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.neighborhood_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.member.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', '') }}">
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.member.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', 1) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">تفعيل العضو (سيظهر في الفرونت اند)</label>
                </div>
                @if($errors->has('is_active'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_active') }}
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