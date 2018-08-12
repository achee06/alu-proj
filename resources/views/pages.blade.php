@extends('alumni')
 <title>{{ $page_content->title  }}</title>
@section('content')
 
    <div class="jumbotron">
    	<?php //dd($page_content)?>
        <h1 style="color:black;font-variant: small-caps;text-align: center;font-weight: bold;">{{ $page_content->title  }}</h1>
 		<div class="bodyjomb">
        <p>{!!  $page_content->content  !!}</p>
         </div>
    </div>
 
@endsection
