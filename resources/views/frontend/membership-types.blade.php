@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => ' العضويات',
        'sub_heading' => ' أنواع العضويات',
    ])

    <div class="blogs-section blog-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                </div>
                @foreach ($types as $type)
                    <div class="col-md-3">
                        <img src="{{$type->image->getUrl()}}" class="img-fluid" />
                    </div>
                @endforeach

            </div>
            <div class="row">


                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <div class="faq__accordian-main-wrapper mt-5" id="faq__accordian-main-wrapper">
                    @foreach ($types as $type)
                        <div class="faq__accordion-wrapper">
                            <a class="faq__accordian-heading "
                                href="{{ $type->file ? $type->file->getUrl() : '#' }}">{{ $type->title }} </a>
                            <div class="faq__accordion-content" style="display: none;">

                                {!! $type->description !!}
                            </div>
                        </div>
                    @endforeach
                </div>

                <script id="rendered-js">
                    jQuery('.faq__accordian-heading').click(function(e) {
                        e.preventDefault();
                        if (!jQuery(this).hasClass('active')) {
                            jQuery('.faq__accordian-heading').removeClass('active');
                            jQuery('.faq__accordion-content').slideUp(500);
                            jQuery(this).addClass('active');
                            jQuery(this).next('.faq__accordion-content').slideDown(500);
                        } else
                        if (jQuery(this).hasClass('active')) {
                            jQuery(this).removeClass('active');
                            jQuery(this).next('.faq__accordion-content').slideUp(500);
                        }
                    });
                    //# sourceURL=pen.js
                </script>
            </div>
        </div>
    </div>
@endsection
