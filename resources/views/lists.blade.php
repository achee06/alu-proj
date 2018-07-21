@extends('alumni')

@section('content')

 <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
          <div class="anouncement-title">
            <div class="hr-text">
              <span style="font-size: 40px; background-color: #FFF; padding: 0 10px; font-variant: small-caps;">
               {{$title}}
                </span>
            </div>
          </div>
        	@foreach( $result as $row )

          <?php 
            preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $row->content, $image);
            $image = $image['src'];
          ?>

    			<!-- Title -->
    			<h2 class="mt-4" style="color: black;"><a href='{{ url("article/".$row->slug) }}' title="{{ $row->title }}">{{ $row->title }}</a></h2>

    			<!-- Author -->
    			<p class="lead">
    			by
    			{{ $row->author }}
    			</p>

    			<hr class="hr_color">

    			<!-- Date/Time -->
    			<p>Posted on {{ date('M,d Y', strtotime($row->created_at)) }}</p>

    			<hr class="hr_color">

          @if($image)
            <p><img src="{{$image}}" style="max-width: 100%"></p>
          @endif

    			<!-- Post Content -->
    			{{ str_limit(strip_tags($row->content),200) }}
    			<p><a href='{{ url("article/".$row->slug) }}' title="{{ $row->title }}">Read more &raquo;</a></p>
    			<hr>
    			@endforeach

          @if(count($result) == 0)
            <br><br>
            <div class="alert alert-info">Sorry the article is not found!</div>
          @endif
          {!! $result->links() !!}
        </div>
        @if(Request::is('/'))

          <div class="col-md-4 side_officer">
            <div class="nav-title">OFFICER AND<br> BOARD MEMBERS</div>

            
            <div class="content-officer">
            <p class="side-content">
              <span class="side-name">ENGR. ARTURO P. BARRAMEDA</span><br>
              <span class="side-title">President</span>
            </p>
            <p class="side-content">
              <span class="side-name">ENGR. RUDITH ELENA CAMPOS-JOSON</span><br>
              <span class="side-title">1st Vice-President</span>
            </p>

            <p class="side-content">
              <span class="side-name">MS. DELIA BOLIVAR-MARAMOT</span><br>
              <span class="side-title">2nd Vice-President</span>
            </p>
            <p class="side-content">
              <span class="side-name">CELESTE QUIBAT-VILLAFUERTE</span><br>
              <span class="side-title">Secretary</span>
            </p>
            <p class="side-content">
              <span class="side-name">MS. ALMA BALBUENA-SY</span><br>
              <span class="side-title">Assistant Secretary</span>
            </p>
            <p class="side-content">
              <span class="side-name">ENGR. ERNESTO LEYVA</span><br>
              <span class="side-title">1st Vice-President</span>
            </p>
            <p class="side-content">
              <span class="side-name">ENGR. RUDITH ELENA CAMPOS-JOSON</span><br>
              <span class="side-title">Treasurer</span>
            </p>
            <p class="side-content">
              <span class="side-name">MR.JAIME M. MOLINO</span><br>
              <span class="side-title">Assistant Treasurer</span>
            </p>
            <p class="side-content">
              <span class="side-name">ENGR. IRENEO G. BUGHAO</span><br>
              <span class="side-title">Auditor</span>
            </p>

            <p class="side-content">
              <span class="side-name">asdasdasdasd</span><br>
              <span class="side-title">Auditor</span>
            </p>

            <p class="side-content">
              <span class="side-name">MR.ABRAHAM D. FLORES</span><br>
              <span class="side-title">Public Relations Officer</span>
            </p>

            <p class="side-content">
              <span class="side-name">ENGR. RITO B. BADILLO</span><br>
              <span class="side-title">Business Manager</span>
            </p>

            <p class="side-content">
              <span class="side-name">ENGR. ALFREDO F. VILLARIN</span><br><br>
              <span class="side-name">ENGR. ERNESTO J. CASIS</span><br><br>
              <span class="side-name">MR. ROMULO A. SALANGA</span><br><br>
              <span class="side-name">ENGR. RENATO L. CASTILLO</span><br><br>
              <span class="side-name">ENGR. MA. CONCEPTION MAGNAYE-ZABALA</span><br>
              <span class="side-title">Board Of Directors</span>
            </p>

            <p class="side-content">
              <span class="side-name">ENGR. RUBEN DELA FUENTE</span><br><br>
              <span class="side-name">ENGR. ALEJANDRO TABALBA</span><br>
              <span class="side-title">Advisers</span>
            </p>
            </div>
          </div>
        @else
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
          @endif
        </div>

      </div>
      <!-- /.row -->

    </div>
@endsection
