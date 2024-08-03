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
	<link rel="stylesheet" type="text/css" href="css/foods.css">
	<link rel="stylesheet" type="text/css" href="css/myorder.css">
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
      	<h1>MY ORDER</h1>  			
    </div>
    <hr class="line mb-5">

    <div class="container myorderpage p-5 mb-5">
	    <form>
	    	<div class="form-row formcss">
	    		<div class="form-group col-sm-3">
					<label for="name"><h5>Name:</h5></label>
  					<input type="text" class="form-control" id="name" placeholder="Enter First Name & Last Name" required>
  				</div>
  				<div class="form-group col-sm-3">
					<label for="table"><h5>Table No.:</h5></label>
  					<input type="text" class="form-control" id="table" placeholder=" Enter 1 / 2 / 3 / 4 / 5 / 6 / 7 / 8">
  				</div>			
			</div>
	    </form>
	    <div class="row">
            <span class="col col-order col-head item"><strong><h5>PRODUCT</h5></strong></span>
            <span class="col col-order col-head"><strong><h5>PRICE</h5></strong></span>
            <span class="col col-order col-head"><strong><h5>QUANTITY</h5></strong></span>
        </div>
        <div class="items">
        	<div class="row item-row">
                <div class="col col-order item">
                    <img class="item-image" src="" width="100" height="100">
                    <span class="item-title">TySfs</span>
                </div>
                <span class="col col-order price">₱5</span>
                <div class="col col-order">
                    <input class="quantity-input" type="number" value="2">
                    <button class="btn btn-danger" type="button">REMOVE</button>
                </div>
            </div>
            <div class="row item-row">
                <div class="col col-order item">
                    <img class="item-image" src="" width="100" height="100">
                    <span class="item-title">Als</span>
                </div>
                <span class="col col-order price">₱10</span>
                <div class="col col-order">
                    <input class="quantity-input" type="number" value="2">
                    <button class="btn btn-danger" type="button">REMOVE</button>
                </div>
            </div>
        </div>
        <div class="total">
            <strong class="total-title">Total</strong>
            <span class="total-price">₱0</span>
        </div>
        <button id="submit" type="button" class="btn btn-lg btn-success"><strong>PURCHASE</strong></button>
	</div>

	<div class="container">
		<hr class="line2 mt-4">

		<!-- Next & Prev Button -->
		<nav>
			<ul class="pagination pagination-lg justify-content-center">
				<!--<li class="page-item previous-page disabled">
					<a class="page-link border rounded prev-button" href="">Prev</a>
				</li>-->
				<li class="page-item current-page">
					<a class="page-link border rounded bottom-page" href="foods.html">Foods</a>
				</li>
				<li class="page-item">
					<a class="page-link border rounded bottom-page" href="milktea.html">MilkTea</a>
				</li>
				<li class="page-item">
					<a class="page-link border rounded bottom-page" href="shake.html">Shake</a>
				</li>
				<li class="page-item active">
					<a class="page-link order rounded bottom-page" href="myorder.html">My Orders</a>
				</li>
			</ul>
		</nav>
	</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/myorder.js" async></script>
    <script>
    	var orderRow = document.createElement('div')
    	orderRow.classList.add('row')
    	var orderItems = document.getElementsByClassName('items')[0]
    	var orderItemNames = orderItems.getElementsByClassName('item-title')
    	for (var i = 0; i < orderItemNames.length; i++) {
    		if (orderItemNames[i].innerText == JSON.parse(sessionStorage.getItem('name'))) {
    			alert('This is already added to your order!')
    	
    		}
    	}
    	var orderRowContents = `
			<div class="col col-order item">
				<img class="item-image" src="${JSON.parse(sessionStorage.getItem('image'))}" width="100" height="100">
				<span class="item-title">${JSON.parse(sessionStorage.getItem('name'))}</span>
			</div>
			<span class="col col-order price">${JSON.parse(sessionStorage.getItem('price'))}</span>
			<div class="col col-order">
				<input class="quantity-input" type="number" value="2">
				<button class="btn btn-danger" type="button">REMOVE</button>
			</div>`
		orderRow.innerHTML = orderRowContents
    	orderItems.append(orderRow)

    </script>
</body>
</html>