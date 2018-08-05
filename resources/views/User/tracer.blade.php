@extends('alumni')
 
@section('content')




<div class="container dashboard_container">
	<div class="row">
		<div class="col-md-4">
			<div class="btn_container">
				<div class="btn-group btn_display">
		  			<button onclick="location.href='{{ url('user/dashboard') }}'"type="button" class="btn usr_btn">Profile</button>
		  			<button onclick="location.href='{{ url('user/tracer') }}'" class="btn usr_btn">Tracer</button>
		  			<button type="button" class="btn usr_btn">Year Book</button>
				</div>
			</div>
		</div>

		<div class="col-md-7" style="margin-top: 1rem;">
			<h1>Tracer</h1>

		</div>
		<div class="col-md-7" style="margin-top: 1rem;">
			<div class="form-group">
				<div class="cols-sm-10">
					<label>Batch</label>
                     <div class="input-group">

	                    <span class="input-group-addon"><i class="fa fa-mortar-board" aria-hidden="true"></i></span>
	                    <select id="country" name="name_country" class="form-control" >
	         			</select>
     				</div>
				</div>
			</div>
		</div>

		<div class="col-md-7" style="margin-top: 1rem;">
			<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Whole Name</th>
      <th scope="col">Course</th>
      <th scope="col">Batch</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
		 </div>

	</div>
</div>
 

@endsection