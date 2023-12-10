<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

        {{-- tostr notification --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />


    </head>
	<body>
		<!-- HEADER -->
	@include('frontend.header');
		<!-- /HEADER -->

		<!-- NAVIGATION -->
{{-- @include('frontend.navber') --}}
		<!-- /NAVIGATION -->


@yield('content')

		<!-- NEWSLETTER -->
	{{-- @include('frontend.newsletter') --}}
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
	@include('frontend.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		{{-- <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script> --}}


   <!-- Scripts -->
   <script src="newtem/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
   <script src="newtem/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
   <script src="newtem/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
   <script src="newtem/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
   <script src="newtem/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
   <script src="newtem/js/scripts.js"></script> <!-- Custom scripts -->



   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   {{-- <script src="assets/js/isotope.min.js"></script> --}}
   <script src="assets/js/owl-carousel.js"></script>
   <script src="assets/js/lightbox.js"></script>
   <script src="assets/js/tabs.js"></script>
   <script src="assets/js/video.js"></script>
   <script src="assets/js/slick-slider.js"></script>
   <script src="assets/js/custom.js"></script>


	</body>
</html>
