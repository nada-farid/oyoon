@extends('frontend.layouts.main')
@section('content')
    @include('frontend.partial.breadcrumb', [
        'haeding' => ' العضويات',
        'sub_heading' => ' دليل التسجيل في العضوية ',
    ])

    <div class="volunteers-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <img src="{{asset('frontend/assets/images/guide.png')}}" class="img-fluid" />
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="charina-section-title text-right ">
                        <h4>
                            شروط العضوية:
                        </h4>
                    </div>

                    <div class="guide">
                        {!! $setting->membership_conditions !!}
                    </div>


                </div>

                <div class="col-md-4">
                    <div class="charina-section-title text-right ">
                        <h4>
                            فقدان العضوية:

                        </h4>
                    </div>

                    <div class="guide">
                        {!! $setting->loss_membership !!}
                    </div>


                </div>


                <div class="col-md-4">
                    <div class="charina-section-title text-right ">
                        <h4>
                            التزامات العضوية:

                        </h4>
                    </div>

                    <div class="guide">
                        {!! $setting->commitments_membership !!}
                    </div>


                </div>
            </div>



            <div class="row mt-4">

                <div class="col-md-12">
                    <div class="charina-button w-100">
                        <a class="w-100 text-center" href="{{route('frontend.membership')}}">سجل عضويتك وساهم معنا لخدمة مجتمعنا <i
                                class="bi bi-chevron-double-left"></i></a>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
