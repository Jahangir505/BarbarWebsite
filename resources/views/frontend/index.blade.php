@extends('layouts.frontend.website')

@section('content')

<!-- banner -->
<section class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1" />
		<input type="radio" name="slides" id="slides_2" />
		<input type="radio" name="slides" id="slides_3" />
		<input type="radio" name="slides" id="slides_4" />
		<ul>
			@foreach($slider as $key=>$slide)
			<li>
				<div class="banner-top" style="background: url({{asset('uploads/slider/'.$slide->image)}}) no-repeat center;">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh">{{$slide->title}}</h3>
								<h4 class="text-wh">{{$slide->sub_title}}</h4>
								<a href="{{url('/about')}}" class="button-style mt-4 mr-2">Read More</a>
								<a href="#about" class="button-style mt-4">Book Now</a>
							</div>
						</div>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
		<div class="arrows">
			<label for="slides_1"></label>
			<label for="slides_2"></label>
			<label for="slides_3"></label>
			<label for="slides_4"></label>
		</div>
	</div>
</section>
<!-- //banner -->

<!-- about -->
<section class="about py-5" id="about">
	<div class="container py-lg-5">
		<div class="row about-grids">
			<div class="col-lg-8">
				<h2 class="mt-lg-3 text-center">{{$about->title1}}<br> <span style="color:#A19FA0">{{$about->title2}}</span></h2>
				<h5 class="plane mt-md-4 mt-3">{{$about->subtitle}}</h5>
				<p class="">{{$about->description}}.</p>
			</div>
			<div class="col-lg-4 col-md-8 mt-lg-0 mt-5">
				<div class="padding">
					<img src="{{asset('frontend')}}/images/mustache.png" class="img-fluid" alt="" />
					<form action="{{url('reservation')}}" method="post">
						@csrf
						<div class="form-style-agile">
							<input placeholder="Your Name" name="name" type="text" >
							<input placeholder="Contact Number" name="number" type="text" >
							<input placeholder="Email" name="email" type="email" >
							<input placeholder="Address" type="text"  name="address" >
							<input placeholder="Timing" type="text" name="datepicker" id="datetimepicker">
							<button class="book-btn btn btn-info">Quick Appointment </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- about bottom -->
<section class="bottom-banner-w3layouts">
	<div class="d-lg-flex">
		<div class="col-lg-7 p-lg-0 text-lg-right text-center mt-lg-0 mt-4 bottom-left" style="background: url({{asset('uploads/banner/'.$banner->image)}}) no-repeat center;">
		</div>
		<div class="col-lg-5 banner-about text-center">
			<span class="fa {{$banner->icon}}"></span>
				<h4 class="mt-sm-4 mt-2">{{$banner->title}}</h4>
				<h5 class="bottom mt-m-4 mt-3">{{$banner->subtitle}}</h5>
				<p class="">{{$banner->description}}</p>
		</div>
	</div>
</section>
<!-- //about bottom -->

<!-- services -->
<section class="services py-5" id="services">
	<div class="container py-lg-5 py-3">
		<div class="row service-grid-grids text-center">
			@foreach($services as $service)
			<div class="col-lg-4 col-md-6 service-grid service-grid1">
				<div class="service-icon">
					<span class="{{$service->icon}}"></span>
				</div>
				<h4 class="mt-3">{{$service->title}}</h4>
				<p class="mt-3">{{str_limit($service->description, 150)}}</p>
			</div>
			@endforeach
		</div>
	
	</div>
</section>
<!-- //services -->

<!-- facts -->
<section class="facts" id="facts">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 py-5">
				<div class="row inner-heading">
					<h2 class="heading text-capitalize my-md-4"> {{$facts->title}}</h2>
					<p class="mt-md-0 mt-2">{{$facts->description}}</p>
				</div>
				<div class="row mt-5 fact-grid-main">
					@foreach($factgrid as $key=>$fact)
					<div class="col-sm-4 stats-grid">
						<span class="fa {{$fact->icon}}"></span>
						<span>{{$fact->number}}</span>
						<h4>{{$fact->title}}</h4>
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-lg-5 p-lg-0 text-lg-right text-center">
				<img src="{{asset('uploads/facts/'.$facts->image)}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</section>
<!-- //facts -->

<!-- team -->
<section class="team py-5" id="team">
	<div class="container py-md-4">
		<div class="title-desc text-center">
			<h3 class="heading text-capitalize mb-md-5 mb-4">our expert stylists</h3>
		</div>
		<div class="row team-grid">
				@foreach($teams as $key=>$team)
					<div class="col-lg-3 col-sm-6">
						<div class="box13">
							<img src="{{asset('uploads/team/'.$team->image)}}" class="img-fluid img-thumbnail" alt="" />
							<div class="box-content">
								<h3 class="title">{{$team->title}}</h3>
								<span class="post">{{$team->subtitle}}</span>
								<ul class="social">
									<li><a href="{{$team->facebook}}" target="_blank"><span class="fa fa-facebook"></span></a></li>
									<li><a href="{{$team->twitter}}" target="_blank"><span class="fa fa-twitter"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
		</div>
	</div>
</section>
<!-- //team -->

@endsection
