<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title>THAKUR HOstel</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+91 6392784651</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:abhaysingh0836481@outlook.com">abhaysingh0836481@outlook.com</a></li>
					</ul>
				</div>
			</div>
			<div class="agileits_w3layouts_banner_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive"></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="portfolio.php">Products</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
						
					</nav>

					</div>
				</nav>
			</div>
			<div class="wthree_banner_info">
				
			<section class="slider">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <h3>Comfortable Accommodation</h3>
                <p>Our hostel offers spacious rooms designed for maximum comfort. Each room is equipped with cozy beds, ample storage space, and study desks. All rooms are air-conditioned, ensuring a comfortable stay regardless of the weather.</p>
            </li>
            <li>
                <h3>Nutritious Meals Included</h3>
                <p>Enjoy three nutritious meals a day, prepared by experienced chefs. Our menu is diverse, including Indian, continental, and regional specialties. We also include healthy options like fresh fruits and vegetables.</p>
            </li>
            <li>
                <h3>Top-Notch Facilities</h3>
                <p>Our hostel features 24/7 security, high-speed Wi-Fi, laundry services, recreational areas, and quiet study rooms. Stay fit with access to our gym and fitness center.</p>
            </li>
            <li>
                <h3>Affordable Pricing</h3>
                <p>For just 5500 INR per month, enjoy all these amenities with no hidden costs. This all-inclusive rent covers accommodation, food, utilities, and access to all facilities.</p>
            </li>
            <li>
                <h3>Prime Location</h3>
                <p>Our hostel is strategically located with easy access to public transport, shopping centers, hospitals, and recreational facilities. It is also close to major universities and colleges, making it ideal for students.</p>
            </li>
            <li>
                <h3>Community and Events</h3>
                <p>Participate in various cultural and social events organized by the hostel, fostering a vibrant community life. Our friendly staff is always ready to assist you.</p>
            </li>
        </ul>
    </div>
</section>

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
			</div>
		</div>
	</div>
<!-- //banner -->

<!-- content -->
<div class="process all_pad agileits">
	
	<?php
				if (isset($_GET["subscribed"])) {
					echo 
					'<div class="alert alert-success" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                         <strong>SUBSCRIBED!! </strong><p> Thank you for subscribing with us. We will keep you informed on what is happening with Company.</p>
                    </div>'
					;
				}
				elseif (isset($_GET["fail"])) {
					echo 
					'<div class="alert alert-danger" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                         <strong>Ooops!! </strong><p> Looks like you are already subscribed to our mailing list :) </p>
                    </div>'
					;
				}
			?>	

</div>	
<!-- //process -->



<!-- footer -->
	
	<?php 
		include("footer.php");
	?>
