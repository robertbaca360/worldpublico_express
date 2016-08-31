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
				<!--Breadcrumb Section Start Here -->
				<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Shortcode</h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li class="active">
										Shortcode
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--Breadcrumb Section End Here -->
				
				<section class="content-wrapper container" id="page-info">
					<div class="row shortcode-page">
					<!-- Side NavBar Start Here -->
					<div class="col-xs-12 col-md-3">
						<nav class="side-nav">
							<ul>
						<li><a href="typography.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Typography</a></li>
						<li><a href="tabs.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Tabs Shortcode</a></li>
						<li><a href="accordion.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Accordion/Toggle Box</a></li>
						<li class="active"><a href="notification.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Notification Boxes</a></li>
						<li><a href="slider-ranger.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Slider Ranger</a></li>
						<li><a href="tables.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Table</a></li>
						<li><a href="list-style.php"><i class="fa fa-angle-double-right bullet-arrow"></i>List style</a></li>	
						<li><a href="blockquote.php"><i class="fa fa-angle-double-right bullet-arrow"></i>Blockquote</a></li>	
						</ul>
						</nav>
					</div>
					<!-- Side NavBar End Here -->
					<!-- Notification Section Start Here -->
					<div class="col-xs-12 col-md-9">
						<h2 class="h4 page-header">Notification  Heading Title</h2>
						<p>Aenean mollis ultricies massa ac imperdifdg aecenas nulla dolor, accumsan id risus eu, dignissim elementum dsdf lum gravida dui eu sagittis fringilladf nean mollis ultricies massa ac imperdiet. Maecenas nulla dolor, accumsan id risus eu, digni dolo stibulum gravida dui eu sagittis fringilla.</p>
					<div class="bs-example-notification">
						<div class="alert alert-danger">
							<p><strong>Warning Block!</strong> Lorem Ipsum is simply dummy text.</p>
						</div>
						<div class="alert alert-success">
							<p><strong>Accepted!</strong>  Lorem Ipsum is simply dummy text lorem Ipsumis.</p>
						</div>
						<div class="alert alert-info">
							<p><strong>Information !</strong>  Lorem Ipsum is simply dummy text lorem.</p>
						</div>
						<div class="alert alert-warning">
							<p><strong>Notification Block !</strong>  Lorem Ipsum is simply dummy text lorem Ipsum is.</p>
						</div>
						<div class="alert alert-default">
							<p><strong>Standard Block !</strong>  Lorem Ipsum is simply dummy text lorem Ipsum is.</p>
						</div>
					</div>
					</div>
					<!-- Notification Section Start Here -->
					</div>
					
				</section>

			</div>
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