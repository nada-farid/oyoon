@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.setting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.settings.update', [$setting->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-fill" id="settingsTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="basic-tab" data-toggle="tab" data-target="#basic" type="button" role="tab" aria-controls="basic" aria-selected="true">
                        <i class="fas fa-info-circle me-2"></i>المعلومات الأساسية
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="content-tab" data-toggle="tab" data-target="#content" type="button" role="tab" aria-controls="content" aria-selected="false">
                        <i class="fas fa-file-alt me-2"></i>المحتوى والوصف
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="social-tab" data-toggle="tab" data-target="#social" type="button" role="tab" aria-controls="social" aria-selected="false">
                        <i class="fas fa-share-alt me-2"></i>وسائل التواصل
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="media-tab" data-toggle="tab" data-target="#media" type="button" role="tab" aria-controls="media" aria-selected="false">
                        <i class="fas fa-images me-2"></i>الصور والملفات
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="counters-tab" data-toggle="tab" data-target="#counters" type="button" role="tab" aria-controls="counters" aria-selected="false">
                        <i class="fas fa-chart-bar me-2"></i>الإحصائيات
                    </button>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content mt-4" id="settingsTabContent">
                <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
                    <div class="form-group">
                        <label class="required" for="site_name">{{ trans('cruds.setting.fields.site_name') }}</label>
                        <input class="form-control {{ $errors->has('site_name') ? 'is-invalid' : '' }}" type="text" name="site_name" id="site_name" value="{{ old('site_name', $setting->site_name) }}" required>
                        @if ($errors->has('site_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('site_name') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.site_name_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="phone">{{ trans('cruds.setting.fields.phone') }}</label>
                        <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $setting->phone) }}">
                        @if ($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.phone_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="address">{{ trans('cruds.setting.fields.address') }}</label>
                        <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $setting->address) }}">
                        @if ($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.address_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ trans('cruds.setting.fields.email') }}</label>
                        <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $setting->email) }}">
                        @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.email_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="facebook">{{ trans('cruds.setting.fields.facebook') }}</label>
                        <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', $setting->facebook) }}">
                        @if ($errors->has('facebook'))
                        <div class="invalid-feedback">
                            {{ $errors->first('facebook') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.facebook_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="twitter">{{ trans('cruds.setting.fields.twitter') }}</label>
                        <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text" name="twitter" id="twitter" value="{{ old('twitter', $setting->twitter) }}">
                        @if ($errors->has('twitter'))
                        <div class="invalid-feedback">
                            {{ $errors->first('twitter') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.twitter_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="linkedin">{{ trans('cruds.setting.fields.linkedin') }}</label>
                        <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $setting->linkedin) }}">
                        @if ($errors->has('linkedin'))
                        <div class="invalid-feedback">
                            {{ $errors->first('linkedin') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.linkedin_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="youtubte">{{ trans('cruds.setting.fields.youtubte') }}</label>
                        <input class="form-control {{ $errors->has('youtubte') ? 'is-invalid' : '' }}" type="text" name="youtubte" id="youtubte" value="{{ old('youtubte', $setting->youtubte) }}">
                        @if ($errors->has('youtubte'))
                        <div class="invalid-feedback">
                            {{ $errors->first('youtubte') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.youtubte_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="instagram">{{ trans('cruds.setting.fields.instagram') }}</label>
                        <input class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" type="text" name="instagram" id="instagram" value="{{ old('instagram', $setting->instagram) }}">
                        @if ($errors->has('instagram'))
                        <div class="invalid-feedback">
                            {{ $errors->first('instagram') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.instagram_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="snap_chat">{{ trans('cruds.setting.fields.snap_chat') }}</label>
                        <input class="form-control {{ $errors->has('snap_chat') ? 'is-invalid' : '' }}" type="text" name="snap_chat" id="snap_chat" value="{{ old('snap_chat', $setting->snap_chat) }}">
                        @if ($errors->has('snap_chat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('snap_chat') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.snap_chat_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="donation_url">{{ trans('cruds.setting.fields.donation_url') }}</label>
                        <input class="form-control {{ $errors->has('donation_url') ? 'is-invalid' : '' }}" type="text" name="donation_url" id="donation_url" value="{{ old('donation_url', $setting->donation_url) }}">
                        @if ($errors->has('donation_url'))
                        <div class="invalid-feedback">
                            {{ $errors->first('donation_url') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.donation_url_helper') }}</span>
                    </div>
                </div>

                <!-- Content Tab -->
                <div class="tab-pane fade" id="content" role="tabpanel" aria-labelledby="content-tab">
                    <div class="form-group">
                        <label for="short_descrption">{{ trans('cruds.setting.fields.short_descrption') }}</label>
                        <textarea class="form-control ckeditor {{ $errors->has('short_descrption') ? 'is-invalid' : '' }}" name="short_descrption" id="short_descrption">{!! old('short_descrption', $setting->short_descrption) !!}</textarea>
                        @if ($errors->has('short_descrption'))
                        <div class="invalid-feedback">
                            {{ $errors->first('short_descrption') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.short_descrption_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="description">{{ trans('cruds.setting.fields.description') }}</label>
                        <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $setting->description) !!}</textarea>
                        @if ($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.description_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="about_description">{{ trans('cruds.setting.fields.about_description') }}</label>
                        <textarea class="form-control {{ $errors->has('about_description') ? 'is-invalid' : '' }}" name="about_description" id="about_description">{{ old('about_description', $setting->about_description) }}</textarea>
                        @if ($errors->has('about_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('about_description') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.about_description_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="chairman_description">{{ trans('cruds.setting.fields.chairman_description') }}</label>
                        <input class="form-control {{ $errors->has('chairman_description') ? 'is-invalid' : '' }}" type="text" name="chairman_description" id="chairman_description" value="{{ old('chairman_description', $setting->chairman_description) }}">
                        @if ($errors->has('chairman_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('chairman_description') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.chairman_description_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="vision">{{ trans('cruds.setting.fields.vision') }}</label>
                        <textarea class="form-control  {{ $errors->has('vision') ? 'is-invalid' : '' }}" name="vision" id="vision">{!! old('vision', $setting->vision) !!}</textarea>
                        @if ($errors->has('vision'))
                        <div class="invalid-feedback">
                            {{ $errors->first('vision') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.vision_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="mission">{{ trans('cruds.setting.fields.mission') }}</label>
                        <textarea class="form-control  {{ $errors->has('mission') ? 'is-invalid' : '' }}" name="mission" id="mission">{!! old('mission', $setting->mission) !!}</textarea>
                        @if ($errors->has('mission'))
                        <div class="invalid-feedback">
                            {{ $errors->first('mission') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.mission_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="values">{{ trans('cruds.setting.fields.values') }}</label>
                        <textarea class="form-control  {{ $errors->has('values') ? 'is-invalid' : '' }}" name="values" id="values">{!! old('values', $setting->values) !!}</textarea>
                        @if ($errors->has('values'))
                        <div class="invalid-feedback">
                            {{ $errors->first('values') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.values_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="initiative">{{ trans('cruds.setting.fields.initiative') }}</label>
                        <textarea class="form-control  {{ $errors->has('initiative') ? 'is-invalid' : '' }}" name="initiative" id="initiative">{!! old('initiative', $setting->initiative) !!}</textarea>
                        @if ($errors->has('initiative'))
                        <div class="invalid-feedback">
                            {{ $errors->first('initiative') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.initiative_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="support_text">{{ trans('cruds.setting.fields.support_text') }}</label>
                        <textarea class="form-control {{ $errors->has('support_text') ? 'is-invalid' : '' }}" name="support_text" id="support_text">{{ old('support_text', $setting->support_text) }}</textarea>
                        @if ($errors->has('support_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('support_text') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.support_text_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="membership_conditions">{{ trans('cruds.setting.fields.membership_conditions') }}</label>
                        <textarea class="form-control ckeditor {{ $errors->has('membership_conditions') ? 'is-invalid' : '' }}" name="membership_conditions" id="membership_conditions">{!! old('membership_conditions', $setting->membership_conditions) !!}</textarea>
                        @if ($errors->has('membership_conditions'))
                        <div class="invalid-feedback">
                            {{ $errors->first('membership_conditions') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.membership_conditions_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="loss_membership">{{ trans('cruds.setting.fields.loss_membership') }}</label>
                        <textarea class="form-control ckeditor {{ $errors->has('loss_membership') ? 'is-invalid' : '' }}" name="loss_membership" id="loss_membership">{!! old('loss_membership', $setting->loss_membership) !!}</textarea>
                        @if ($errors->has('loss_membership'))
                        <div class="invalid-feedback">
                            {{ $errors->first('loss_membership') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.loss_membership_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="commitments_membership">{{ trans('cruds.setting.fields.commitments_membership') }}</label>
                        <textarea class="form-control ckeditor {{ $errors->has('commitments_membership') ? 'is-invalid' : '' }}" name="commitments_membership" id="commitments_membership">{!! old('commitments_membership', $setting->commitments_membership) !!}</textarea>
                        @if ($errors->has('commitments_membership'))
                        <div class="invalid-feedback">
                            {{ $errors->first('commitments_membership') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.commitments_membership_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="scope">{{ trans('cruds.setting.fields.scope') }}</label>
                        <textarea class="form-control ckeditor {{ $errors->has('scope') ? 'is-invalid' : '' }}" name="scope" id="scope">{!! old('scope', $setting->scope) !!}</textarea>
                        @if ($errors->has('scope'))
                        <div class="invalid-feedback">
                            {{ $errors->first('scope') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.scope_helper') }}</span>
                    </div>
                </div>

                <!-- Social Media Tab -->
                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                    <div class="form-group">
                        <label for="facebook">{{ trans('cruds.setting.fields.facebook') }}</label>
                        <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', $setting->facebook) }}">
                        @if ($errors->has('facebook'))
                        <div class="invalid-feedback">
                            {{ $errors->first('facebook') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.facebook_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="twitter">{{ trans('cruds.setting.fields.twitter') }}</label>
                        <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text" name="twitter" id="twitter" value="{{ old('twitter', $setting->twitter) }}">
                        @if ($errors->has('twitter'))
                        <div class="invalid-feedback">
                            {{ $errors->first('twitter') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.twitter_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="linkedin">{{ trans('cruds.setting.fields.linkedin') }}</label>
                        <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $setting->linkedin) }}">
                        @if ($errors->has('linkedin'))
                        <div class="invalid-feedback">
                            {{ $errors->first('linkedin') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.linkedin_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="youtubte">{{ trans('cruds.setting.fields.youtubte') }}</label>
                        <input class="form-control {{ $errors->has('youtubte') ? 'is-invalid' : '' }}" type="text" name="youtubte" id="youtubte" value="{{ old('youtubte', $setting->youtubte) }}">
                        @if ($errors->has('youtubte'))
                        <div class="invalid-feedback">
                            {{ $errors->first('youtubte') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.youtubte_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="instagram">{{ trans('cruds.setting.fields.instagram') }}</label>
                        <input class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" type="text" name="instagram" id="instagram" value="{{ old('instagram', $setting->instagram) }}">
                        @if ($errors->has('instagram'))
                        <div class="invalid-feedback">
                            {{ $errors->first('instagram') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.instagram_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="snap_chat">{{ trans('cruds.setting.fields.snap_chat') }}</label>
                        <input class="form-control {{ $errors->has('snap_chat') ? 'is-invalid' : '' }}" type="text" name="snap_chat" id="snap_chat" value="{{ old('snap_chat', $setting->snap_chat) }}">
                        @if ($errors->has('snap_chat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('snap_chat') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.snap_chat_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="pinterest">{{ trans('cruds.setting.fields.pinterest') }}</label>
                        <input class="form-control {{ $errors->has('pinterest') ? 'is-invalid' : '' }}" type="text" name="pinterest" id="pinterest" value="{{ old('pinterest', $setting->pinterest) }}">
                        @if ($errors->has('pinterest'))
                        <div class="invalid-feedback">
                            {{ $errors->first('pinterest') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.pinterest_helper') }}</span>
                    </div>
                </div>

                <!-- Media Tab -->
                <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
                    <div class="form-group">
                        <label for="about_photo">{{ trans('cruds.setting.fields.about_photo') }}</label>
                        <div class="needsclick dropzone {{ $errors->has('about_photo') ? 'is-invalid' : '' }}" id="aboutPhotoDropzone">
                        </div>
                        @if ($errors->has('about_photo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('about_photo') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.about_photo_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="about_inner_photo">{{ trans('cruds.setting.fields.about_inner_photo') }}</label>
                        <div class="needsclick dropzone {{ $errors->has('about_inner_photo') ? 'is-invalid' : '' }}" id="aboutInnerPhotoDropzone">
                        </div>
                        @if ($errors->has('about_inner_photo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('about_inner_photo') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.about_inner_photo_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="inner_image">{{ trans('cruds.setting.fields.inner_image') }}</label>
                        <div class="needsclick dropzone {{ $errors->has('inner_image') ? 'is-invalid' : '' }}" id="innerImageDropzone">
                        </div>
                        @if ($errors->has('inner_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('inner_image') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.inner_image_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="logo">{{ trans('cruds.setting.fields.logo') }}</label>
                        <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logoDropzone">
                        </div>
                        @if ($errors->has('logo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('logo') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.logo_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="logo_white">{{ trans('cruds.setting.fields.logo_white') }}</label>
                        <div class="needsclick dropzone {{ $errors->has('logo_white') ? 'is-invalid' : '' }}" id="logoWhiteDropzone">
                        </div>
                        @if ($errors->has('logo_white'))
                        <div class="invalid-feedback">
                            {{ $errors->first('logo_white') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.logo_white_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="chairman_image">{{ trans('cruds.setting.fields.chairman_image') }}</label>
                        <div class="needsclick dropzone {{ $errors->has('chairman_image') ? 'is-invalid' : '' }}" id="chairmanImageDropzone">
                        </div>
                        @if ($errors->has('chairman_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('chairman_image') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.chairman_image_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="signature_image">{{ trans('cruds.setting.fields.signature_image') }}</label>
                        <div class="needsclick dropzone {{ $errors->has('signature_image') ? 'is-invalid' : '' }}" id="signatureImageDropzone">
                        </div>
                        @if ($errors->has('signature_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('signature_image') }}
                        </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.setting.fields.signature_image_helper') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="organizational_chart">الهيكل التنظيمي</label>
                        <div class="needsclick dropzone {{ $errors->has('organizational_chart') ? 'is-invalid' : '' }}" id="organizationalChartDropzone">
                        </div>
                        @if ($errors->has('organizational_chart'))
                        <div class="invalid-feedback">
                            {{ $errors->first('organizational_chart') }}
                        </div>
                        @endif
                        <span class="help-block">يرجى رفع الهيكل التنظيمي بصيغة PDF أو صورة</span>
                    </div>
                    <div class="form-group">
                        <label for="brochure">الكتيب التعريفي</label>
                        <div class="needsclick dropzone {{ $errors->has('brochure') ? 'is-invalid' : '' }}" id="brochureDropzone">
                        </div>
                        @if ($errors->has('brochure'))
                        <div class="invalid-feedback">
                            {{ $errors->first('brochure') }}
                        </div>
                        @endif
                        <span class="help-block">يرجى رفع الكتيب التعريفي بصيغة PDF</span>
                    </div>
                </div>

                <!-- Counters Tab -->
                <div class="tab-pane fade" id="counters" role="tabpanel" aria-labelledby="counters-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="counter_1_text">{{ trans('cruds.setting.fields.counter_1_text') }}</label>
                                <input class="form-control {{ $errors->has('counter_1_text') ? 'is-invalid' : '' }}" type="text" name="counter_1_text" id="counter_1_text" value="{{ old('counter_1_text', $setting->counter_1_text) }}">
                                @if ($errors->has('counter_1_text'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_1_text') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_1_text_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="counter_1_value">{{ trans('cruds.setting.fields.counter_1_value') }}</label>
                                <input class="form-control {{ $errors->has('counter_1_value') ? 'is-invalid' : '' }}" type="number" name="counter_1_value" id="counter_1_value" value="{{ old('counter_1_value', $setting->counter_1_value) }}" step="1">
                                @if ($errors->has('counter_1_value'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_1_value') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_1_value_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="counter_2_text">{{ trans('cruds.setting.fields.counter_2_text') }}</label>
                                <input class="form-control {{ $errors->has('counter_2_text') ? 'is-invalid' : '' }}" type="text" name="counter_2_text" id="counter_2_text" value="{{ old('counter_2_text', $setting->counter_2_text) }}">
                                @if ($errors->has('counter_2_text'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_2_text') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_2_text_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="counter_2_value">{{ trans('cruds.setting.fields.counter_2_value') }}</label>
                                <input class="form-control {{ $errors->has('counter_2_value') ? 'is-invalid' : '' }}" type="number" name="counter_2_value" id="counter_2_value" value="{{ old('counter_2_value', $setting->counter_2_value) }}" step="1">
                                @if ($errors->has('counter_2_value'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_2_value') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_2_value_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="counter_3_text">{{ trans('cruds.setting.fields.counter_3_text') }}</label>
                                <input class="form-control {{ $errors->has('counter_3_text') ? 'is-invalid' : '' }}" type="text" name="counter_3_text" id="counter_3_text" value="{{ old('counter_3_text', $setting->counter_3_text) }}">
                                @if ($errors->has('counter_3_text'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_3_text') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_3_text_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="counter_3_value">{{ trans('cruds.setting.fields.counter_3_value') }}</label>
                                <input class="form-control {{ $errors->has('counter_3_value') ? 'is-invalid' : '' }}" type="number" name="counter_3_value" id="counter_3_value" value="{{ old('counter_3_value', $setting->counter_3_value) }}" step="1">
                                @if ($errors->has('counter_3_value'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_3_value') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_3_value_helper') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="counter_4_text">{{ trans('cruds.setting.fields.counter_4_text') }}</label>
                                <input class="form-control {{ $errors->has('counter_4_text') ? 'is-invalid' : '' }}" type="text" name="counter_4_text" id="counter_4_text" value="{{ old('counter_4_text', $setting->counter_4_text) }}">
                                @if ($errors->has('counter_4_text'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_4_text') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_4_text_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="counter_4_value">{{ trans('cruds.setting.fields.counter_4_value') }}</label>
                                <input class="form-control {{ $errors->has('counter_4_value') ? 'is-invalid' : '' }}" type="number" name="counter_4_value" id="counter_4_value" value="{{ old('counter_4_value', $setting->counter_4_value) }}" step="1">
                                @if ($errors->has('counter_4_value'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_4_value') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_4_value_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="counter_5_text">{{ trans('cruds.setting.fields.counter_5_text') }}</label>
                                <input class="form-control {{ $errors->has('counter_5_text') ? 'is-invalid' : '' }}" type="text" name="counter_5_text" id="counter_5_text" value="{{ old('counter_5_text', $setting->counter_5_text) }}">
                                @if ($errors->has('counter_5_text'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_5_text') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_5_text_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="counter_5_value">{{ trans('cruds.setting.fields.counter_5_value') }}</label>
                                <input class="form-control {{ $errors->has('counter_5_value') ? 'is-invalid' : '' }}" type="number" name="counter_5_value" id="counter_5_value" value="{{ old('counter_5_value', $setting->counter_5_value) }}" step="1">
                                @if ($errors->has('counter_5_value'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_5_value') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_5_value_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="counter_6_text">{{ trans('cruds.setting.fields.counter_6_text') }}</label>
                                <input class="form-control {{ $errors->has('counter_6_text') ? 'is-invalid' : '' }}" type="text" name="counter_6_text" id="counter_6_text" value="{{ old('counter_6_text', $setting->counter_6_text) }}">
                                @if ($errors->has('counter_6_text'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_6_text') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_6_text_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="counter_6_value">{{ trans('cruds.setting.fields.counter_6_value') }}</label>
                                <input class="form-control {{ $errors->has('counter_6_value') ? 'is-invalid' : '' }}" type="number" name="counter_6_value" id="counter_6_value" value="{{ old('counter_6_value', $setting->counter_6_value) }}" step="1">
                                @if ($errors->has('counter_6_value'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('counter_6_value') }}
                                </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.setting.fields.counter_6_value_helper') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <div class="form-group">
                        <button class="btn btn-danger btn-lg px-5" type="submit">
                            <i class="fas fa-save me-2"></i>{{ trans('global.save') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<style>
    .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
        color: #6c757d;
        transition: all 0.3s ease;
    }

    .nav-tabs .nav-link:hover {
        border-color: #e9ecef #e9ecef #dee2e6;
        color: #495057;
    }

    .nav-tabs .nav-link.active {
        color: #495057;
        background-color: #fff;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    .nav-tabs .nav-link i {
        margin-right: 5px;
    }

    .tab-content {
        border: 1px solid #dee2e6;
        border-top: none;
        padding: 20px;
        background-color: #fff;
    }

</style>

<script>
    $(document).ready(function() {
        // Initialize Bootstrap tabs
        $('#settingsTabs button[data-toggle="tab"]').on('click', function(e) {
            e.preventDefault()
            var target = $(this).attr('data-target')
            $(target).tab('show')
        })

        function SimpleUploadAdapter(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                return {
                    upload: function() {
                        return loader.file
                            .then(function(file) {
                                return new Promise(function(resolve, reject) {
                                    // Init request
                                    var xhr = new XMLHttpRequest();
                                    xhr.open('POST'
                                        , '{{ route('admin.settings.storeCKEditorImages') }}'
                                        , true);
                                    xhr.setRequestHeader('x-csrf-token', window._token);
                                    xhr.setRequestHeader('Accept', 'application/json');
                                    xhr.responseType = 'json';

                                    // Init listeners
                                    var genericErrorText =
                                        `Couldn't upload file: ${ file.name }.`;
                                    xhr.addEventListener('error', function() {
                                        reject(genericErrorText)
                                    });
                                    xhr.addEventListener('abort', function() {
                                        reject()
                                    });
                                    xhr.addEventListener('load', function() {
                                        var response = xhr.response;

                                        if (!response || xhr.status !== 201) {
                                            return reject(response && response
                                                .message ?
                                                `${genericErrorText}\n${xhr.status} ${response.message}` :
                                                `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`
                                            );
                                        }

                                        $('form').append(
                                            '<input type="hidden" name="ck-media[]" value="' +
                                            response.id + '">');

                                        resolve({
                                            default: response.url
                                        });
                                    });

                                    if (xhr.upload) {
                                        xhr.upload.addEventListener('progress', function(
                                            e) {
                                            if (e.lengthComputable) {
                                                loader.uploadTotal = e.total;
                                                loader.uploaded = e.loaded;
                                            }
                                        });
                                    }

                                    // Send request
                                    var data = new FormData();
                                    data.append('upload', file);
                                    data.append('crud_id', '{{ $setting->id ?? 0 }}');
                                    xhr.send(data);
                                });
                            })
                    }
                };
            }
        }

        var allEditors = document.querySelectorAll('.ckeditor');
        for (var i = 0; i < allEditors.length; ++i) {
            ClassicEditor.create(
                allEditors[i], {
                    extraPlugins: [SimpleUploadAdapter]
                }
            );
        }
    });

</script>

<script>
    Dropzone.options.aboutPhotoDropzone = {
        url: '{{ route('admin.settings.storeMedia') }}',
        maxFilesize: 4, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        maxFiles: 1,
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
            size: 40,
            width: 670,
            height: 520
        },
        success: function(file, response) {
            $('form').find('input[name="about_photo"]').remove();
            $('form').append('<input type="hidden" name="about_photo" value="' + response.name + '">');
        },
        removedfile: function(file) {
            file.previewElement.remove();
            if (file.status !== 'error') {
                $('form').find('input[name="about_photo"]').remove();
                this.options.maxFiles = this.options.maxFiles + 1;
            }
        },
        init: function() {
            @if(isset($setting) && $setting->about_photo)
                var file = {!! json_encode($setting->about_photo) !!};
                this.options.addedfile.call(this, file);
                this.options.thumbnail.call(this, file, file.preview || file.preview_url);
                file.previewElement.classList.add('dz-complete');
                $('form').append('<input type="hidden" name="about_photo" value="' + file.file_name + '">');
                this.options.maxFiles = this.options.maxFiles - 1;
            @endif
        },
        error: function(file, response) {
            if ($.type(response) === 'string') {
                var message = response; //dropzone sends it's own error messages in string
            } else {
                var message = response.errors.file;
            }
            file.previewElement.classList.add('dz-error');
            _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]');
            _results = [];
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                node = _ref[_i];
                _results.push(node.textContent = message);
            }

            return _results;
        }
    }

</script>
<script>
    Dropzone.options.aboutInnerPhotoDropzone = {
        url: '{{ route('admin.settings.storeMedia') }}',
        maxFilesize: 4, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        maxFiles: 1,
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
            size: 40,
            width: 615,
            height: 616
        },
        success: function(file, response) {
            $('form').find('input[name="about_inner_photo"]').remove();
            $('form').append('<input type="hidden" name="about_inner_photo" value="' + response.name + '">');
        },
        removedfile: function(file) {
            file.previewElement.remove();
            if (file.status !== 'error') {
                $('form').find('input[name="about_inner_photo"]').remove();
                this.options.maxFiles = this.options.maxFiles + 1;
            }
        },
        init: function() {
            @if(isset($setting) && $setting->about_inner_photo)
                var file = {!! json_encode($setting->about_inner_photo) !!};
                this.options.addedfile.call(this, file);
                this.options.thumbnail.call(this, file, file.preview || file.preview_url);
                file.previewElement.classList.add('dz-complete');
                $('form').append('<input type="hidden" name="about_inner_photo" value="' + file.file_name + '">');
                this.options.maxFiles = this.options.maxFiles - 1;
            @endif
        },
        error: function(file, response) {
            if ($.type(response) === 'string') {
                var message = response; //dropzone sends it's own error messages in string
            } else {
                var message = response.errors.file;
            }
            file.previewElement.classList.add('dz-error');
            _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]');
            _results = [];
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                node = _ref[_i];
                _results.push(node.textContent = message);
            }

            return _results;
        }
    }
</script>
<script>
    Dropzone.options.innerImageDropzone = {
        url: '{{ route('admin.settings.storeMedia') }}',
        maxFilesize: 40, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        maxFiles: 1,
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
            size: 40
        },
        success: function(file, response) {
            $('form').find('input[name="inner_image"]').remove();
            $('form').append('<input type="hidden" name="inner_image" value="' + response.name + '">');
        },
        removedfile: function(file) {
            file.previewElement.remove();
            if (file.status !== 'error') {
                $('form').find('input[name="inner_image"]').remove();
                this.options.maxFiles = this.options.maxFiles + 1;
            }
        },
        init: function() {
            @if(isset($setting) && $setting->inner_image)
                var file = {!! json_encode($setting->inner_image) !!};
                this.options.addedfile.call(this, file);
                this.options.thumbnail.call(this, file, file.preview || file.preview_url);
                file.previewElement.classList.add('dz-complete');
                $('form').append('<input type="hidden" name="inner_image" value="' + file.file_name + '">');
                this.options.maxFiles = this.options.maxFiles - 1;
            @endif
        },
        error: function(file, response) {
            if ($.type(response) === 'string') {
                var message = response;
            } else {
                var message = response.errors.file;
            }
            file.previewElement.classList.add('dz-error');
            _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]');
            _results = [];
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                node = _ref[_i];
                _results.push(node.textContent = message);
            }

            return _results;
        }
    }

</script>
<script>
    Dropzone.options.logoDropzone = {
        url: '{{ route('admin.settings.storeMedia') }}'
        , maxFilesize: 40, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif'
        , maxFiles: 1
        , addRemoveLinks: true
        , headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
        , params: {
            size: 40
            , width: 105
            , height: 100

        }
        , success: function(file, response) {
            $('form').find('input[name="logo"]').remove()
            $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
        }
        , removedfile: function(file) {
            file.previewElement.remove()
            if (file.status !== 'error') {
                $('form').find('input[name="logo"]').remove()
                this.options.maxFiles = this.options.maxFiles + 1
            }
        }
        , init: function() {
            @if(isset($setting) && $setting -> logo)
            var file = {!!json_encode($setting -> logo) !!}
            this.options.addedfile.call(this, file)
            this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
            this.options.maxFiles = this.options.maxFiles - 1
            @endif
        }
        , error: function(file, response) {
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
<script>
    Dropzone.options.logoWhiteDropzone = {
        url: '{{ route('admin.settings.storeMedia') }}'
        , maxFilesize: 2, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif'
        , maxFiles: 1
        , addRemoveLinks: true
        , headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
        , params: {
            size: 2,

        }
        , success: function(file, response) {
            $('form').find('input[name="logo_white"]').remove()
            $('form').append('<input type="hidden" name="logo_white" value="' + response.name + '">')
        }
        , removedfile: function(file) {
            file.previewElement.remove()
            if (file.status !== 'error') {
                $('form').find('input[name="logo_white"]').remove()
                this.options.maxFiles = this.options.maxFiles + 1
            }
        }
        , init: function() {
            @if(isset($setting) && $setting -> logo_white)
            var file = {!!json_encode($setting -> logo_white) !!}
            this.options.addedfile.call(this, file)
            this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="logo_white" value="' + file.file_name + '">')
            this.options.maxFiles = this.options.maxFiles - 1
            @endif
        }
        , error: function(file, response) {
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
<script>
    Dropzone.options.chairmanImageDropzone = {
        url: '{{ route('admin.settings.storeMedia') }}'
        , maxFilesize: 40, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif'
        , maxFiles: 1
        , addRemoveLinks: true
        , headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
        , params: {
            size: 40
            , width: 500
            , height: 550
        }
        , success: function(file, response) {
            $('form').find('input[name="chairman_image"]').remove()
            $('form').append('<input type="hidden" name="chairman_image" value="' + response.name + '">')
        }
        , removedfile: function(file) {
            file.previewElement.remove()
            if (file.status !== 'error') {
                $('form').find('input[name="chairman_image"]').remove()
                this.options.maxFiles = this.options.maxFiles + 1
            }
        }
        , init: function() {
            @if(isset($setting) && $setting -> chairman_image)
            var file = {!!json_encode($setting -> chairman_image) !!}
            this.options.addedfile.call(this, file)
            this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="chairman_image" value="' + file.file_name + '">')
            this.options.maxFiles = this.options.maxFiles - 1
            @endif
        }
        , error: function(file, response) {
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
<script>
    Dropzone.options.signatureImageDropzone = {
        url: '{{ route('admin.settings.storeMedia') }}'
        , maxFilesize: 20, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif'
        , maxFiles: 1
        , addRemoveLinks: true
        , headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
        , params: {
            size: 20
            , width: 180
            , height: 52

        }
        , success: function(file, response) {
            $('form').find('input[name="signature_image"]').remove()
            $('form').append('<input type="hidden" name="signature_image" value="' + response.name + '">')
        }
        , removedfile: function(file) {
            file.previewElement.remove()
            if (file.status !== 'error') {
                $('form').find('input[name="signature_image"]').remove()
                this.options.maxFiles = this.options.maxFiles + 1
            }
        }
        , init: function() {
            @if(isset($setting) && $setting -> signature_image)
            var file = {!!json_encode($setting -> signature_image) !!}
            this.options.addedfile.call(this, file)
            this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="signature_image" value="' + file.file_name + '">')
            this.options.maxFiles = this.options.maxFiles - 1
            @endif
        }
        , error: function(file, response) {
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
<script>
    Dropzone.options.organizationalChartDropzone = {
        url: '{{ route('admin.settings.storeMedia') }}'
        , maxFilesize: 10, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif,.pdf'
        , maxFiles: 1
        , addRemoveLinks: true
        , headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
        , params: {
            size: 10
        , }
        , success: function(file, response) {
            $('form').find('input[name="organizational_chart"]').remove()
            $('form').append('<input type="hidden" name="organizational_chart" value="' + response.name + '">')
        }
        , removedfile: function(file) {
            file.previewElement.remove()
            if (file.status !== 'error') {
                $('form').find('input[name="organizational_chart"]').remove()
                this.options.maxFiles = this.options.maxFiles + 1
            }
        }
        , init: function() {
            @if(isset($setting) && $setting -> organizational_chart)
            var file = {!!json_encode($setting -> organizational_chart) !!}
            this.options.addedfile.call(this, file)
            this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="organizational_chart" value="' + file.file_name + '">')
            this.options.maxFiles = this.options.maxFiles - 1
            @endif
        }
        , error: function(file, response) {
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
<script>
    Dropzone.options.brochureDropzone = {
        url: '{{ route('admin.settings.storeMedia') }}'
        , maxFilesize: 15, // MB
        acceptedFiles: '.pdf'
        , maxFiles: 1
        , addRemoveLinks: true
        , headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
        , params: {
            size: 15
        , }
        , success: function(file, response) {
            $('form').find('input[name="brochure"]').remove()
            $('form').append('<input type="hidden" name="brochure" value="' + response.name + '">')
        }
        , removedfile: function(file) {
            file.previewElement.remove()
            if (file.status !== 'error') {
                $('form').find('input[name="brochure"]').remove()
                this.options.maxFiles = this.options.maxFiles + 1
            }
        }
        , init: function() {
            @if(isset($setting) && $setting -> brochure)
            var file = {!!json_encode($setting -> brochure) !!}
            this.options.addedfile.call(this, file)
            this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="brochure" value="' + file.file_name + '">')
            this.options.maxFiles = this.options.maxFiles - 1
            @endif
        }
        , error: function(file, response) {
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
