@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => ' عن الجمعية',
        'sub_heading' => ' مجلس الإدارة',
    ])

    <!-- Start charina Blog Section -->
    <!--==================================================-->
    <div class="volunteers-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="charina-section-title text-center pb-50">
                        <h4> نبذة عن الجمعية </h4>
                        <h1>
                            مجلس الإدارة
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($directors as $director)
                    <div class="col-lg-3 col-md-6">
                        <div class="volunteer-single-box upper">
                            <!-- volunteer thumb -->
                            <div class="volunteer-thumb">
                                @if ($director->image)
                                    <img src="{{ $director->image->getUrl() }}" alt="">
                                @endif
                                <!-- volunteer social icon -->
                                <div class="volunteer-social-icon">
                                    <span>+</span>
                                </div>
                            </div>
                            <!-- volunteer title -->
                            <div class="volunteer-title">
                                <h2> {{ $director->name }}</h2>
                            </div>
                            <div class="volunteer-text">
                                <span>{{ $director->position }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End  galary Section -->
@endsection
