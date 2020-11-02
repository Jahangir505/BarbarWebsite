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
				<a href="index.html"><img src="{{asset('frontend')}}/images/untile.png" width="250" alt=""></a>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-lg-4 ml-auto">
				<li class="active"><a href="index.html">Home</a></li>
				<li class=""><a href="about.html">About Us</a></li>
				<li class=""><a href="services.html">Services</a></li>
				<li class=""><a href="gallery.html">Gallery</a></li>
				<li class="mr-2"><a href="contact.html">Contact</a></li>
				<li class=""><span><span class="fa fa-phone"></span> +12 34 3456 7890</span></li>
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
				<a href="services.html" class="text-capitalize serv_link btn">Go to our Services</a>
			</div>
		</div>
	</div>
</div>
<!-- //footer top-->

<!-- footer -->
<footer class="py-sm-5 py-4">
	<div class="container py-md-3">
		<div class="footer-logo text-center">
			<a href="index.html"><img src="images/logo1.jpg" width="250" alt=""></a>
		</div>
		<div class="row my-4 footer-middle">
			<div class="col-md-5 text-md-right address">
				<p><span class="fa fa-map-marker"></span>Location : West Des Moines, Iowa 50266</p>
			</div>
			<div class="col-md-2 text-md-center my-md-0 my-sm-4 my-2 footer-icon">
				<span class="fa fa-scissors"></span>
			</div>
			<div class="col-md-5 text-md-left phone">
				<p><span class="fa fa-phone"></span>Phone : +121 568 789 901</p>
				<p><span class="fa fa-envelope-open"></span>Email : <a href="mailto:example@mail.com">example@mail.com</a></p>
			</div>
		</div>
		<div class="footer-grid">
			<div class="social text-center">
				<ul class="d-flex justify-content-center">
					<li class="mx-2"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fa fa-rss"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fa fa-linkedin"></span></a></li>
					<li class="mx-2"><a href="#"><span class="fa fa-google-plus"></span></a></li>
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

</body>
</html>
