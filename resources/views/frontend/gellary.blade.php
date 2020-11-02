@extends('layouts.frontend.website')

@section('title','Gellary')

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
    <li class="breadcrumb-item active" aria-current="page">Our Gallery</li>
  </ol>
</div>
</div>
<!-- //page details -->

<!-- gallery -->
<div class="gallery py-sm-5 py-4 position-relative" id="gallery">
<div class="container py-lg-3">
  <h2 class="heading text-center mb-lg-5 mb-sm-4 mb-3 editContent">Our Gallery</h2>
  <div class="news-grids gal">
    <div class="row">
      @foreach($gallerys as $key=>$gallery)
          <div class="col-lg-3 col-md-4 col-sm-6 gal-img border">
            <a href="#gal{{$key+1}}"><img src="{{asset('uploads/gallery/'.$gallery->image)}}" alt="projects image" class="img-fluid"></a>
            <h5>{{$gallery->title}}</h5>
            <p>{{$gallery->subtitle}}</p>
          </div>
      @endforeach
    </div>
  </div>
</div>
<!-- gallery popups -->
<!-- popup-->
@foreach($gallerys as $key=>$gallery)
<div id="gal{{$key+1}}" class="popup-effect">
  <div class="popup">
    <img src="{{asset('uploads/gallery/'.$gallery->image)}}" alt="Popup Image" class="img-fluid" />
    <p>{{$gallery->subtitle}}.</p>
    <a class="close" href="#gallery">&times;</a>
  </div>
</div>
  @endforeach
<!-- //popup -->

<!-- //gallery popups -->
</div>
<!-- //gallery -->

@endsection
