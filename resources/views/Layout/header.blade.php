<section class="header">
	@if(Request::is('/'))
		<div class="banner">
		<div class="mbanner">
		<div class="container-fluid">
	@endif

	@include('Layout/navbar')
	
	@if(Request::is('/'))
		@include('Layout/slideshow')
		</div>
		</div>
		</div>
	@endif
</section>