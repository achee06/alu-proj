@extends('alumni')
  <title>User - Tracer</title>
@section('content')




<div class="container dashboard_container">
	<div class="row">
  		 @include('User/navbarU')

    <div class="whole_container">
      <h1>Tracer</h1>
      <div class="form-group">
      	<div class="col-md-6">
      		<label>Batch</label>
                     <div class="input-group">

                      <span class="input-group-addon"><i class="fa fa-mortar-board" aria-hidden="true"></i></span>
                      <select id="batch-tracer" name="batch" class="form-control" >
                                <option value="" disabled selected></option>
                                @foreach($batches as $key => $batch)
                                  <option {{ old('batch') == $batch->batch ? 'selected' : '' }} value="{{ $batch->batch }}">{{ $batch->batch }}</option>
                                @endforeach
                      </select>
           			</select>
      				</div>
      	</div>
        <div class="col-md-6">
          <label>Course</label>
                     <div class="input-group">

                      <span class="input-group-addon"><i class="fa fa-mortar-board" aria-hidden="true"></i></span>
                      <select id="course-tracer" name="course" class="form-control" >
                                <option value="" disabled selected></option>
                                @foreach($courses as $key => $course)
                                  <option {{ old('course') == $course->course ? 'selected' : '' }} value="{{ $course->course }}">{{ $course->course }}</option>
                                @endforeach
                      </select>
            </div>
        </div>
   
  		<div class="col-md-12 col-xs-12 col-sm-12" style="margin-top: 1rem;">
  			<table class="table table-hover table-content">
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
</div> 

@endsection
