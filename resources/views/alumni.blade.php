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
  <title>FUAAGI</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
  <link rel="stylesheet" href="{{URL::asset('tether/tether.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('dropdown/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('animate.css/animate.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('theme/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('mobirise/css/mbr-additional.css')}}" type="text/css">
  <link rel="stylesheet" href="{{URL::asset('socicon/css/styles.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/index.css')}}">
  <link rel="stylesheet" href="{{URL::asset('web/assets/mobirise-icons/mobirise-icons.css')}}">
  <link rel="stylesheet" href="{{URL::asset('gtco/gtco.css')}}">
  <link rel="stylesheet" href="{{URL::asset('mediaquery.css')}}">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">   -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!--  <link rel="stylesheet" type="text/css" href="{{URL::asset('BookBlock/css/default.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{URL::asset('BookBlock/css/bookblock.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{URL::asset('BookBlock/css/demo1.css')}}" />
  <script src="{{URL::asset('BookBlock/js/modernizr.custom.js')}}"></script> -->
  @yield('Yearbook-css')
</head>
<body>


<section id="page_content">
  @include('Layout/navbar')

@if(Request::is('/'))
  @include('Layout/carousel')
  @include('Layout/menu-image')
  @include('Layout/sidebar-old')

@endif

   @if(Request::is('pages/events'))
      <div class="display_events"> 
    @else
      <div class="display_content"> 
    @endif
    @yield('content')

      </div>
 @if(Request::is('/'))
 
  @include('Layout/funfact')
@endif
<div class="scroll-right" style="display:none;">
  <div class="testp">

@if(count($_SESSION["sponsors"]) > 0)
    {!!getSponsorsMainPage($_SESSION["sponsors"])!!}
  @endif
 
  </div>
</div>




   @include('Layout/footer')
</section>



  
  <script src="{{URL::asset('web/assets/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('tether/tether.min.js')}}"></script>
  <script src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('viewport-checker/jquery.viewportchecker.js')}}"></script>
  <script src="{{URL::asset('smooth-scroll/smooth-scroll.js')}}"></script>
  <script src="{{URL::asset('dropdown/js/script.min.js')}}"></script>
  <script src="{{URL::asset('touch-swipe/jquery.touch-swipe.min.js')}}"></script>
  <script src="{{URL::asset('theme/js/script.js')}}"></script>
  <script src="{{URL::asset('mobirise-slider-video/script.js')}}"></script>
  <script src="{{URL::asset('jquery-mb-ytplayer/jquery.mb.ytplayer.min.js')}}"></script>
  <script src="{{URL::asset('popper/popper.min.js')}}"></script>
  <script src="{{URL::asset('counter/jquery.counterup.min.js')}}"></script>
  <script src="{{URL::asset('tracer/user_tracer.js')}}"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
  <!-- <script src="{{URL::asset('BookBlock/js/jquerypp.custom.js')}}"></script>
  <script src="{{URL::asset('BookBlock/js/jquery.bookblock.js')}}"></script>
  <script src="{{URL::asset('BookBlock/js/block.js')}}"></script> -->
  <input name="animation" type="hidden">
  @yield('Yearbook-js')

  </body>
</html>