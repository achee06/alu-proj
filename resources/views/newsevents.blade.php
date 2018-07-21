@extends('alumni')

@section('content')

 <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

        @foreach( $result as $row )

        <?php 
          preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $row->content, $image);
          $image = $image['src'];
        ?>
  			<!-- Title -->
  			<h1 class="mt-4" style="color: black;"><a href='{{ url("article/".$row->slug) }}' title="{{ $row->title }}">{{ $row->title }}</a></h1>

  			<!-- Author -->
  			<p class="lead">
  			by
  			{{ $row->author }}
  			</p>

  			<hr>

  			<!-- Date/Time -->
  			<p>Posted on {{ date('M,d Y', strtotime($row->created_at)) }}</p>

  			<hr>

        @if($image)
          <p><img src="{{$image}}" style="max-width: 100%"></p>
        @endif

  			<!-- Post Content -->
  			{{ str_limit(strip_tags($row->content),200) }}
  			<p><a href='{{ url("article/".$row->slug) }}' title="{{ $row->title }}">Read more &raquo;</a></p>
  			<hr>
  			@endforeach


        {!! $result->links() !!}
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <form method="get" action="{{ url('search') }}"></form>
                <div class="input-group form-inline">
                  <input type="text" name="search_text"class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
                  </span>
                </div>
              </form>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="{{ url('category/latest') }}">Latest</a>
                    </li>
                    <li>
                      <a href="{{ url('category/News') }}">News</a>
                    </li>
                    <li>
                      <a href="{{ url('category/Events') }}">Events</a>
                    </li>
                  </ul>
                </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
@endsection
