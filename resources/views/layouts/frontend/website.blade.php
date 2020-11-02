<!DOCTYPE html>
<html lang="en">
<head>
<title>Platinum Signature Barbershop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Men's Salon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- css files -->
    <link href="{{asset('frontend')}}/css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="{{asset('frontend')}}/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="{{asset('frontend')}}/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->

	<link href="{{asset('frontend')}}/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<link href="{{asset('frontend')}}/css/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- //google fonts -->

</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<a href="{{url('/')}}"><img src="{{asset('frontend')}}/images/untile.png"  alt=""></a>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-lg-4 ml-auto">
				<li class="active"><a href="{{url('/')}}">Home</a></li>
				<li class=""><a href="{{url('/about')}}">About Us</a></li>
				<li class=""><a href="{{url('/service')}}">Services</a></li>
				<li class=""><a href="{{url('/gellary')}}">Gallery</a></li>
				<li class="mr-2"><a href="{{url('/contact')}}">Contact</a></li>
				<li class=""><span><span class="fa fa-phone"></span> {{$media->sm_phone}}</span></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

  @yield('content')


<!-- footer top-->
<div class="footer-top py-md-4">
	<div class="container py-4">
		<div class="row">
			<div class="col-lg-9">
				<h4 class="footer-top-text text-capitalize">A wide range of male grooming services</h4>
			</div>
			<div class="col-lg-3 text-lg-right mt-lg-0 mt-4">
				<a href="{{url('/service')}}" class="text-capitalize serv_link btn">Go to our Services</a>
			</div>
		</div>
	</div>
</div>
<!-- //footer top-->

<!-- footer -->
<footer class="py-sm-5 py-4">
	<div class="container py-md-3">
		<div class="footer-logo text-center">
			<a href="index.html"><img src="{{asset('frontend/images/logo1.jpg')}}" width="250" alt=""></a>
		</div>
		<div class="row my-4 footer-middle">
			<div class="col-md-5 text-md-right address">
        <h3><em style="color:#A19FA0;">Address:</em></h3>
				<p><span class="fa fa-map-marker"></span><b>Location :</b> {{$media->sm_address}}</p>
			</div>
			<div class="col-md-2 text-md-center my-md-0 my-sm-4 my-2 footer-icon">
				<span class="fa fa-scissors"></span>
			</div>
			<div class="col-md-5 text-md-left phone">
        <h4><em style="color:#A19FA0;">Store Hours:</em></h4>
        <p><b>Monday <span style="color:#fff;">To</span> Saturday:</b> <span style="color:#fff;font-weight:900;">10:00AM -7:00PM</span></p>
        <p><b>Sunday:</b> <span style="color:#fff;font-weight:900;">Closed</span></p>
				<p><span class="fa fa-phone"></span><b>Phone :</b> {{$media->sm_phone}}</p>
				<p><span class="fa fa-envelope-open"></span><b>Email :</b> <a href="mailto:example@mail.com">{{$media->sm_email}}</a></p>

      </div>
		</div>
		<div class="footer-grid">
			<div class="social text-center">
				<ul class="d-flex justify-content-center">
					<li class="mx-2"><a href="{{$media->sm_facebook}}" target="_blank"><span class="fa fa-facebook"></span></a></li>
					<li class="mx-2"><a href="{{$media->sm_twetter}}" target="_blank"><span class="fa fa-twitter"></span></a></li>
					<li class="mx-2"><a href="{{$media->sm_rss}}" target="_blank"><span class="fa fa-rss"></span></a></li>
					<li class="mx-2"><a href="{{$media->sm_linkedin}}" target="_blank"><span class="fa fa-linkedin"></span></a></li>
					<li class="mx-2"><a href="{{$media->sm_google}}" target="_blank"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- footer -->

<!-- copyright -->
<div class="copyright py-3 text-center">
	<p>© 2019 Barbars. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="=_blank"> Jahangir </a></p>
</div>
<!-- //copyright -->

<!-- move top icon -->
<a href="#home" class="move-top text-center"></a>
<!-- //move top icon -->
<script type="text/javascript" src="{{asset('frontend')}}/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript" src="{{asset('frontend')}}/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if($errors->any())
    @foreach($errors->all() as $error)
          <script type="text/javascript">
                toastr.error('{{$error}}');
          </script>
      @endforeach
@endif
<script type="text/javascript">
    $(function(){
      $('#datetimepicker').datetimepicker({
        formate: "dd MM yyyy - HH:11 p",
        showMeridian: true,
        autoclose:true,
        todayBtn:true
      });
    })
</script>
{!! Toastr::message() !!}
</body>
</html>
