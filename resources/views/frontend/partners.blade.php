@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => ' عن الجمعية',
        'sub_heading' => 'شركاؤنا',
    ])
    <!-- Start  galary Section -->
    <!--==================================================-->
    <div class="galary-section style-three gallery-page">
        <div class="container">
            <div class="row">
                @foreach ($partners as $partner)
                    <div class=" col-md-3">
                        <div class="galary-single-box">
                            <!-- galary thumb -->
                            <div class="galary-thumb">
                                <img src="{{$partner->image->getUrl()}}" alt="">
                                <!-- galary title -->
                                <div class="galary-title">
                                    <h5>{{ $partner->name }}</h5>
                                    <h4><a href="{{ $partner->link }}">زيارة الموقع</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End  galary Section -->
    <!--==================================================-->
@endsection
