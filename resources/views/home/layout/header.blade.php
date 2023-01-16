<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $profile->company_name }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('storage/' . $profile->logo_path )}}" rel="icon">
  <link href="{{ asset('home-template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{ URL::to('css/home-template/assets/vendor/animate.css/animate.min.css') }}">

  <link href="{{ asset('home-template/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">

  <link href="{{ asset('home-template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('home-template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('home-template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- CSS SLIDER -->
  <link rel="stylesheet" type="text/css" href="{{ asset('home-template/assets/css/zoomslider.css') }}" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{ asset('home-template/assets/js/modernizr-2.6.2.min.js') }}"></script>

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('home-template/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.8.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  <script type="text/javascript" src="{{ asset('wa-floating/jquery-3.3.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('wa-floating/floating-wpp.min.js')}}"></script>
  <link rel="stylesheet" href="{{ asset('wa-floating/floating-wpp.min.css') }}">
  
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.css' rel='stylesheet' />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone={{ $profile->whatsapp }}&text=Hi%20Admin%21%20Saya%20Ingin%20Mencari%20Rumah%20" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<style>
  #map {
    height: 600px;
    width: 100%;
  }

 .bg-img {
  background-image: url({{asset(
            "home-template/assets/img/home-background.jpg"
        )}});
 }

 .nav-img {
  background-image: url({{asset(
            "home-template/assets/img/nav-background.jpg"
        )}});
 }

 .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:75px;
	right:7px;
	background-color:#d4af37;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}



</style>

</head>
<body>
  <div class="bg-img">