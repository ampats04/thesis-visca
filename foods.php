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
	<link rel="stylesheet" type="text/css" href="css/foods.css">
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-md bg-successor navbar-dark fixed-top">
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

	<!-- Header -->
	<div class="header">
      	<h1>FOODS</h1>  			
    </div>
    <hr class="line mb-5">

	<!-- Cards -->
	<div class="container">
		<div class="row justify-content-center">
			<iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/carrotcake.jpg" alt="Carrot Cake" id="carrotpic"></div>
					<div class="card-body quantity">
						<h5 class="card-title mb-1" id="carrottitle">Carrot Cake (per slice)</h5>	
						<h5 class="price mb-2" id="carrotprice">₱10</h5>
						<form class="form quantity" action="myorder.php" method="GET">
							<div class="form-group row">
							<label for="carrotinput" class="col col-form-label">Quantity</label>
							<input type="number" id="carrotinput" name="Carrot" min="1" max="30" class="form-control col" oninput="EnableDisable('carrotbutton','carrotinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>	
						<button id="carrotbutton" type="submit" name="Carrot Cake" onclick="SuccessOrder(); AddToOrderClicked('carrottitle','carrotprice','carrotpic');" class="btn btn-lg btn-success item-button" disabled >Place Order</button>	
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/brownies.jpg" alt="Brownies" id="browniespic"></div>
					<div class="card-body quantity">
						<h5 class="card-title mb-1" id="browniestitle">Brownies (per slice)</h5>
						<h5 class="price mb-2" id="browniesprice">₱10</h5>
						<form class="form quantity" action="myorder.html" method="post">
							<div class="form-group row">
							<label for="browniesinput" class="col col-form-label">Quantity</label>
							<input type="number" id="browniesinput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('browniesbutton','browniesinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="browniesbutton" type="submit" name="Brownies" onclick="SuccessOrder(); AddToOrderClicked('browniestitle','browniesprice','browniespic');" class="btn btn-lg btn-success item-button" disabled>Place Order</button>	
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/chocoroll.jpg" alt="Choco Roll"></div>
					<div class="card-body">
						<h5 class="card-title mb-1" id="chocorolltitle">Choco Roll (per roll)</h5>
						<h5 class="price mb-2" id="chocorollprice">₱10</h5>
						<form class="form quantity">
							<div class="form-group row">
							<label for="chocoinput" class="col col-form-label">Quantity</label>
							<input type="number" id="chocoinput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('chocobutton','chocoinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="chocobutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success item-button" disabled>Place Order</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/nachos.png" alt="Nachos"></div>
					<div class="card-body">
						<h5 class="card-title mb-1" id="nachostitle">Nachos (per bowl)</h5>	
						<h5 class="price mb-2" id="nachosprice">₱60</h5>
						<form class="form quantity">
							<div class="form-group row">
							<label for="nachosinput" class="col col-form-label">Quantity</label>
							<input type="number" id="nachosinput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('nachosbutton','nachosinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="nachosbutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success item-button" disabled>Place Order</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/fries.png" alt="Fries"></div>
					<div class="card-body">
						<h5 class="card-title mb-1" id="friestitle">Fries (per basket)</h5>	
						<h5 class="price mb-2" id="friesprice">₱60</h5>
						<form class="form quantity">
							<div class="form-group row">
							<label for="friesinput" class="col col-form-label">Quantity</label>
							<input type="number" id="friesinput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('friesbutton','friesinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="friesbutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success item-button" disabled>Place Order</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/torta.png" alt="Torta"></div>
					<div class="card-body">
						<h5 class="card-title mb-1" id="tortatitle">Torta (per piece)</h5>	
						<h5 class="price mb-2" id="tortaprice">₱30</h5>
						<form class="form quantity">
							<div class="form-group row">
							<label for="tortainput" class="col col-form-label">Quantity</label>
							<input type="number" id="tortainput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('tortabutton','tortainput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="tortabutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success item-button" disabled>Place Order</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/hashbrown.png" alt="Hashbrown"></div>
					<div class="card-body">
						<h5 class="card-title mb-1" id="hbrowntitle">Hashbrown (per piece)</h5>	
						<h5 class="price mb-2" id="hbrownprice">₱20</h5>
						<form class="form quantity">
							<div class="form-group row">
							<label for="hbinput" class="col col-form-label">Quantity</label>
							<input type="number" id="hbinput" name="quantity" min="1" max="30" class="form-control col" oninput="EnableDisable('hbbutton','hbinput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="hbbutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success item-button" disabled>Place Order</button>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card mb-3 text-center" style="border: 1px solid forestgreen;">
					<div class="inner"><img class="card-img-top" src="images/dumpling.jpg" alt="Dumpling"></div>
					<div class="card-body">
						<h5 class="card-title mb-1" id="dumplingtitle">Dumpling (6 pieces)</h5>	
						<h5 class="price mb-2" id="dumplingprice">₱85</h5>
						<form class="form quantity">
							<div class="form-group row">
							<label for="dumplinginput" class="col col-form-label">Quantity</label>
							<input type="number" id="dumplinginput" name="quantity" min="1" max="30" maxlength="2" class="form-control col" oninput="EnableDisable('dumplingbutton','dumplinginput')" onKeyPress="if(this.value.length==2) return false;">
							</div>
						</form>
						<button id="dumplingbutton" type="button" onclick="SuccessOrder()" class="btn btn-lg btn-success item-button" disabled>Place Order</button>
					</div>
				</div>
			</div>
		</div>
		<hr class="line2 mt-4">

		<!-- Next & Prev Button -->
		<nav>
			<ul class="pagination pagination-lg justify-content-center">
				<!--<li class="page-item previous-page disabled">
					<a class="page-link border rounded prev-button" href="">Prev</a>
				</li>-->
				<li class="page-item current-page active">
					<a class="page-link border rounded" href="">Foods</a>
				</li>
				<li class="page-item">
					<a class="page-link border rounded" href="milktea.php">MilkTea</a>
				</li>
				<li class="page-item">
					<a class="page-link border rounded" href="shake.php">Shake</a>
				</li>
				<li class="page-item active">
					<a class="page-link order rounded" href="myorder.php">My Orders</a>
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
</body>
</html>