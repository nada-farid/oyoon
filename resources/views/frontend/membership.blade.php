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
                        <form action="{{ route('frontend.membership.store') }}" method="POST" id="dreamit-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form_box mb-20">
                                        <input type="text" name="name" placeholder="الاسم بالكامل*">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="email" placeholder="البريد الالكتروني">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="phone_number" placeholder="الجوال">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="job" placeholder="المهنة">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="employer" placeholder="جهة العمل">
                                    </div>
                                </div>



                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="identity_number" placeholder="رقم الهوية">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="identity_date" placeholder="تاريخها ">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="residence" placeholder="مكان الاقامة ">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form_box mb-20">
                                        <input type="text" name="neighborhood" placeholder="الحي ">
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form_box mb-20">
                                        <input type="text" name="address" placeholder="العنوان">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-20">
                                        <select id="" name="type_id" form="">
                                            <option value="">نوع العضوية</option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <label for="" class="" style="color:#808080; "><input
                                            data-drupal-selector="" style="margin-left: 10px;"
                                            class="form-checkbox required" type="checkbox"
                                            id="edit-i-have-read-the-membership-registration-mechanism-and-understood"
                                            name="i_have_read_the_membership_registration_mechanism_and_understood"
                                            value="1" required="required" aria-required="true">لقد قرأت دليل تسجيل
                                        العضوية وأوافق على ما جاء فيه.</label>
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
