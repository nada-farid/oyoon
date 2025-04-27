@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => ' عن الجمعية',
        'sub_heading' => 'الشهادات والجوائز',
    ])

    <!--==================================================-->
    <div class="volunteers-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="charina-section-title text-center pb-50">
                        <h4> نبذة عن الجمعية </h4>
                        <h1>
                            الشهادات والجوائز

                        </h1>
                    </div>
                </div>
            </div>
            @foreach ($certificates as $certificate)
   
            <div class="row bg-grey p-3 {{ $loop->index == 0 ? '' : 'mt-5' }}">

                <div class=" col-md-1"></div>
                @if ($certificate->image)
                    <div class=" col-md-3">
                        <img src="{{ $certificate->image->getUrl() }}" alt="" class="img-fluid cer">
                    </div>
                @endif

            <div class="col-md-6">

                <div class="scope-text">
                        <p class="just">
                            {{ $certificate->description }}

                        </p>

                    </div>



             </div>

       

            </div>
            @endforeach
        </div>
    </div>
    <!--==================================================-->
    <!-- End  galary Section -->
    <!--==================================================-->
@endsection
