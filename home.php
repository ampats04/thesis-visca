<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<title>Tea Crate Café</title>	
	<link rel="icon" type="image/png" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md bg-successor navbar-dark">
  		<a class="navbar-brand" href="home.php">
  			<img src="images/logo.png" alt="logo" style="width:50px;">
  			Tea Create Café
  		</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
    		<ul class="navbar-nav">
      		<li class="nav-item">
        		<a class="nav-link" href="about.php">About</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="contact.php">Contact</a>
      		</li>  
    		</ul>
  		</div>  
	</nav>
	
	<!-- Image Slider -->
	<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  		<ol class="carousel-indicators">
    		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    		<li data-target="#myCarousel" data-slide-to="1"></li>
    		<li data-target="#myCarousel" data-slide-to="2"></li>
  		</ol>
  		<div class="carousel-inner">
    		<div class="carousel-item active">
    			<div class="overlay-image" style="background-image:url(images/slide1.jpg);"></div>
      			<div class="container">
      				<h1>WELCOME to Tea Create Café!</h1>
      				<a href="foods.php" class="btn btn-lg btn-primary btn-success">ORDER HERE</a>      			
      			</div>
    		</div>
    		<div class="carousel-item">
    			<div class="overlay-image" style="background-image:url(images/slide2.jpg);"></div>
      			<div class="container">
      				<h1>WELCOME to Tea Create Café!</h1>
      				<a href="foods.php" class="btn btn-lg btn-primary btn-success">ORDER HERE</a>
      			</div>
    		</div>
    		<div class="carousel-item">
    			<div class="overlay-image" style="background-image:url(images/slide3.jpg);"></div>
      			<div class="container">
      				<h1>WELCOME to Tea Create Café!</h1>
      				<a href="foods.php" class="btn btn-lg btn-primary btn-success">ORDER HERE</a>
      			</div>
    		</div>
  		</div>
    	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      		<span class="carousel-control-prev-icon" arial-hidden="true"></span>
      		<span class="sr-only">Previous</span>
    	</a>
    	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      		<span class="carousel-control-next-icon" arial-hidden="true"></span>
      		<span class="sr-only">Next</span>
    	</a>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>