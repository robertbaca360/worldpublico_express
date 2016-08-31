<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Charity</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.less" rel="stylesheet/less">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<div id="wrapper">
				<!--Header Section Start Here -->
			<?php
			include_once ("includes/header.php");
			?>
			<!-- Header Section End Here -->
			<!-- site content -->
			<div id="main">
			<!-- Breadcrumb Section Start Here -->
				<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Shopping Cart</h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li class="active">
										 Shopping Cart
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<!-- Breadcrumb Section End Here -->

				<div class="container" id="page-info">
					<div class="row">
						<div class="col-xs-12">
							<!-- AddtoCart Section Start Here-->
							<section class="anim-section AddtoCart">
								<div class="row">
									<div class="col-sm-12">
										<h3>Shopping Cart Informations</h3>										
										<table class="table" id="main-table">
									      <thead>
									        <tr>
									          <th>#Item</th>
									          <th>Product</th>
									          <th>Price</th>
									          <th>Quantity</th>
									          <th>Total</th>
									          <th>&nbsp;</th>
									        </tr>
									      </thead>
									      <tbody>
									        <tr>
									          <td class="product-image"><a href="shop-listing.php"><img src="assets/img/shopping-img1.png" alt="" /></a></td>
									          <td class="product-title"><a href="shop-listing.php">Heading title product</a></td>
									          <td>$2.00</td>
									          <td class="quantity">
									          	<a href="#"><span class="glyphicon glyphicon-plus"></span></a>
									          	<input type="text" />
									          	<a href="#"><span class="glyphicon glyphicon-minus"></span></a>
									          </td>
									          <td class="total">$2.00</td>
									          <td><a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
									        </tr>
									      </tbody>
									    </table>
									   <table class="table footer-table" id="summary-table">
										   <tr>
										      	<td class="one">
										      		<a href="shoping-cart.php" class="btn btn-default hidden-xs">update cart</a>
										      		<a href="checkout.php" class="btn btn-default">proceed to checkout</a>
										      	</td>
										      	<td class="two">
										      		<table>
										      			<tr>
										      				<td>Cart Subtotal</td>
										      				<td>$2.00</td>
										      			</tr>
										      			<tr>
										      				<td>Shipping and Handling</td>
										      				<td class="free-shipping">Free Shipping</td>
										      			</tr>
										      			<tr>
										      				<td>Order Total</td>
										      				<td class="total">$2.00</td>
										      			</tr>
										      		</table>
										      	</td>
										   </tr>   	
									    </table>							
									</div>
								</div>
							</section>
							<!-- AddtoCart Section End Here-->							
						</div>
					</div>
				</div>

			</div>
			<!-- site content ends -->

			<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
			<!-- Footer Section End Here -->
		</div>
	-
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/less.js"></script>
		<!-- Switcher Style End Js -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
</html>