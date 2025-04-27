@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'نبذة عن الجمعية',
        'sub_heading' => 'عن الجمعية',
    ])

    <!-- Start  about section  -->
    <!--==================================================-->
    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- about thumb -->
                    @if ($setting->about_inner_photo)
                        <div class="about-thumb2">
                            <img src="{{ $setting->about_inner_photo->getUrl() }}" alt="">
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 ">
                    <div class="charina-section-title">
                        <h4> نبذة عن الجمعية </h4>

                    </div>
                    <!-- about items -->
                    {!! $setting->description !!}

                </div>
                <!-- about shape -->
                <div class="about-shape2 dance">
                    <img src="{{ asset('frontend/assets/images/resource/most.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End  about section -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start  mission Section -->
    <!--==================================================-->
    <div class="mission-sectoin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="charina-section-title white text-center pb-60">
                        <h4> نبذة عن الجمعية </h4>
                        <h1> جمعية عيـون جــدة </h1>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End  mission section -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start  mission Section -->
    <!--==================================================-->
    <div class="vission-sectoin style-two">
        <div class="container">
            <div class="row vission-bg">
                <div class="col-lg-12">
                    <!-- / tab -->
                    <div class="tab">
                        <!-- / tabs -->
                        <ul class="tabs">
                            <li><a href="#"> الرؤية </a></li>
                            <li><a href="#"> الرسالة </a></li>
                            <li><a href="#"> الاهداف </a></li>
                            <li><a href="#">مبادراتنــا</a></li>
                        </ul>
                        <!-- tab content -->
                        <div class="tab_content">
                            <!-- tabs_item -->
                            <div class="tabs_item">
                                <div class="charina-single-mission-items">
                                    <!-- mission thumb -->
                                    <div class="charina-mission-thumb">
                                        <img src="{{ asset('frontend/assets/images/resource/tab1.jpg') }}" alt="">
                                    </div>
                                    <!-- mission content -->
                                    <div class="charina-mission-content">
                                        <!-- mission title -->
                                        <div class="mission-title">
                                            <h3> الرؤية </h3>
                                        </div>
                                        <!-- mission items desc -->
                                        {!! $setting->mission !!}
                                    </div>
                                    <!-- / mission content -->
                                </div>
                            </div>
                            <!-- tabs_item -->
                            <div class="tabs_item">
                                <div class="charina-single-mission-items">
                                    <!-- mission thumb -->
                                    <div class="charina-mission-thumb">
                                        <img src="{{ asset('frontend/assets/images/resource/tab2.jpg') }}" alt="">
                                    </div>
                                    <!-- mission content -->
                                    <div class="charina-mission-content">
                                        <!-- mission title -->
                                        <div class="mission-title">
                                            <h3> الرسالة </h3>
                                        </div>
                                        <!-- mission items desc -->
                                        {!! $setting->vision !!}
                                    </div>
                                    <!-- / mission content -->
                                </div>
                            </div>
                            <!-- / tabs_item -->
                            <div class="tabs_item">
                                <div class="charina-single-mission-items">
                                    <!-- mission thumb -->
                                    <div class="charina-mission-thumb">
                                        <img src="{{ asset('frontend/assets/images/resource/tab3.jpg') }}" alt="">
                                    </div>
                                    <!-- mission content -->
                                    <div class="charina-mission-content">
                                        <!-- mission title -->
                                        <div class="mission-title">
                                            <h3> الأهداف </h3>
                                        </div>
                                        {!! $setting->values !!}
                                    </div>
                                    <!-- / mission content -->
                                </div>
                            </div>
                            <!-- tabs_item -->
                            <div class="tabs_item">
                                <div class="charina-single-mission-items">
                                    <!-- mission thumb -->
                                    <div class="charina-mission-thumb">
                                        <img src="{{ asset('frontend/assets/images/resource/tab4.jpg') }}" alt="">
                                    </div>
                                    <!-- mission content -->
                                    <div class="charina-mission-content">
                                        <!-- mission title -->
                                        <div class="mission-title">
                                            <h3> مبادرتنا </h3>
                                        </div>
                                        <!-- mission items desc -->
                                        {!! $setting->initiative !!}
                                    </div>
                                    <!-- / mission content -->
                                </div>
                            </div>
                        </div> <!-- / tab_content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End charina mission section -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- Start  Subscribe Section -->
    <!--==================================================-->
    <div class="counter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="charina-section-title">
                        <h4> حقائق ومعلومات </h4>
                        <h1>لماذا <span> ؟ تدعمنا</span> </h1>
                        <p>{!! $setting->support_text !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        @for ($i = 1; $i < 9; $i++)
                            @php
                                $counter = 'counter_' . $i . '_value';
                                $text = 'counter_' . $i . '_text';
                            @endphp
                            @if ($setting->$counter && $setting->$text)
                                <div class="col-lg-4 col-md-6">
                                    <div class="counter-single-box">
                                        <!-- counter thumb -->
                                        <div class="counter-thumb">
                                            <img src="{{ asset('frontend/assets/images/resource/counter1.png') }}"
                                                alt="">
                                            <!-- counter title -->
                                            <div class="counter-content">
                                                <div class="counter-title">
                                                    <h1 class="counter">{{ $setting->$counter }}</h1>
                                                    <h1 class="counter-title2">M</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- counter text -->
                                        <div class="counter-text">
                                            <p>{{ $setting->$text }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <!--  animated-text js -->
    <script src="{{ asset('frontend/assets/js/animated-text.js') }}"></script>
@endsection
