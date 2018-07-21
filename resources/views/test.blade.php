<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
		margin-bottom: 0;
		border-radius: 0;
		margin-top: 10px;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      /*background-color: #f1f1f1;*/
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

    header {
    	display: block;
		width: 393px;
		height: 81px;
		margin: 0 auto;
		text-indent: -10000px;
		background: url(images/logonew.png) no-repeat;
	}

	body {
		background: #08025c;
	}

	.page-content {
		background: white;
		border: 1px black;
		box-shadow: 2px black;
	}

	.page-nav-header {
		padding: 0px;
	}



	.right-sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    /*background-color: #111;*/
    overflow-x: hidden;
    padding-top: 20px;
}

	.left-sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    /*background-color: #111;*/
    overflow-x: hidden;
    padding-top: 20px;
}

/*.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}
*/
.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    margin-right: 160px;
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

/*@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}*/
  </style>
</head>
<body>
  
<div class="container-fluid text-center">
	<div class="right-sidenav">
		<a href="#about">About</a>
		<a href="#services">Services</a>
		<a href="#clients">Clients</a>
		<a href="#contact">Contact</a>
	</div>

	<div class="main">
		<header></header>
		<section>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand" href="#">Logo</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Projects</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</section>
		<section class="carousel">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
					  <img src="images/1.jpg" alt="Los Angeles">
					</div>

					<div class="item">
					  <img src="images/2.jpg" alt="Chicago">
					</div>

					<div class="item">
					  <img src="images/3.jpg" alt="New York">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
		</section>

		<section class="content">
			<h1>Welcome</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<hr>
			<h3>Test</h3>
			<p>Lorem ipsum...</p>
		</section>
	</div>

	<div class="left-sidenav">
		<a href="#about">About</a>
		<a href="#services">Services</a>
		<a href="#clients">Clients</a>
		<a href="#contact">Contact</a>
	</div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
