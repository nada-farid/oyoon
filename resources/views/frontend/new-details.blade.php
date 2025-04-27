@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'الاخبار',
        'sub_heading' => 'أخبار عيون جدة',
    ])

    <div class="donate-section blog-details">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-2"></div>
                <div class="col-12   col-xl-8">
                    <div class="blog-single-box2 upper">
                        <!-- donations thumb -->
                        @if ($new->inner_image)
                            <div class="donations-thumb">
                                <img src="{{ $new->inner_image->getUrl() }}" alt="">

                            </div>
                        @endif
                        <div class="blogs-content2">
                            <!-- blog title -->
                            <div class="blog-title2">
                                <h3><a href="{{ route('frontend.new', $new->id) }}">{{ $new->name }}</a>
                                </h3>
                            </div>
                            <!-- blog text -->
                            <div class="blog-text2">
                                <p> <span class="blog-rt"><i class="bi bi-calendar2-check"></i>
                                        {{ $new->custom_date }}</span> <span class="blog-rt"> <i class="bi bi-map"></i>
                                        {{ $new->address }}</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- blog secription -->
                    {!! $new->description !!}
                    <!-- blog special desc -->

                    <div class="row pt-2">
                        @foreach ($news->images as $key => $media)
                            <div class="col-lg-6 col-md-6">
                                <div class="event-thumb">
                                    <img src="{{ $media->getUrl() }}">
                                </div>
                            </div>
                        @endforeach

                    </div>
                    {!! $new->short_description !!}

                </div>

            </div>
        </div>
    </div>
@endsection
