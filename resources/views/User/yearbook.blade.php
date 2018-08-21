@extends('alumni')

  <title>User - Year Book</title>
@section('Yearbook-css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BookBlock/css/default.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{URL::asset('BookBlock/css/bookblock.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{URL::asset('BookBlock/css/demo1.css')}}" />
  <script src="{{URL::asset('BookBlock/js/modernizr.custom.js')}}"></script>
@endsection

@section('content')

<div class="container">
      <!-- Top Navigation -->
      <div class="main clearfix">
        <div class="bb-custom-wrapper">
          <h3>Illustrations by <a href="http://dribbble.com/kevinhowdeshell">Kevin Howdeshell</a></h3>
          <h3>Illustrations by <a href="http://dribbble.com/kevinhowdeshell">Kevin Howdeshell</a></h3>
          <div id="bb-bookblock" class="bb-bookblock">
            <div class="bb-item">
              <a href="http://drbl.in/bKVq"><img src="{{URL::asset('BookBlock/images/demo1/1.jpg')}}" alt="image01"/></a>
            </div>
            <div class="bb-item">
              <a href="http://drbl.in/ciTX"><img src="{{URL::asset('BookBlock/images/demo1/2.jpg')}}" alt="image02"/></a>
            </div>
            <div class="bb-item">
              <a href="http://drbl.in/cLHx"><img src="{{URL::asset('BookBlock/images/demo1/3.jpg')}}" alt="image03"/></a>
            </div>
            <div class="bb-item">
              <a href="http://drbl.in/bAfn"><img src="{{URL::asset('BookBlock/images/demo1/4.jpg')}}" alt="image04"/></a>
            </div>
            <div class="bb-item">
              <a href="http://drbl.in/dcbE"><img src="{{URL::asset('BookBlock/images/demo1/5.jpg')}}" alt="image05"/></a>
            </div>
            
          </div>
          <nav>
            <a id="bb-nav-first" href="#" class="bb-custom-icon bb-custom-icon-first">First page</a>
            <a id="bb-nav-prev" href="#" class="bb-custom-icon bb-custom-icon-arrow-left">Previous</a>
            <a id="bb-nav-next" href="#" class="bb-custom-icon bb-custom-icon-arrow-right">Next</a>
            <a id="bb-nav-last" href="#" class="bb-custom-icon bb-custom-icon-last">Last page</a>
          </nav>
        </div>
      </div>
</div>

@endsection
@section('Yearbook-js')
  <script src="{{URL::asset('BookBlock/js/jquerypp.custom.js')}}"></script>
  <script src="{{URL::asset('BookBlock/js/jquery.bookblock.js')}}"></script>
  <script src="{{URL::asset('BookBlock/js/block.js')}}"></script>
  @endsection