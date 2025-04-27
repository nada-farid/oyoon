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
                        <form action="{{route('frontend.contact.store')}}" method="POST" id="dreamit-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="name" placeholder="الاسم">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text"  name="email" placeholder="البريد الالكتروني">
                                    </div>
                                    <input type="hidden" name="type" value="contact" />
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text"  name="subject" placeholder="الموضوع">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box">
                                        <input type="text" name="phone_number" placeholder="الجوال">
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
                            <h6> {{$setting->phone}}  </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-information">
                        <div class="contacts-icon upper">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contacts-title">
                            <h5>البريد الاكتروني</h5>
                            <h6>{{$setting->email}} </h6>
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
                            <h6> {{$setting->address}} </h6>
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
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.6194043224186!2d89.61168491495718!3d25.650754283687256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd33c03fbe69cb%3A0x273671e159f8b39e!2sRDRS%20Ulipur!5e0!3m2!1sen!2sbd!4v1636872467628!5m2!1sen!2sbd"
                        width="1140" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
