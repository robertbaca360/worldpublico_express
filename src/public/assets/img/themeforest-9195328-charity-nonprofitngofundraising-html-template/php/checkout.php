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

				<div class="container" id="page-info">
					<div class="row">
						<div class="col-xs-12">
							<!-- Checkout Section Start Here-->
							<section class="checkout anim-section">
								<div class="row">
									<div class="customer-care col-sm-12">Need help? Call customer services on <a href="tel:6701234567">670 123 4567</a>.</div>
									<!-- Customer Support Section Start Here-->
									<div class="customer-support col-sm-12">
										<ul>
											<li><a href="#">Email customer care</a></li>
											<li><a href="#">Shipping information</a></li>
											<li><a href="#">Returns &amp; exchange</a></li>
											<li><a href="#">F.A.Q.'s</a></li>
										</ul>
									</div>
									<!-- Customer Support Section Ends Here-->
									<!-- Checkout Tabbing Section Start Here-->
									<div class="tab-wrap col-sm-12">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs nav-tabs_less-space" role="tablist">
										  <li class="active col-sm-3"><a href="#signin" role="tab" data-toggle="tab">1. Sign In</a></li>
										  <li class="col-sm-3"><a href="#billing" role="tab" data-toggle="tab">2. Billing &amp; Shipping</a></li>
										  <li class="col-sm-3"><a href="#review" role="tab" data-toggle="tab">3. Review &amp; Payment</a></li>
										  <li class="col-sm-3"><a href="#confirmation" role="tab" data-toggle="tab">4. Confirmation</a></li>
										</ul>
										
										<!-- Tab panes -->
										<div class="tab-content">
										  <!-- Signin Section Start Here-->
										  <div class="tab-pane active" id="signin">
										  	<div class="row">
										  		<div class="col-sm-5">
										  			<h4>I already have an account</h4>
										  			<form role="form" >
										  				<div class="form-group">
															<label for="name">Username or email<span>*</span></label>
															<input type="text" class="form-control" id="name">
														</div>
														<div class="form-group">
															<label for="password">password<span>*</span></label>
															<input type="text" class="form-control" id="password">
														</div>
														<div class="form-group btns-wrapper">
															<button type="submit" class="btn btn-default btn-lg">login</button>
															<a href="#" class="pull-right frgt-pwd">Lost Password?</a>
														</div>
										  			</form>
										  		</div>
										  		<div class="col-sm-6 col-sm-offset-1">
										  			<h4>I'm new here</h4>
										  			<p>Lorem ipsum dolor sit amet, consectetur adipiscing e Nulla justo mauris, iaculis at varius eu, hendrerit vel purusestibulum orci enim, laoreet at sapien se</p>
										  			<p>Login using <a href="#">demo</a> as both username and password to view the user area.</p>
										  			<div class="btns-wrapper">
														<a href="#" class="btn btn-default grouped">Create an account </a>
														<a href="#" class="btn btn-default grouped">Checkout as a guest </a>
													</div>
										  		</div>
										  	</div>
										  </div>
										  <!-- Signin Section Ends Here-->
										  
										  <!-- Billing & Shipping Section Start Here-->
										  <div class="tab-pane" id="billing">
										  	<div class="row">
										  		<div class="col-sm-6">
										  			<h4>Billing Address</h4>
										  			<form role="form" >
										  				<div class="form-group">
															<label for="country">Country<span>*</span></label>
															<input type="text" class="form-control" id="country">
														</div>
														<div class="form-group col-sm-6 col-small-left">
															<label for="fname">First Name<span>*</span></label>
															<input type="text" class="form-control" id="fname">
														</div>
														<div class="form-group col-sm-6 col-small-right">
															<label for="lname">Last Name<span>*</span></label>
															<input type="text" class="form-control" id="lname">
														</div>
														<div class="form-group">
															<label for="company">Company Name</label>
															<input type="text" class="form-control" id="company">
														</div>
														<div class="form-group">
															<label for="address">Address<span>*</span></label>
															<input type="text" class="form-control" id="address">
															<input type="text" class="form-control">
														</div>
														<div class="form-group">
															<label for="city">Town / City<span>*</span></label>
															<input type="text" class="form-control" id="city">
														</div>
														<div class="form-group col-sm-6 col-small-left">
															<label>County</label>
															<input type="text" class="form-control">
														</div>
														<div class="form-group col-sm-6 col-small-right">
															<label for="pcode">Postcode <span>*</span></label>
															<input type="text" class="form-control" id="pcode">
														</div>
														<div class="form-group col-sm-6 col-small-left">
															<label for="mail">Email Address</label>
															<input type="text" class="form-control" id="mail">
														</div>
														<div class="form-group col-sm-6 col-small-right">
															<label for="phone">Phone <span>*</span></label>
															<input type="text" class="form-control" id="phone">
														</div>
														<div class="checkbox">
														    <label><input type="checkbox"> Create an account?</label>
														</div>
														<div class="form-group">
															<button type="submit" class="btn btn-default btn-lg">continue</button>
														</div>
										  			</form>
										  		</div>
										  		<div class="col-sm-6">
										  			<h4>Shipping Address</h4>
										  			<form role="form" >
											  			<div class="form-group">
															<label for="phone">Order Notes</label>
																<div class="checkbox checkbox-right">
																<label><input type="checkbox">Ship to billing address?</label>
															</div>
															<textarea class="form-control" rows="3" cols="10"></textarea>
														</div>
													</form>
										  		</div>
										  	</div>
										  </div>
										   <!-- Billing & Shipping Section Ends Here-->
										   
										  <!-- Review & Payment Section Start Here-->
										  <div class="tab-pane" id="review">
										  	<h4>Your Order Summary</h4>										  	
										  	<!-- AddtoCart Section Start Here-->
											<section class="anim-section AddtoCart">
												<div class="row">
													<div class="col-sm-12">								
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
													          <td class="product-image"><img src="assets/img/shopping-img1.png" alt="" /></td>
													          <td class="product-title">Heading title product</td>
													          <td>$2.00</td>
													          <td>1</td>
													          <td class="total">$2.00</td>
													          <td><a href="#"><span class="glyphicon glyphicon-remove"></span></a></td>
													        </tr>
													      </tbody>
													    </table>
													    <table class="table footer-table" id="summary-table"> 
														   <tr>
														   		<td class="one">&nbsp;</td>
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
											<!-- Payment Section Start Here-->
											<section class="payment-option">
												<h4>Payment Method</h4>
												<form role="form">
											  		<div class="radio">
													  <label>
													    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
													    Direct Bank Transfer
													    <small>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</small>
													  </label>
													</div>
													<div class="radio">
													  <label>
													    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													    Cheque Payment
													  </label>
													</div>
													<div class="radio">
													  <label>
													    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													    PayPal <img src="assets/img/paypal.jpg" alt="" />
													  </label>
													</div>
													<div class="btns-wrapper">
														<a href="#" class="btn btn-default grouped">place order</a>
													</div>
											  	</form>
											</section>
											<!-- Payment Section Ends Here-->
										  </div>
										   <!-- Review & Payment Section Ends Here-->
										  <div class="tab-pane" id="confirmation">
										  	<div class="row">
										  		<div class="col-xs-12">
										  			<i class="fa fa-check-circle-o completed"></i>
										  			<strong class="payment-success">Payment Successfully Completed</strong>
										  			<p>Thank you for Purchasing product from Us. 20% of the price will go to Charity.</p>
										  			<span>You have Purchased <span class="purchased-item">“Volunteer T-Shirt”</span></span>
										  			<div class="total-price">
										  				<span>Total:</span> <span class="price-value">$50.49</span>
										  			</div>
										  		
										  			<a href="#" class="btn btn-default track-btn">TRACK ORDER</a>
										  			
										  	</div>
										</div>
			
										  </div>
										</div>
										</div>
									<!-- Checkout Tabbing Section Ends Here-->									
								</div>
							</section>
							<!-- Checkout Section End Here-->
						</div>
					</div>
				</div>

			</div>
			<!-- site content ends -->

		<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
			<!--Footer Section End Here -->
		</div>
		
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/less.js"></script>
		<!-- Switcher Style End Js -->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
</html>