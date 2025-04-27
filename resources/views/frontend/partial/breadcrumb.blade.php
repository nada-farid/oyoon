<!--==================================================-->
	<div class="breatcam-section d-flex align-items-center" style="background-image: {{$setting->inner_image ?  $setting->inner_image->getUrl()  : "url(
	'frontend/assets/images/breatcome-bg.png')"}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breatcam-content text-center">
						<!-- breatcam menu -->
						<div class="breatcam-menu">
							<ul>
								<li><a href="{{route('frontend.home')}}">الرئيسية	</a></li>
								<li>
									<span>/{{$haeding}}</span> 
								</li>
							</ul>
						</div>
						<!-- breadcumb title -->
						<div class="breatcam-title">
							<h1>{{$sub_heading}}</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End  breatcam section -->
	<!--==================================================-->