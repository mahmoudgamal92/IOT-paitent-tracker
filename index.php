<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>IOTPT</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
    <style>
    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    
    </style>
</head>

<body>



	<!--================Header Menu Area =================-->
	<header class="header_area">
		
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php">
						<img style="width:150px;" src="img/logo.jpeg" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                <?php
                                session_start();
                                if(isset($_SESSION['username'])){
                                    echo "
                                    <li class='nav-item active'>
										<a class='nav-link' href='index.php'>Home</a>
									</li>
                                    
                                    <li class='nav-item'>
										<a class='nav-link' href='dr_profile.php'>DR\\".$_SESSION['username']."</a>
									</li>
									
									<li class='nav-item'>
										<a class='nav-link' href='logout.php'>logout</a>
									</li>
                                    ";
                                }
                                    else{
                                        echo"
                                        
                                        <li class='nav-item active'>
										<a class='nav-link' href='index.php'>Home</a>
									</li>
									
									<li class='nav-item'>
										<a class='nav-link' href='loginform.php'>login</a>
									</li>
                                        ";
                                    }
                                
                                ?>
								
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="col-lg-12">
						<h1>We Care for Your Health Every Moment</h1>
						<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price You may see some
							for as low as each.</p>
						<a class="main_btn mr-10" href="loginform.php">get started</a>
					</div>
				</div>
			</div>
		</div>
	</section>
    
    
    
    
    
    
    
    
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
      <h2>Login as</h2>
      
       <a class="main_btn mr-10" style="width:30%;text-align:center;margin-left:35%;" href="loginform.php?type=1">Admin</a><br>
      <a class="main_btn mr-10" style="width:30%;text-align:center;margin-left:35%;" href="loginform.php?type=0">Doctor</a>
    
  </div>

</div>
    
    
    
    
    
    
    
    
    
    
    
	<!--================ End Home Banner Area =================-->

	<!--================ End Procedure Category Area =================-->


	

	<!--================ Start Feedback Area =================-->
	<section class="feedback_area section_gap relative">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Enjoy our Client’s Feedback</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>

			<div class="feedback_contents justify-content-center align-items-center">
				<div class="active-review-carusel owl-carousel">
					<div class="row">
						<div class="col-lg-6">
							<img src="img/feedback-bg.jpg" alt="">
						</div>

						<div class="col-lg-6">
							<div class="single-feedback-carusel">
								<div class="d-flex flex-row">
									<h4 class="">Fannie Rowe</h4>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p class="">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
									find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<img src="img/feedback-bg.jpg" alt="">
						</div>

						<div class="col-lg-6">
							<div class="single-feedback-carusel">
								<div class="d-flex flex-row">
									<h4 class="">Fannie Rowe</h4>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p class="">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
									find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<img src="img/feedback-bg.jpg" alt="">
						</div>

						<div class="col-lg-6">
							<div class="single-feedback-carusel">
								<div class="d-flex flex-row">
									<h4 class="">Fannie Rowe</h4>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p class="">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
									find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<img src="img/feedback-bg.jpg" alt="">
						</div>

						<div class="col-lg-6">
							<div class="single-feedback-carusel">
								<div class="d-flex flex-row">
									<h4 class="">Fannie Rowe</h4>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p class="">
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
									find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Feedback Area =================-->

	<!--================ Start Offered Services Area =================-->
	<section class="service_area section_gap">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Our Offered Services</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-rocket"></span>
						<a href="#">
							<h4>24/7 Emergency</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-heart-pulse"></span>
						<a href="#">
							<h4>Expert Consultation</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-bug"></span>
						<a href="#">
							<h4>Intensive Care</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_service">
						<span class="lnr lnr-users"></span>
						<a href="#">
							<h4>Family Planning</h4>
						</a>
						<p>
							inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Offered Services Area =================-->


	<!--================ Start recent-blog Area =================-->
	<section class="recent-blog-area section_gap">
		<div class="container">
			<div class="row justify-content-center section-title-wrap">
				<div class="col-lg-12">
					<h1>Our Recent Blogs</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="single-recent-blog col-lg-4 col-md-4">
					<div class="thumb">
						<img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">
					</div>
					<a href="#">
						<h4>Portable Fashion for women</h4>
					</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud.
					</p>
					<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<span class="lnr lnr-calendar-full"></span> 13th Dec
							<span class="lnr lnr-heart"></span> 15
							<span class="lnr lnr-bubble"></span> 04
						</div>
					</div>
				</div>
				<div class="single-recent-blog col-lg-4 col-md-4">
					<div class="thumb">
						<img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">
					</div>
					<a href="#">
						<h4>Summer ware are coming</h4>
					</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud.
					</p>
					<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<span class="lnr lnr-calendar-full"></span> 13th Dec
							<span class="lnr lnr-heart"></span> 15
							<span class="lnr lnr-bubble"></span> 04
						</div>
					</div>
				</div>
				<div class="single-recent-blog col-lg-4 col-md-4">
					<div class="thumb">
						<img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">
					</div>
					<a href="#">
						<h4>Summer ware are coming</h4>
					</a>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud.
					</p>
					<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
						<div class="meta">
							<span class="lnr lnr-calendar-full"></span> 13th Dec
							<span class="lnr lnr-heart"></span> 15
							<span class="lnr lnr-bubble"></span> 04
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ end recent-blog Area =================-->

	<!--================ start footer Area =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2  col-md-6">
					<div class="single-footer-widget">
						<h6>Top Products</h6>
						<ul class="footer-nav">
							<li>
								<a href="#">Managed Website</a>
							</li>
							<li>
								<a href="#">Manage Reputation</a>
							</li>
							<li>
								<a href="#">Power Tools</a>
							</li>
							<li>
								<a href="#">Marketing Service</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4  col-md-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Contact Us</h6>
						<p>
							Assuti - Egypt
						</p>
						<h3>012-6532-568-9746</h3>
						<h3>012-6532-568-97468</h3>
					</div>
				</div>
				<div class="col-lg-6  col-md-12">
					<div class="single-footer-widget newsletter">
						<h6>Newsletter</h6>
						<p>You can trust us. we only send promo offers, not a single spam.</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="" method="get" class="form-inline">

								<div class="form-group row">
									<div class="col-lg-7 col-md-6 col-sm-12">
										<input name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
										 required="" type="email">
									</div>

									<div class="col-lg-5 col-md-12">
										<button class="nw-btn main_btn circle">get started
											<span class="lnr lnr-arrow-right"></span>
										</button>
									</div>
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">IPT</a>
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fa fa-dribbble"></i>
					</a>
					<a href="#">
						<i class="fa fa-behance"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area =================-->



	<!--================ Optional JavaScript =================-->
	<!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/custom.js"></script>
        <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyAgbdtewkbcB4etdY0eht-5eNKjGifzuCg",
    authDomain: "heart-tracker-732f8.firebaseapp.com",
    databaseURL: "https://heart-tracker-732f8.firebaseio.com",
    projectId: "heart-tracker-732f8",
    storageBucket: "heart-tracker-732f8.appspot.com",
    messagingSenderId: "1014594336763",
    appId: "1:1014594336763:web:859308c01a8fb4d5"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>

</body>

</html>