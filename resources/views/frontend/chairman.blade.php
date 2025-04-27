@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => ' عن الجمعية',
        'sub_heading' => 'كلمة رئيس مجلس الإدارة',
    ])

    <!-- Start  Blog Section -->
    <!--==================================================-->
    <div class="volunteers-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
            <div class="row">


                <div class=" col-md-5">
                    <img src="assets/images/manager1.png" alt="" class="img-fluid">
                </div>

                <div class="col-md-6">
                    <div class="charina-section-title text-right pb-50">
                        <h4> نبذة عن الجمعية </h4>
                        <h1>
                            رئيس مجلس الادارة
                        </h1>
                    </div>
                    <div class="scope-text">
                        {!! $setting->chairman_description !!}

                        @if ($setting->chairman_image)
                            <div class="sign text-left">
                                <img src="{{ $setting->chairman_image->getUrl() }}" alt="">
                            </div>
                        @endif
                    </div>



                </div>



            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End  galary Section -->
@endsection
