<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<title>Tea Crate Café</title>
	<link rel="icon" type="image/png" href="images/logo.png">
	<link rel="stylesheet" type="text/css" href="css/milktea.css">
	<link rel="stylesheet" type="text/css" href="css/foods.css">

</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md bg-successor navbar-dark fixed-top">
  		<a class="navbar-brand" href="home.html">
  			<img src="images/logo.png" alt="logo" style="width:50px;">
  			Tea Create Café
  		</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
    		<ul class="navbar-nav">
      		<li class="nav-item">
        		<a class="nav-link" href="about.html">About</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="contact.html">Contact</a>
      		</li>  
    		</ul>
  		</div>  
	</nav>

	<!-- Header -->
	<div class="header">
      	<h1>Milk Tea</h1>  			
    </div>
    <hr class="line">

    <div class="ccseries">
      	<h2>Cheesecake Series</h2>  			
    </div>
	<!-- Cards -->
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/ccoreo.jpg" alt="Oreo"></div>
					<div class="card-body">
						<h5 class="card-title">Oreo</h5>
						<div class="form-check mr-1">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" id="oreosmall" value="" onclick="EnableDisable('oreobutton','oreolarge','oreomedium','oreosmall','oreoinput')">Small (₱100)
						  	</label>
						</div>
						<div class="form-check ml-3">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="oreomedium" onclick="EnableDisable('oreobutton','oreolarge','oreomedium','oreosmall','oreoinput')">Medium (₱200)
						  	</label>
						</div>
						<div class="form-check mr-1 mb-2">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="oreolarge" onclick="EnableDisable('oreobutton','oreolarge','oreomedium','oreosmall','oreoinput')">Large (₱300)
						  	</label>
						</div>
						<form class="form quantity">
							<div class="form-group row">
							<label for="oreoinput" class="col col-form-label">Quantity</label>
							<input type="number" id="oreoinput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('oreobutton','oreolarge','oreomedium','oreosmall','oreoinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="oreobutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success" disabled>Place Order</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/cctaro.png" alt="Taro"></div>
					<div class="card-body">
						<h5 class="card-title">Taro</h5>
						<div class="form-check mr-1">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="tarosmall" onclick="EnableDisable('tarobutton','tarolarge','taromedium','tarosmall','taroinput')">Small (₱100)
						  	</label>
						</div>
						<div class="form-check ml-3">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="taromedium" onclick="EnableDisable('tarobutton','tarolarge','taromedium','tarosmall','taroinput')">Medium (₱200)
						  	</label>
						</div>
						<div class="form-check mr-1 mb-2">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="tarolarge" onclick="EnableDisable('tarobutton','tarolarge','taromedium','tarosmall','taroinput')">Large (₱300)
						  	</label>
						</div>
						<form class="form quantity">
							<div class="form-group row">
							<label for="taroinput" class="col col-form-label">Quantity</label>
							<input type="number" id="taroinput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('tarobutton','tarolarge','taromedium','tarosmall','taroinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="tarobutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success" disabled>Place Order</button>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/ccmatcha.png" alt="Matcha"></div>
					<div class="card-body">
						<h5 class="card-title">Matcha</h5>
						<div class="form-check mr-1">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" id="matchasmall" value="" onclick="EnableDisable('matchabutton','matchalarge','matchamedium','matchasmall','matchainput')">Small (₱100)
						  	</label>
						</div>
						<div class="form-check ml-3">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="matchamedium" onclick="EnableDisable('matchabutton','matchalarge','matchamedium','matchasmall','matchainput')">Medium (₱200)
						  	</label>
						</div>
						<div class="form-check mr-1 mb-2">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="matchalarge" onclick="EnableDisable('matchabutton','matchalarge','matchamedium','matchasmall','matchainput')">Large (₱300)
						  	</label>
						</div>
						<form class="form quantity">
							<div class="form-group row">
							<label for="matchainput" class="col col-form-label">Quantity</label>
							<input type="number" id="matchainput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('matchabutton','matchalarge','matchamedium','matchasmall','matchainput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="matchabutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success" disabled>Place Order</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/ccstrawberry.png" alt="Strawberry"></div>
					<div class="card-body">
						<h5 class="card-title">Strawberry</h5>
						<div class="form-check mr-1">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="strawbsmall" onclick="EnableDisable('strawbbutton','strawblarge','strawbmedium','strawbsmall','strawbinput')">Small (₱100)
						  	</label>
						</div>
						<div class="form-check ml-3">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="strawbmedium" onclick="EnableDisable('strawbbutton','strawblarge','strawbmedium','strawbsmall','strawbinput')">Medium (₱200)
						  	</label>
						</div>
						<div class="form-check mr-1 mb-2">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="strawblarge" onclick="EnableDisable('strawbbutton','strawblarge','strawbmedium','strawbsmall','strawbinput')">Large (₱300)
						  	</label>
						</div>
						<form class="form quantity">
							<div class="form-group row">
							<label for="strawbinput" class="col col-form-label">Quantity</label>
							<input type="number" id="strawbinput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('strawbbutton','strawblarge','strawbmedium','strawbsmall','strawbinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="strawbbutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success" disabled>Place Order</button>
					</div>
				</div>
			</div>
		</div>
		<hr class="line2">

    	<div class="ccseries">
      		<h2>Classic</h2>  			
    	</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/cwintermelon.png" alt="Wintermelon"></div>
					<div class="card-body">
						<h5 class="card-title">Wintermelon</h5>
						<div class="form-check mr-1">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="wintermsmall" onclick="EnableDisable('wintermbutton','wintermlarge','wintermmedium','wintermsmall','winterminput')">Small (₱100)
						  	</label>
						</div>
						<div class="form-check ml-3">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="wintermmedium" onclick="EnableDisable('wintermbutton','wintermlarge','wintermmedium','wintermsmall','winterminput')">Medium (₱200)
						  	</label>
						</div>
						<div class="form-check mr-1 mb-2">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="wintermlarge" onclick="EnableDisable('wintermbutton','wintermlarge','wintermmedium','wintermsmall','winterminput')">Large (₱300)
						  	</label>
						</div>
						<form class="form quantity">
							<div class="form-group row">
							<label for="winterminput" class="col col-form-label">Quantity</label>
							<input type="number" id="winterminput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('wintermbutton','wintermlarge','wintermmedium','wintermsmall','winterminput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="wintermbutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success" disabled>Place Order</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/chokkaido.png" alt="Hokkaido"></div>
					<div class="card-body">
						<h5 class="card-title">Hokkaido</h5>
						<div class="form-check mr-1">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="hokkaidosmall" onclick="EnableDisable('hokkaidobutton','hokkaidolarge','hokkaidomedium','hokkaidosmall','hokkaidoinput')">Small (₱100)
						  	</label>
						</div>
						<div class="form-check ml-3">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="hokkaidomedium" onclick="EnableDisable('hokkaidobutton','hokkaidolarge','hokkaidomedium','hokkaidosmall','hokkaidoinput')">Medium (₱200)
						  	</label>
						</div>
						<div class="form-check mr-1 mb-2">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="hokkaidolarge" onclick="EnableDisable('hokkaidobutton','hokkaidolarge','hokkaidomedium','hokkaidosmall','hokkaidoinput')">Large (₱300)
						  	</label>
						</div>
						<form class="form quantity">
							<div class="form-group row">
							<label for="hokkaidoinput" class="col col-form-label">Quantity</label>
							<input type="number" id="hokkaidoinput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('hokkaidobutton','hokkaidolarge','hokkaidomedium','hokkaidosmall','hokkaidoinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="hokkaidobutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success" disabled>Place Order</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/cokinawa.png" alt="Okinawa"></div>
					<div class="card-body">
						<h5 class="card-title">Okinawa</h5>
						<div class="form-check mr-1">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="okinawasmall" onclick="EnableDisable('okinawabutton','okinawalarge','okinawamedium','okinawasmall','okinawainput')">Small (₱100)
						  	</label>
						</div>
						<div class="form-check ml-3">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="okinawamedium" onclick="EnableDisable('okinawabutton','okinawalarge','okinawamedium','okinawasmall','okinawainput')">Medium (₱200)
						  	</label>
						</div>
						<div class="form-check mr-1 mb-2">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="okinawalarge" onclick="EnableDisable('okinawabutton','okinawalarge','okinawamedium','okinawasmall','okinawainput')">Large (₱300)
						  	</label>
						</div>
						<form class="form quantity">
							<div class="form-group row">
							<label for="okinawainput" class="col col-form-label">Quantity</label>
							<input type="number" id="okinawainput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('okinawabutton','okinawalarge','okinawamedium','okinawasmall','okinawainput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="okinawabutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success" disabled>Place Order</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/cmatcha.png" alt="Matcha"></div>
					<div class="card-body">
						<h5 class="card-title">Matcha</h5>
						<div class="form-check mr-1">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="matchacsmall" onclick="EnableDisable('matchacbutton','matchaclarge','matchacmedium','matchacsmall','matchacinput')">Small (₱100)
						  	</label>
						</div>
						<div class="form-check ml-3">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="matchacmedium" onclick="EnableDisable('matchacbutton','matchaclarge','matchacmedium','matchacsmall','matchacinput')">Medium (₱200)
						  	</label>
						</div>
						<div class="form-check mr-1 mb-2">
							<label class="form-check-label">
						    	<input type="checkbox" class="form-check-input" value="" id="matchaclarge" onclick="EnableDisable('matchacbutton','matchaclarge','matchacmedium','matchacsmall','matchacinput')">Large (₱300)
						  	</label>
						</div>
						<form class="form quantity">
							<div class="form-group row">
							<label for="matchainput" class="col col-form-label">Quantity</label>
							<input type="number" id="matchacinput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('matchacbutton','matchaclarge','matchacmedium','matchacsmall','matchacinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="matchacbutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success" disabled>Place Order</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Next & Prev Button -->
		<nav>
			<ul class="pagination pagination-lg justify-content-center">
				<!--<li class="page-item previous-page disabled">
					<a class="page-link border rounded prev-button" href="">Prev</a>
				</li>-->
				<li class="page-item">
					<a class="page-link border rounded" href="foods.html">Foods</a>
				</li>
				<li class="page-item active">
					<a class="page-link border rounded" href="">MilkTea</a>
				</li>
				<li class="page-item">
					<a class="page-link border rounded" href="shake.html">Shake</a>
				</li>
				<li class="page-item order active">
					<a class="page-link order rounded" href="myorder.html">My Orders</a>
				</li>
			</ul>
		</nav>
	</div>
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="js/foods.js"></script>
	<script src="js/drinks.js"></script>
</body>
</html>