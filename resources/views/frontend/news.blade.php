@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'الاخبار',
        'sub_heading' => 'أخبار عيون جدة',
    ])

    <div class="blogs-section blog-grid">
        <div class="container">
            <div class="row">
                @foreach ($news as $new)
                    <div class="col-12 col-lg-3 col-md-6">
                        <div class="blog-single-box2">
                            <!-- donations thumb -->
                            @if ($new->image)
                                <div class="donations-thumb">
                                    <img src="{{ $new->image->getUrl() }}" alt="">

                                </div>
                            @endif
                            <div class="blogs-content">
                                <!-- blog text -->
                                <div class="blog-text2">
                                    <p> <span class="blog-rt"><i
                                                class="bi bi-calendar2-check"></i>{{ $new->custom_date }}</span></p>
                                </div>
                                <!-- blog title -->
                                <div class="blog-title2">
                                    <h3><a href="{{ route('frontend.new', $new->id) }}">{{ Str::limit($new->name, 35) }}</a>
                                    </h3>
                                </div>


                                <div class="charina-button a">
                                    <a href="{{ route('frontend.new', $new->id) }}">المزيد <i
                                            class="bi bi-chevron-double-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
