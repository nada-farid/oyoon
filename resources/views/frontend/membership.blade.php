@extends('frontend.layouts.main')
@section('style')
    <style>
        .contact-form button {
            background: #135a7c;
            border-radius: 30px;
            color: #fff;
        }
    </style>
@endsection
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => ' تسجيل عضوية',
        'sub_heading' => 'تسجيل عضوية',
    ])

    <div class="contact-form-section">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-lg-3 col-md-3 "></div>
                <div class="col-lg-6 col-md-6 pr-25">
                    <div class="contact-form-box">
                        <!-- sidebar title -->
                        <div class="sidebar-title">
                            <h1>البيانات الشخصية</h1>
                        </div>
                        <!-- form  -->
                        <form action="{{ route('frontend.membership.store') }}" method="POST" id="dreamit-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form_box mb-20">
                                        <input type="text" name="name"
                                            class=" {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                            id="name" value="{{ old('name', '') }}"
                                            placeholder="الاسم بالكامل*" required>
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">

                                        <input type="email" name="email"
                                            class=" {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                            id="email" value="{{ old('email', '') }}"
                                            placeholder="البريد الالكتروني*" required>
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="tel" name="phone_number"
                                            class="{{ $errors->has('phone_number') ? 'is-invalid' : '' }}"
                                            id="phone_number" value="{{ old('phone_number', '') }}"
                                            placeholder="الجوال*" required>
                                        @if ($errors->has('phone_number'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('phone_number') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" placeholder="المهنة"
                                            class="{{ $errors->has('job') ? 'is-invalid' : '' }}" name="job"
                                            id="job" value="{{ old('job', '') }}">
                                        @if ($errors->has('job'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('job') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="employer" placeholder="جهة العمل">
                                    </div>
                                </div>



                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">

                                        <input placeholder="رقم الهوية"
                                            class="{{ $errors->has('identity_number') ? 'is-invalid' : '' }}"
                                            type="text" name="identity_number" id="identity_number"
                                            value="{{ old('identity_number', '') }}" required>
                                        @if ($errors->has('identity_number'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('identity_number') }}
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="date" name="identity_date" 
                                            class="{{ $errors->has('identity_date') ? 'is-invalid' : '' }}"
                                            id="identity_date" value="{{ old('identity_date', '') }}"
                                            placeholder="تاريخ الهوية*" required>
                                        @if ($errors->has('identity_date'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('identity_date') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="date" name="date_of_birth" 
                                            class="{{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}"
                                            id="date_of_birth" value="{{ old('date_of_birth', '') }}"
                                            placeholder="تاريخ الميلاد">
                                        @if ($errors->has('date_of_birth'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('date_of_birth') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="residence" 
                                            class="{{ $errors->has('residence') ? 'is-invalid' : '' }}"
                                            id="residence" value="{{ old('residence', '') }}"
                                            placeholder="مكان الاقامة">
                                        @if ($errors->has('residence'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('residence') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="neighborhood" 
                                            class="{{ $errors->has('neighborhood') ? 'is-invalid' : '' }}"
                                            id="neighborhood" value="{{ old('neighborhood', '') }}"
                                            placeholder="الحي">
                                        @if ($errors->has('neighborhood'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('neighborhood') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="address" 
                                            class="{{ $errors->has('address') ? 'is-invalid' : '' }}"
                                            id="address" value="{{ old('address', '') }}"
                                            placeholder="العنوان">
                                        @if ($errors->has('address'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('address') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-20">
                                        <label for="photo" class="form-label">الصورة الشخصية</label>
                                        <input type="file" name="photo" 
                                            class="form-control {{ $errors->has('photo') ? 'is-invalid' : '' }}"
                                            id="photo" accept="image/*">
                                        <small class="form-text text-muted">يرجى رفع صورة شخصية واضحة (JPG, PNG, GIF)</small>
                                        @if ($errors->has('photo'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('photo') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form_box mb-20">
                                        <select name="type_id" 
                                            class="{{ $errors->has('type_id') ? 'is-invalid' : '' }}"
                                            id="type_id" required>
                                            <option value="">اختر نوع العضوية*</option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                                                    {{ $type->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('type_id'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('type_id') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-20">
                                        <label class="agreement-label" style="color:#808080;">
                                            <input type="checkbox" 
                                                name="agreement" 
                                                value="1" 
                                                {{ old('agreement') ? 'checked' : '' }}
                                                required 
                                                style="margin-left: 10px;">
                                            لقد قرأت دليل تسجيل العضوية وأوافق على ما جاء فيه.*
                                        </label>
                                        @if ($errors->has('agreement'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('agreement') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-form">
                                        <button type="submit"> طلب العضوية </button>
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
@endsection
