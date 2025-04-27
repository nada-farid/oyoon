@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'المقالات',
        'sub_heading' => 'المقالات',
    ])

    <div class="events-section style-three">
        <div class="container">
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-lg-12">
                        <div class="events-single-box">
                            <!-- events thumb -->
                            <div class="events-thumb">
                                @if ($article->image)
                                    <img src="{{ $article->image->geturl() }}" alt="">
                                @endif
                                <!-- thumb button -->
                                <div class="thumb-button">
                                    <span>{{ $article->custom_date }}</span>
                                </div>
                            </div>
                            <!-- events content -->
                            <div class="events-content">
                                <!-- event title -->
                                <div class="event-title">
                                    <h3><a href="{{ route('frontend.article', $article->id) }}">{{ $article->title }}</a>
                                    </h3>
                                </div>
                                <!-- event desc -->
                                <div class="event-discription">
                                    <p>
                                        {{ $article->short_description }}
                                    </p>
                                </div>
                                <!-- event text -->
                                <div class="event-text">
                                    <p> <i class="bi bi-clock"></i> {{ $article->custom_date }} </p>
                                </div>
                            </div>
                            <!-- event date -->
                            <div class="event-date">
                                <span>{{ $article->writer_name }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $article->links('vendor.custom-pagination') }}

            </div>
        </div>
    </div>
@endsection
