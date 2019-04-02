<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lekhnath hotel, is one of the hotel in pokhara where visitors can have aewsome view of pokhara which also provide luxury rooms and foods as service to customers." />
    <meta name="keywords" content="hotel, pokhara hotel, lake side, view tower pokhara, lekhnath view tower, lekhnath hotel" />
    <meta name="author" content="jinesh subedi" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
    <link rel="icon" href="{{asset('theme/images/logo.png')}}" type="image/gif" sizes="16x16">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('theme/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('theme/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('theme/css/flexslider.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/owl.theme.default.min.css')}}">
    
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap-datepicker.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('theme/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('theme/js/modernizr-2.6.2.min.js')}}"></script>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
    <body>
    {{-- facebook --}}
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1563675720433652"
  theme_color="#6699cc"
  logged_in_greeting="Namastey!  होटल लेखनाथ भिउ टवोर मा स्वागत छ|"
  logged_out_greeting="Namastey!  होटल लेखनाथ भिउ टवोर मा स्वागत छ|">
</div>
    <div class="colorlib-loader"></div>
    <div id="page">