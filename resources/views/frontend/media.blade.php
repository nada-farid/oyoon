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
                                    <p> <span class="blog-rt"><i class="bi bi-calendar2-check"></i>{{$media->custom_date}}</span>
                                    </p>
                                </div>
                                <!-- blog title -->
                              
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
@endsection
