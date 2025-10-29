@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'تواصل معنا',
        'sub_heading' => 'تواصل معنا',
    ])

    <!-- Start  Contac us Section -->
    <!--==================================================-->
    <div class="contact-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-60">
                    <div class="charina-section-title text-center">
                        <h4> تواصل معنا </h4>
                        <h1> لأي استفسارات او شكاوى لاتتردد في الاتصال بنا </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- contact form box -->
                    <div class="contact-form-box">
                        <form action="{{ route('frontend.contact.store') }}" method="POST" id="dreamit-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name"
                                            class=" {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                                            name="name" id="name" value="{{ old('name', '') }}"
                                            placeholder="الاسم بالكامل*">
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">

                                        <input type="text" name="email"
                                            class=" {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text"
                                            name="email" id="email" value="{{ old('email', '') }}"
                                            placeholder="البريد الالكتروني">
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <input type="hidden" name="type" value="contact" />
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="subject" placeholder="الموضوع">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="phone_number"
                                            class="{{ $errors->has('phone_number') ? 'is-invalid' : '' }}" type="text"
                                            name="phone_number" id="phone_number" value="{{ old('phone_number', '') }}"
                                            required placeholder="الجوال">
                                        @if ($errors->has('phone_number'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('phone_number') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box">
                                        <textarea name="message" id="massage" cols="30" rows="10" placeholder="الرســالة"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-form style-two text-center">
                                        <button type="submit"> إرسال </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End charina Contac us Section -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start charina Contac Inf Section -->
    <!--==================================================-->
    <div class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-60">
                    <div class="charina-section-title white text-center">
                        <h4> أين تجدنا </h4>
                        <h1> العنوان ووسائل التواصل </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-information">
                        <div class="contacts-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contacts-title">
                            <h5>الجوال</h5>
                            <h6> {{ $setting->phone }} </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-information">
                        <div class="contacts-icon upper">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contacts-title">
                            <h5>البريد الألكتروني</h5>
                            <h6>{{ $setting->email }} </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-information">
                        <div class="contacts-icon upper2">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contacts-title">
                            <h5>العنوان</h5>
                            <h6> {{ $setting->address }} </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End charina Contac Inf Section -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start charina Contac Inf Section -->
    <!--==================================================-->
    <div class="map-section">
        <div class="container">
            <div class="row map-bg">
                <div class="col-lg-12">
                    @if($setting->map_url)
                      <iframe
                        src="{{ $setting->map_url }}"
                        width="1140" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
