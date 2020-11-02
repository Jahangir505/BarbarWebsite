@extends('layouts.frontend.website')


@section('title','About')


@section('content')

<!-- banner -->
<div class="inner-banner" id="home">
	<div class="inner-banner-overlay">
		<div class="container">

		</div>
	</div>
</div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">About Us</li>
		</ol>
	</div>
</div>
<!-- //page details -->

<!-- about -->
<section class="about py-sm-5 py-4">
	<div class="container py-lg-5 py-sm-3">
		<div class="row">
			<div class="col-lg-6 inner-about">
				<span class="fa {{$banner->icon}}"></span>
				<h4 class="mt-md-4 mt-2">{{$banner->title}}</h4>
				<h5 class="bottom mt-sm-4 mt-3">{{$banner->subtitle}}</h5>
				<p class="">{{$banner->description}}</p>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-4">
				<img src="{{asset('uploads/banner/'.$banner->image)}}" class="img-fluid" alt="" />
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- discount -->
<section class="discount-grid text-center">
	<div class="overlay-all py-5">
		<div class="container py-md-4">
			<div class="offer-grid">
				<h2 class="text-capitalize">Get Flat 25% Discount On Every Sunday</h2>
				<p class="mt-4">Sed ut perspiciatis unde omnis iste natus error ipsum voluptatem ut accusa ntium dolor remque et laudantium, totam rem
				aperiam, eaque ipsa quae abse illo quasi sed.</p>
				<a href="{{url('/')}}" class="btn"> Make An Appointment</a>
			</div>
		</div>
	</div>
</section>
<!-- //discount -->

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

<!-- testimonials -->
<section class="testi py-5" id="testi">
	<div class="container pb-xl-5 py-lg-3">
		<h3 class="text-center heading mb-5">What our customers say</h3>
		<div class="row">
			<div class="col-lg-6">
				<div class="row testi-cgrid border-right-grid">
					<div class="col-sm-4 testi-icon mb-sm-0 mb-3">
						<img src="{{asset('frontend')}}/images/te1.jpg" alt="" class="img-fluid"/>
					</div>
					<div class="col-sm-8">
						<p class="mx-auto"><span class="fa fa-quote-left"></span> Onec consequat sapien utleo dolor rhoncus. Nullam dui mi, vulputater act metus semper. Vestibulum sed dolor.</p>
						<h6 class="b-w3ltxt mt-3">Johnson - <span>customer</span></h6>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-sm-5 mt-4">
				<div class="row testi-cgrid border-left-grid">
					<div class="col-sm-4 testi-icon mb-sm-0 mb-3">
						<img src="{{asset('frontend')}}/images/te2.png" alt="" class="img-fluid"/>
					</div>
					<div class="col-sm-8">
						<p class="mx-auto"><span class="fa fa-quote-left"></span> Onec consequat sapien utleo dolor rhoncus. Nullam dui mi, vulputater act metus semper. Vestibulum sed dolor.</p>
						<h6 class="b-w3ltxt mt-3">walkner - <span>customer</span></h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- testimonials -->

@endsection
