@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'الصور',
        'sub_heading' => ' البوم الصور ',
    ])

    <div class="blogs-section blog-grid">
        <div class="container">
            <div class="row">
                @foreach ($media as $media)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-single-box2">
                            <!-- donations thumb -->
                            <div class="donations-thumb">
                                <img src="{{$media->image->getUrl()}}" alt="">

                            </div>
                            <div class="blogs-content">
                                <!-- blog text -->
                                <div class="blog-text2">
                                    <p> <span class="blog-rt"><i class="bi bi-calendar2-check"></i>ديسمبر 10, 2024</span>
                                    </p>
                                </div>
                                <!-- blog title -->
                                <div class="blog-title2">
                                    <h3><a href="media-single.html">{{$media->name}}</a></h3>
                                </div>


                                <div class="charina-button a">
                                    <a href="media-single.html">المزيد <i class="bi bi-chevron-double-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
@endsection
