@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => ' عن الجمعية',
        'sub_heading' => 'نطاق الجمعية',
    ])

    <div class="volunteers-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="charina-section-title text-center pb-50">
                        <h4> نبذة عن الجمعية </h4>
                        <h1>
                            نطاق الجمعية
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">


                <div class=" col-md-6">


                    <img src="{{ asset('frontend/assets/images/map.png') }}" alt="" class="img-fluid">


                </div>




                <div class="col-md-6">

                    <div class="scope-text">
                        {!! $setting->scope !!}
                    </div>



                </div>



            </div>
        </div>
    </div>
@endsection
