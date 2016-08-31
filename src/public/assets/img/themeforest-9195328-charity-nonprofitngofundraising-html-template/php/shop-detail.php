<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Charity</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- fancyBox css files -->
		<link rel="stylesheet" type="text/css" href="assets/fancybox/css/fancybox.css" media="screen" />
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
								<h1>Our Shop</h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li class="active">
										 Product Details
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<!-- Breadcrumb Section End Here -->

				<div class="container mission-page" id="page-info">
					<div class="row">
						<div class="col-xs-12">
							<!-- Shoping Section Start Here-->
							<section class="our-works shoping shoping-detail-block">
								<header class="page-header section-header clearfix">
									<h2>Shop our products &amp; <strong>Help us.</strong></h2>
								</header>
								<div class="row">
									<div class="col-md-9 product-detail">
										<!-- product-detail Section -->
										<div class="row product-detail-inner">
											<div class="col-sm-5">
												<a class="fancybox-effects-a" href="assets/img/shopping-img1.png">
												<img  src="assets/img/shopping-img1.png" alt=""></a>
												</div>
											<div class="col-sm-7">
												<div class="product-detail-head">
													<h2>Heading title product</h2>
													<span class="deactive-star"><span class="active-star"></span></span>
													<span class="price"><del>$300.00</del> $250.00</span>
												</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Inmensae subtilitatis, obscuris  malesuada fames.</p>
												<span class="tags">Category :  women</span>
												<span class="tags">Tags : fashion, women, suit, sunglasses</span>
												<div class="product-quantity">
													<input type="text" />
													<div>
														<a href="#"><span class="glyphicon glyphicon-plus"></span></a>
														<a href="#" class="minus"><span class="glyphicon glyphicon-minus"></span></a>
													</div>
												</div>
												<a href="shoping-cart.php" class="btn btn-default">add to cart</a>
											</div>
										</div>
										<!-- product-detail tab Section -->
										<div class="row tab-wrap">
											<div class="col-sm-12">
												<!-- Nav tabs -->
												<ul class="nav nav-tabs nav-tabs_less-space" role="tablist">
												  <li class="active"><a href="#first_title-I" role="tab" data-toggle="tab">Description</a></li>
												  <li><a href="#second_title-II" role="tab" data-toggle="tab">Reviews (1)</a></li>
												</ul>
											
												<!-- Tab panes -->
												<div class="tab-content">
													  <div class="tab-pane active" id="first_title-I">
													  	<h3>Product Description</h3>
													  	<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Inmensae subtilitatis, obscuris et malesuada fames.Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Inmensae subtilitatis, obscuris et malesuada fames.</p>
													  	<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Inmensae subtilitatis, obscuris et malesuada fames.</p>
													  	<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Inmensae subtilitatis, obscuris et malesuada fames.Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Inmensae subtilitatis, obscuris et malesuada fames.</p>
													  </div>
													  <div class="tab-pane" id="second_title-II">
													  	<h3>Product Reviews</h3>
													  	<P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec risus neque, eget sagittis est. Nulla eget libero ligula, ac scelerisque sapien. Donec sit amet sapien purus, sit amet tristique nisi. </P>
													 </div>
												</div>
											</div>
										</div>
										<!-- Related Product Section -->
										<div class="row shoping-row">
											<div class="col-sm-12 related"><h3>Related Products</h3></div>
											<div class="col-sm-4">
												 <div class="thumbnail">
												 	<a class="img-thumb"><img alt="" src="assets/img/shopping-img1.png"></a>
												 	<div class="caption">
												 		<h3><a href="#">Heading title product</a></h3>
												 		<span class="price"><del>$300.00</del> $250.00</span>
												 		<a class="btn btn-default">add to cart</a>
												 		<span class="deactive-star"><span class="active-star"></span></span>
												 	</div>
												 </div>
											</div>
											<div class="col-sm-4">
												<div class="thumbnail">
												 	<a class="img-thumb"><img alt="" src="assets/img/shopping-img1.png"></a>
												 	<div class="caption">
												 		<h3><a href="#">Heading title product</a></h3>
												 		<span class="price"><del>$300.00</del> $250.00</span>
												 		<a class="btn btn-default">add to cart</a>
												 		<span class="deactive-star"><span class="active-star"></span></span>
												 	</div>
												 </div>
											</div>
											<div class="col-sm-4">
												<div class="thumbnail">
												 	<a class="img-thumb"><img alt="" src="assets/img/shopping-img1.png"></a>
												 	<div class="caption">
												 		<h3><a href="#">Heading title product</a></h3>
												 		<span class="price"><del>$300.00</del> $250.00</span>
												 		<a class="btn btn-default">add to cart</a>
												 		<span class="deactive-star"><span class="active-star"></span></span>
												 	</div>
												 </div>
											</div>
										</div>
									</div>
									
									<div class="col-md-3">
										<aside class="media">											
											<div class="shoping-filter clearfix">
												<h3 class="space-top">Product Categories</h3>
												<nav class="side-nav">
													<ul>
														<li><a href="shop-detail.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Handbag</a></li>
														<li><a href="shop-detail.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Men's</a></li>
														<li><a href="shop-detail.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Shoes</a></li>
														<li><a href="shop-detail.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Sunglasses</a></li>
														<li><a href="shop-detail.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Watches</a></li>
														<li><a href="shop-detail.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Women's</a></li>
													</ul>
												</nav>
											</div>
											<div class="shoping-filter clearfix">
												<h3 class="space-top">Top Rated Products</h3>
												<ul>
													<li>
														<a href="#" class="pull-left"><figure><img src="assets/img/shopping-thumb-img1.jpg" alt="" /></figure></a>
														<div class="media-body">
															<p>
																<a href="#">
																Fusce mauris enim faci lisis sceler 
																</a>
															</p>
															<span class="price"><del>£290.00 </del> £260.00</span>
														</div>
													</li>

													<li>
														<a href="#" class="pull-left"><figure><img src="assets/img/shopping-thumb-img1.jpg" alt="" /></figure></a>
														<div class="media-body">
															<p>
																<a href="#">
																Mauris enim faci lisis sceler isque non
																</a>
															</p>
															<span class="price"><del>£290.00 </del> £260.00</span>
														</div>
													</li>
													<li>
														<a href="#" class="pull-left"><figure><img src="assets/img/shopping-thumb-img1.jpg" alt="" /></figure></a>
														<div class="media-body">
															<p>
																<a href="#">
																Enim faci lisis sceler isque nonmauris
																</a>
															</p>
															<span class="price"><del>£290.00 </del> £260.00</span>
														</div>
													</li>
													<li>
														<a href="#" class="pull-left"><figure><img src="assets/img/shopping-thumb-img1.jpg" alt="" /></figure></a>
														<div class="media-body">
															<p>
																<a href="#">
																Enim faci lisis sceler isque nonmauris
																</a>
															</p>
															<span class="price"><del>£290.00 </del> £260.00</span>
														</div>
													</li>
												</ul>
											</div>
										</aside>
									</div>
								</div>
							</section>
							<!-- Shoping Section End Here-->
						</div>
					</div>
				</div>
			</div>
			<!-- site content ends -->
			
			<!-- Shop-Today Section Start Here-->
				<section class="shop-today">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<span class="glyphicon glyphicon-shopping-cart"></span>
								<h2>Buy our product and help us to <strong>improve our causes</strong></h2>
								<p>Dictumst cras sit amet est eget dui viverra scelerisque duis semper pulvinar in risus ac bibendum aenean hendrerit pharetra</p>
								<a href="shoping-cart.php" class="btn btn-default">add to cart</a>
							</div>
						</div>
					</div>	
				</section>
			<!-- Shop-Today Section End Here-->

		<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
			<!--Footer Section End Here -->
		</div>
		
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/less.js"></script>
		<!-- Switcher Style End Js -->
		<!--Main FancyLight Js End -->
		<script type="text/javascript" src="assets/fancybox/js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="assets/fancybox/js/custom.fancybox.js"></script>
		<!--Main FancyLight Js End -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
</html>