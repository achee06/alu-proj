@extends('alumni')

@section('content')

 <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12 article_body">


			<!-- Title -->
			<h1 class="mt-4" style="color: black; font-weight:bold;">{{ $row->title }}</h1>

			<!-- Author -->
			<p class="lead">
			by
			{{ $row->author }}
			</p>

			<hr>

			<!-- Date/Time -->
			<p>Posted on {{ date('M,d Y', strtotime($row->created_at)) }}</p>

			<hr>

			<!-- Post Content -->
			<div class="imgcontent">{!! $row->content !!}</div>

			<hr>

        </div>

      </div>
      <!-- /.row -->

    </div>

    
@endsection
