@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => 'التقارير',
        'sub_heading' => 'التقارير',
    ])

    <div class="blogs-section blog-grid">
        <div class="container">
            <div class="row">


                <link rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <div class="faq__accordian-main-wrapper" id="faq__accordian-main-wrapper">
                    @foreach ($categories as $category)
                        <div class="faq__accordion-wrapper">
                            <a class="faq__accordian-heading" href="#">{{ $category->name }}</a>
                            <div class="faq__accordion-content" @if($loop->index == 2) style="display: none;" @endif>

                                <div class="quarter">
                                    <ul>
                                        @foreach ($category->reports as $report)
                                            <li><a href="{{ $report->file?->getUrl() }}">{{$report->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>


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
