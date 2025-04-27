@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'لماذا تدعمنا؟',
        'sub_heading' => 'لماذا تدعمنا؟',
    ])

<div class="service-section">
    <div class="container">
        <div class="row">
          @foreach($supports as $support)
            <div class="col-12 col-lg-3 col-md-4">
                <div class="service-single-box">
                    <!-- serivce icon -->
                    <div class="service-icon">
                        <img src="{{$support->icon->getUrl()}}" alt="">
                    </div>
                    <!-- service content -->
                    <div class="service-content">
                        <div class="service-title">
                            <h3> {{$support->title}}</h3>
                        </div>
                        <div class="service-desc">
                            <p>{{$support->reason}}</p>
                        </div>

                    </div>
                </div>
            </div>
          @endforeach

        </div>
    </div>
</div>
@endsection
