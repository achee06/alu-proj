
<!DOCTYPE html>
<html>
<head>
<title>Feati University </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Lyceum a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{URL::asset('css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="{{URL::asset('css/flexslider.css')}}" type="text/css" media="all" />
<link href="{{URL::asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{URL::asset('css/smoothbox.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>
<body>

<!-- Header -->
@include('Layout/header')
<div class="container">
	@yield('content')
</div>

@if(count($_SESSION["sponsors"]) > 0)
	{!!getSponsorsMainPage($_SESSION["sponsors"])!!}
@endif

@include('Layout/footer')

	
<script src="js/jquery-2.2.3.min.js"></script>
<script  src="js/jquery.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	
<script  src="js/smoothbox.min.js"></script>

<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
<!-- //flexSlider -->


<!-- tabs -->

<script src="{{URL::asset('js/easy-responsive-tabs.js')}}"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->

	<script type="text/javascript">
	$(window).load(function() {
	$("#flexiselDemo1").flexisel({
		visibleItems:1,
		animationSpeed: 1000,
		autoPlay:false,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
		responsiveBreakpoints: { 
			portrait: { 
				changePoint:480,
				visibleItems: 1
			}, 
			landscape: { 
				changePoint:640,
				visibleItems:1
			},
			tablet: { 
				changePoint:768,
				visibleItems: 1
			}
		}
	});

	});
	</script>
	<script type="text/javascript" src="{{URL::asset('js/jquery.flexisel.js')}}"></script>
	
<!-- for-Map -->
		<script type="text/javascript">
			$(function() {
			
				var menu_ul = $('.faq > li > ul'),
					   menu_a  = $('.faq > li > a');
				
				menu_ul.hide();
			
				menu_a.click(function(e) {
					e.preventDefault();
					if(!$(this).hasClass('active')) {
						menu_a.removeClass('active');
						menu_ul.filter(':visible').slideUp('normal');
						$(this).addClass('active').next().stop(true,true).slideDown('normal');
					} else {
						$(this).removeClass('active');
						$(this).next().stop(true,true).slideUp('normal');
					}
				});
			
			});
		</script>
<!-- //for-Map -->

<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->


</body>
</html>