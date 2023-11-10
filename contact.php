<?php
include("connection/connect.php");
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];


	$sql = "INSERT INTO contact(name,email,subject,message) VALUES('$name', '$email','$subject','$message')";
	mysqli_query($db, $sql);
}

?>
<!DOCTYPE html>
<html>


<head>
	<meta charset="UTF-8">
	<title>Relax Hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Linking Bootstrap css file -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Linking Main Css file -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/color.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">


	<link rel="stylesheet" type="text/css" href="css/popup.php">
</head>


<body>

	<div class="wrapper">

		<header class="abs">
			<div class="top-bar">
				<div class="container">
					<div class="con-links">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> (+91)9876543210</li>
							<li><i class="fa fa-envelope" aria-hidden="true"></i> Relaxhotel@gmail.com</li>
						</ul>
					</div><!--con-links end-->
					<div class="social-links">
						<ul class="social-lnks">
							<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>

						</ul>

					</div><!--socail-links end-->
				</div>
			</div><!--top-bar end-->
			<div class="bottom-header">
				<div class="container">
					<div class="hd">
						<div class="logo">
							<a href="#" title="">
								<img src="images/logo.png" alt="" />
							</a>
						</div><!--logo end-->
						<div class="menu-search">
							<nav>
								<ul>
									<li><a href="index.php" title=""><i class="fa fa-joomla"></i>Home</a>

									</li>

									<li><a href="about.php" title="">About Us</a></li>
									<li><a href="term.php" title="">Term & Condition </a></li>
									<li class="active menu-item-has-children"><a href="contact.php" title="">Contact Us</a></li>
								</ul>
							</nav><!--nav end-->

						</div><!--menu-search end-->
						<div class="menu-icon">
							<span class="first-bar"></span>
							<span class="second-bar"></span>
							<span class="third-bar"></span>
						</div>
					</div>
				</div>
			</div><!--bottom-header end-->
		</header><!--Header end-->

		<div class="about-bg">
			<div class="container">
				<div class="rl-banner">
					<h2>Contact Us</h2>
					<ul></br>
						<li><a href="#">Home</a></li>
						<li><span class="active">Contact Us</span></li>
					</ul>
				</div>
			</div>
		</div>



		<section>
			<div class="block">
				<div class="container">
					<div class="title f3 mg-btm-40">
						<h3>Contact Us</h3>
					</div><!--title end-->
					<div class="row">
						<div class="col-md-9">
							<div class="contact-form no-pdd">
								<form action='' method='post'>
									<div class="row">
										<div class="col-md-12">
											<input placeholder="Your Name" type="text" name='name'>
											<i class="fa fa-male"></i>
										</div>
										<div class="col-md-6">
											<input placeholder="Email" type="text" name='email'>
											<i class="fa fa-envelope"></i>
										</div>
										<div class="col-md-6">
											<input placeholder="Subject" type="text" name='subject'>
											<i class="fa fa-book"></i>
										</div>
										<div class="col-md-12">
											<textarea placeholder="Message" name='message'></textarea>
										</div>

										<div class="col-md-12">
											<input type='submit' name='submit' class="submit style2" />
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<div class="conp">
								<div class="contact-information style2">
									<img src="http://creativethemes.us/relax/images/icon11.png" alt="">
									<div class="cn-info">
										<h4>Address</h4>
										<span>Relax Hotel,<br>G.T. Road, Jalandhar</span>
									</div>
								</div><!--contact-information end-->
								<div class="contact-information style2">
									<img src="http://creativethemes.us/relax/images/icon22.png" alt="">
									<div class="cn-info">
										<h4>Phone</h4>
										<span>(+91)9876543210</span>
									</div>
								</div><!--contact-information end-->
								<div class="contact-information style2">
									<img src="http://creativethemes.us/relax/images/icon33.png" alt="">
									<div class="cn-info">
										<h4>Email</h4>
										<span> Relaxhotel@gmail.com</span>
									</div>
								</div><!--contact-information end-->
								<div class="shear">
									<h4>Social Link :</h4>
									<ul>
										<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-pinterest-p"></i></a></li>
									</ul>
								</div><!--shear end-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>





		<footer>
			<div class="block no-padding">
				<div class="bg bg3">
					<div class="container">
						<div class="top-footer">
							<div class="row">
								<div class="col-md-4">
									<div class="widget">
										<div class="about-widget">
											<a href="#" title=""><img src="images/logo2.png" alt=""></a>
											<p>Discover serenity at Relax Hotels, where tranquility meets luxury. Immerse yourself in our comfortable, well-appointed accommodations, offering a peaceful escape. Our exceptional service and prime locations ensure your stay is a soothing and memorable experience. Welcome to the epitome of relaxation.</p>

											<ul class="sc-links">
												<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>

											</ul>
										</div><!--about-widget end-->
									</div><!--widget end-->
								</div>
								<div class="col-md-3">
									<div class="widget">
										<div class="news-widget">
											<h3 class="widget-title">Latest Rooms</h3>
											<div class="news">
												<img src="images/resources/sroom1.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Single Room</a></h3>
													<span>2500 night</span>
												</div>
											</div><!--news end-->
											<div class="news">
												<img src="images/resources/sroom2.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Luxury Room</a></h3>
													<span>8000 night</span>
												</div>
											</div><!--news end-->
											<div class="news">
												<img src="images/resources/sroom3.png" alt="">
												<div class="news-details">
													<h3><a href="#" title="">Double Room </a></h3>
													<span>5000 night</span>
												</div>
											</div><!--news end-->
										</div><!--news-widget end-->
									</div><!--widget end-->
								</div>
								<div class="col-md-3">
									<div class="widget">
										<div class="widget-quick-links">
											<h3 class="widget-title">Quick Links</h3>
											<div class="qk-links">
												<ul>
													<li><a href="#" title="">Home</a></li>
													<li><a href="#" title="">About Us</a></li>
													<li><a href="#" title="">Contact Us</a></li>
													<li><a href="#" title="">Blogs</a></li>
												</ul>
												<ul>
													<li><a href="#" title="">Activities</a></li>
													<li><a href="#" title="">Gallery</a></li>
													<li><a href="#" title="">Aminities</a></li>
													<li><a href="#" title="">Offers</a></li>
												</ul>
											</div>
										</div><!--widget-quick-links end-->
									</div><!--widget-end-->
								</div>
							</div>
						</div><!--top-footer end-->
					</div>
				</div>
			</div>
		</footer><!--footer end-->





	</div><!--wrapper end-->

	<!-- Including Jquery Js File -->
	<script type="text/javascript" src="http://creativethemes.us/relax/js/jquery.min.js"></script>
	<!-- Including Bootstrap js file -->
	<script type="text/javascript" src="http://creativethemes.us/relax/js/bootstrap.min.js"></script>
	<!-- Custom Js file -->
	<script type="text/javascript" src="http://creativethemes.us/relax/js/script.js"></script>


</body>

</html>