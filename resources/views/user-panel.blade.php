@extends('alumni')
@section('content')
  <!-- Your html goes here -->
  <div class='panel panel-default'>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <div class="btn-group">
            <button type="button" class="btn btn-primary usr-btn" style="width: 150px;">Profile</button>
            <button type="button" class="btn btn-primary usr-btn" style="width: 150px;">Tracker</button>
            <button type="button" class="btn btn-primary usr-btn" style="width: 150px;">Year Book</button>
          </div>
        </div>
        <div class="col-md-10">
          Welcome Mr./Ms. {{ session('admin_name') }} to your alumni panel!
        </div>    
      </div>
    </div>
  </div>
@endsection