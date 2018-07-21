@if(Request::is('/'))

          <div class="col-md-4 side_officer">
            <div class="nav-title">Officer and<br> Board Members</div>

            
            <div class="content-officer">
            <p class="side-content">
              <span class="side-name">Engr. Rudith Elena Campos-Joson</span><br>
              <span class="side-title">President</span>
            </p>
            <p class="side-content">
              <span class="side-name">Engr. Ernesto J. Casis, PME</span><br>
              <span class="side-title">1st Vice-President</span>
            </p>

            <p class="side-content">
              <span class="side-name">Engr. Clarito N. Sison</span><br>
              <span class="side-title">2nd Vice-President</span>
            </p>
            <p class="side-content">
              <span class="side-name">Ms. Mary Grace Esteve-Chua</span><br>
              <span class="side-title">Secretary</span>
            </p>
            <p class="side-content">
              <span class="side-name">Ms. Bernardita H. Leyva</span><br>
              <span class="side-title">Treasurer</span>
            </p>
            <p class="side-content">
              <span class="side-name">Mr. Jaime M. Molino, CPA</span><br>
              <span class="side-title">Auditor</span>
            </p>
            <p class="side-content">
              <span class="side-name">Ms. Virginia Ugalde-Ramos</span><br>
              <span class="side-title">Business Manager</span>
            </p>
            
            <p class="side-content">
              <span class="side-name">Mr. Glen Jose Y. Saño, MIT</span><br>
              <span class="side-title">P.R.O.</span>
            </p>

            <p class="side-content">
              <span class="side-name">Engr. Joel C. Herrera, PME</span><br>
              <span class="side-name">Engr. Enrique A. Macaspac</span><br>
              <span class="side-name">Engr. Aladino M. Abulencia</span><br>
              <span class="side-name">Arch. Patrick T. Ellazar</span><br>
              <span class="side-name">Ms. Mercidita D. Cruz</span><br>
              <span class="side-name">Capt. Reynaldo P. Derige</span><br>
              <span class="side-name">Ms. Gina S. Chavez</span><br>
              <span class="side-title">Board Of Directors</span>
            </p>

            <p class="side-content">
              <span class="side-name">Engr. Arturo P. Barrameda (IPP)</span><br>
              <span class="side-name">Engr. Dante C. Valencia</span><br>
              <span class="side-name">Engr. Ernesto D. Leyva</span><br>
              <span class="side-name">Engr. Alfredo F. Villarin</span><br>
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
          <!-- <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div> -->
          @endif