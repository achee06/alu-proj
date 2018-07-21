<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
  <link rel="stylesheet" href="{{URL::asset('tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('dropdown/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('animate.css/animate.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('theme/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('mobirise/css/mbr-additional.css')}}" type="text/css">
  
  
  
</head>
<body>
@include('Layout/navbar')

@if(Request::is('/'))
  @include('Layout/carousel')
@endif






  <section class="engine"><a href="https://mobirise.ws/l">html website creator</a></section><script src="{{URL::asset('web/assets/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('tether/tether.min.js')}}"></script>
  <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('viewport-checker/jquery.viewportchecker.js')}}"></script>
  <script src="{{URL::asset('smooth-scroll/smooth-scroll.js')}}"></script>
  <script src="{{URL::asset('dropdown/js/script.min.js')}}"></script>
  <script src="{{URL::asset('touch-swipe/jquery.touch-swipe.min.js')}}"></script>
  <script src="{{URL::asset('theme/js/script.js')}}"></script>
  <script src="{{URL::asset('mobirise-slider-video/script.js')}}"></script>
  <script src="{{URL::asset('jquery-mb-ytplayer/jquery.mb.ytplayer.min.js')}}"></script>
  <input name="animation" type="hidden">
  </body>
</html>