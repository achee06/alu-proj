<div class="container menu-icon-container">
	
	<div class="row row-centered">

		<div class="hvr col-xs-3 col-centered">
			<img src="{{URL::asset('images/login.png')}}" alt="Avatar" class="imagehvr" >
				<div class="middlehvr">
					<button onclick="location.href='{{ url('pages/login') }}'" style="cursor:pointer" type="submit" class="btn btn-info btn-block">LOGIN</button>
				</div>
		</div>

		<div class="hvr col-xs-3 col-centered">
			 <img src="{{URL::asset('images/membership.png')}}" alt="Avatar" class="imagehvr" >
			  	<div class="middlehvr">
					<button  onclick="location.href='{{ url('pages/registration') }}'" style="cursor:pointer" type="submit" class="btn btn-info btn-block">MEMBERSHIP</button>
			  	</div>
		</div>

		<div class="hvr col-xs-3 col-centered">
			 <img src="{{URL::asset('images/controlpanel.png')}}" alt="Avatar" class="imagehvr" >
			  	<div class="middlehvr">
			  		<button onclick="location.href='{{ url('admin/login') }}'" style="cursor:pointer" type="submit" class="btn btn-info btn-block">CONTROL PANEL</button>
			  </div>
		</div>

     </div>
</div>
