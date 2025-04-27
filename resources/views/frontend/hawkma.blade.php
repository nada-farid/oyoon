@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'الحوكمة',
        'sub_heading' => 'الحوكمة',
    ])
    <!-- Start  donate section  -->
    <!--==================================================-->
    <div class="blogs-section blog-grid">
        <div class="container">
            <div class="row">
                @foreach ($files as $file)
                    @if ($file->file)
                        <div class="col-lg-4 col-md-6">
                            <div class="hawkma-single-box">
                                <!-- donations thumb -->
                                <div class="hawkma-thumb">
                                    <a href="{{ $file->file->getUrl() }}"><img
                                            src="{{ asset('frontend/assets/images/pdfIcon.png') }}" alt=""></a>

                                </div>


                                <!-- blog title -->
                                <div class="hawkma-title">
                                    <h5><a href="{{ $file->file->getUrl() }}">{{ $file->title }} </a></h5>
                                </div>



                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End charina donate Secton -->
    <!--==================================================-->
@endsection
