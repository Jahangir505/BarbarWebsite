@extends('layouts.frontend.website')

@section('title','Service')


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
    <li class="breadcrumb-item active" aria-current="page">Our Services</li>
  </ol>
</div>
</div>
<!-- //page details -->


 



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




<!-- services -->
<section class="services py-5" id="services">
  
  <div class="container py-lg-5 py-3">
    <div class="h_service">
      <h3>Our Services</h3>
    </div>
    <div class="row service-grid-grids text-center">
      <div class="col-lg-4 col-md-6 service-grid service-grid1">
        <div class="service-icon">
          <span class="fa fa-puzzle-piece"></span>
        </div>
        <h4 class="mt-3">Skilled Barbers</h4>
        <p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor remque laudantium, totam dolor.</p>
      </div>
      <div class="col-lg-4 col-md-6 service-grid service-grid2 mt-md-0 mt-5">
        <div class="service-icon">
          <span class="fa fa-scissors"></span>
        </div>
        <h4 class="mt-3">Hair stylists</h4>
        <p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor remque laudantium, totam dolor.</p>
      </div>

      <div class="col-lg-4 col-md-6 service-grid service-grid3 mt-lg-0 mt-5">
        <div class="service-icon">
          <span class="fa fa-sliders"></span>
        </div>
        <h4 class="mt-3">Beard Grooming</h4>
        <p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor remque laudantium, totam dolor.</p>
      </div>
    </div>
  
  </div>
</section>
<!-- //services -->


{{-- <!-- pricing -->
<section class="pricing py-5">
<div class="container py-md-4">
  <h3 class="heading text-capitalize text-center mb-5"> Services & Pricing</h3>
  <div class="row pricing-grids">
    <div class="col-lg-8 offset-md-2 col-md-12 mb-lg-0 mb-5">
      <div class="padding">
        <img src="{{asset('frontend')}}/images/mustache.png" class="img-fluid" alt="" />
        <!-- Item starts -->
        @foreach($services as $key=>$service)
        <div class="menu-item">
          <div class="row border-dot no-gutters">
            <div class="col-8 menu-item-name">
              <h6>{{$service->title}}</h6>
            </div>
            <div class="col-4 menu-item-price text-right">
              <h6>{{$service->price}}</h6>
            </div>
          </div>
          <div class="menu-item-description">
            <p>{{$service->subtitle}}</p>
          </div>
        </div>
        @endforeach
        <!-- Item ends -->
      </div>
    </div>

  </div>
</div>
</section>
<!-- //pricing --> --}}

@endsection
