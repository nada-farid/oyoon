@extends('frontend.layouts.main')
@section('content')
    <!-- Start hero section -->
    <!--==================================================-->
    <div class="slider">

        <ul id="demo1" style="direction:ltr;">
            @foreach ($sliders as $slider)
                <li>
                    <div class="slidelink"><a href="{{ $slider->link }}">
                            <div class="overslide"></div><img src="{{ $slider->image->getUrl() }}" />
                        </a> </div>
                </li>
            @endforeach


        </ul>
        <div class="slider_hover"></div>
    </div>
    <!--==================================================-->
    <!--End  hero section  -->
    <!--==================================================-->
    <!--==================================================-->
    <!--start  hero section  -->
    <!--==================================================-->

    <div class="service-home-section">

        <div class="row">
            @foreach ($services as $service)
                <div class="col-md-3">
                    <div class="h-serv colorOne">
                        <h5>{{ $service->name }}</h5>
                        <p>{{ $service->description }}</p>

                    </div>
                    <div class="backserv"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#fff" fill-opacity="1"
                                d="M0,192L60,170.7C120,149,240,107,360,112C480,117,600,171,720,186.7C840,203,960,181,1080,165.3C1200,149,1320,139,1380,133.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
                            </path>
                        </svg></div>
                </div>
            @endforeach

        </div>

    </div>

    <!--==================================================-->
    <!-- Start  about Section -->
    <!--==================================================-->
    <div class="about-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6  pl-4">
                    <div class="charina-section-title">
                        <h4> عن الجمعية </h4>

                        <h1 class="section-text"> عيون <span>جــــــدة</span> </h1>
                        
                            {!! $setting->short_descrption !!}

                    </div>

                    <!-- charina check list -->
                    <div class="charina-check-list">

                        <p class="charina-icon"> <i class="bi bi-check-circle-fill"></i> أهم مبادرات الجمعية </p>
                        <p> {{ $setting->about_description }}</p>
                    </div>
                    <!-- charina button -->
                    <div class="charina-button">
                        <a href="{{ route('frontend.about') }}"> المزيد <i class="bi bi-chevron-double-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- about thumb -->

                    @if ($setting->about_photo)
                        <div class="about-thumb">
                            <img src="{{ $setting->about_photo->getUrl() }}" alt="" class="img-fluid">
                        </div>
                    @endif
                </div>
                <!-- about shape -->

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- End  about Secton -->
    <!--==================================================-->
    <!--==================================================-->

    <!-- Start  donate section  -->
    <!--==================================================-->

    <div class="donate-section page-two bg-grey"
        style="background-image: url(assets/images/daonation_bg.png); background-repeat:no-repeat; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="{{ asset('frontend/assets/images/logoIcon.png') }}" width="50">
                    <div class="charina-section-title text-center pb-50">
                        <h1 class="section-text"> مبــادراتــنا </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="charina-donate-single-box">
                            <!-- donate thumb -->
                            <div class="donate-thumb">
                                <img src="assets/images/pro01.png" alt="">
                                <!-- thumb text -->
                                <div class="thumb-category">
                                    <span> {{ $project->beneficiar->title }}</span>
                                </div>
                            </div>
                            <!-- donate content -->
                            <div class="charina-donate-content">
                                <div class="donate-title">
                                    <h3><a href="donations-details.html"> {{ $project->short_description }}</a></h3>
                                </div>

                                <!-- progress ber -->
                                {{-- <div class="progress-ber-plugin">
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="60.1"></span>
                                </div>
                                <div class="progress-text">
                                    <p>تحقق : <span>ر.س 50,000</span> </p>
                                    <p class="progress-text"> الهدف : <span>ر.س 50,000</span></p>
                                </div>
                            </div> --}}
                                <!-- progress ber end -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End  donate Secton -->
    <!--==================================================-->
    <!--==================================================-->
    <!-- End  events section -->
    <!--==================================================-->

    <div class="manager-home colorTwo">

        @if ($setting->chairman_image)
            <div class="img-manager">
                <img src="{{ $setting->chairman_image->getUrl() }}" />
            </div>
        @endif

        <div class="manager-text">
            {!! $setting->chairman_description !!}
        </div>


    </div>


    <!--==================================================-->

	<!-- Start  Blog Section -->
	<!--==================================================-->
	<div class="blog-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<img src="{{('frontend/assets/images/logoIcon.png')}}" width="50" />
					<div class="charina-section-title text-center pb-50">

						<h4> أخبار عيون جدة </h4>

						<h1 class="section-text"> أحدث الاخبار & <span>والمقالات</span> </h1>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($news as $new)
				<div class="col-12 col-lg-3 col-md-6">
					<div class="blog-single-box2">
						<!-- donations thumb -->
						<div class="donations-thumb">
							<img src="{{$new->image->getUrl}}" alt="">

						</div>
						<div class="blogs-content">
							<!-- blog text -->
							<div class="blog-text2">
								<p> <span class="blog-rt"><i class="bi bi-calendar2-check"></i>{{$new->custom_date}}</span></p>
							</div>
							<!-- blog title -->
							<div class="blog-title2">
								<h3><a href="{{route('frontend.new',$new->id)}}">{{$new->name}}</a></h3>
							</div>


							<div class="charina-button a">
								<a href="{{route('frontend.new',$new->id)}}">المزيد  <i class="bi bi-chevron-double-left"></i></a>
							</div>
						</div>
					</div>
				</div>
               @endforeach
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Start  Blog Section -->
	<!--==================================================-->
	<!--==================================================-->
	<!-- Start  Brand Section -->
	<!--==================================================-->
	<div class="brand-section bg-grey" style="direction:ltr;" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
				
					<div class="charina-section-title text-center pb-20">

						<h1> شركــاؤونا </h1>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="brand-list owl-carousel">
			     @foreach ($clients as $client)
				 
					<div class="col-lg-12">
						<div class="single-brand-thumb">
							<img src="{{$client->image->getUrl()}}" alt="">
						</div>
					</div>
					@endforeach		
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End  Brand Secton -->
	<!--==================================================-->
	<!--==================================================-->

@endsection
