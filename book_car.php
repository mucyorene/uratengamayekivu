	<?php require_once("admin/includes/db.php");?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Uratengamaye Ltd">
		<!-- Meta Description -->
		<meta name="description" content="We are experts in car-rent & sales, and apartments for rent based in Rwanda">
		<!-- Meta Keyword -->
		<meta name="keywords" content="uratengamayekivu, uratengamaye, uratengamaye Kivu">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Uratengamaye Kivu | Home" />
		<meta property="og:url" content="https://uratengamayekivu.com/" />
		<meta property="og:site_name" content="Uratengamaye Kivu" />


		<!-- Site Title -->
		<title>Uratengamaye Kivu | About</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">

			
	</head>
		<body>
			<?php require_once("inc/header.php")?>
			<!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home" style="background: url(img/test/45.jpg) center;
  				background-size: cover;">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Car booking				
							</h1>	
							<p class="text-white link-nav"><a href="index">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about"> About Us</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service" style="background: url('img/test/.jpg');">
				<div class="container">
					<div class="row alig d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Car booking info request</h1>
							<p>
								Kindly, enter your info so that we can reach you easily
							</p>
						</div>
					<!-- </div> -->
					<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Car booking !</h4>
							<form class="form" role="form" autocomplete="off" method="POST">
							    <div class="form-group">
							       	You selected	
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select">
											<select name="noRentCars">
												<option value="" disabled selected hidden>Pickup</option>
												<option value="Pickup One">Pickup One</option>
												<option value="Pickup Two">Pickup Two</option>
												<option value="Pickup Three">Pickup Three</option>
												<option value="Pickup Four">Pickup Four</option>
											</select>
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                          
											<input id="datepicker" name="dateToPick" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>
							    <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select">
											<select name="dropOffs">
												<option value="" disabled selected hidden>Drop off</option>
												<option value="Drop off One">Drop off One</option>
												<option value="Drop off Two">Drop off Two</option>
												<option value="Drop off Three">Drop off Three</option>
												<option value="Drop off Four">Drop off Four</option>
											</select>
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                              
											<input id="datepicker2" name="dateOfDropOff" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>							    
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="name" placeholder="Your name">
							    	<input class="form-control txt-field" type="email" name="email" placeholder="Email address">
							    	<input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number">
							    	<input class="form-control txt-field" type="text" name="streetNumber" placeholder="Street number">
							    </div>
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="type" name="saveCarRentBooking" class="btn btn-primary btn-block text-center text-uppercase">Confirm Car Booking</button>
							        </div>
							    </div>
							</form>
						</div>	
					</div>
					<?php
						if (isset($_POST['saveCarRentBooking'])) {
							$a = mysqli_real_escape_string($conn,$_POST['noRentCars']);
							$b = mysqli_real_escape_string($conn,$_POST['dateToPick']);
							$c = mysqli_real_escape_string($conn,$_POST['dropOffs']);
							$d = mysqli_real_escape_string($conn,$_POST['dateOfDropOff']);
							$e = mysqli_real_escape_string($conn,$_POST['name']);
							$f = mysqli_real_escape_string($conn,$_POST['email']);
							$g = mysqli_real_escape_string($conn,$_POST['phone']);
							$h = mysqli_real_escape_string($conn,$_POST['streetNumber']);
							$i = "#".$d.$g.$b;

							$ch = mysqli_query($conn,"SELECT *FROM carrentbookings WHERE bookingCode='$i'") or die(mysqli_error($conn));
							if (mysqli_num_rows($ch)>0) {
								echo "<script>alert('This booking already booked')</script>";
								# code...
							}else{
								$saving = mysqli_query($conn,"INSERT INTO carrentbookings (id,numberOfCars,datePickedUp,numberOfDropOffs,
								dateReturned,names,email,phoneNumber,streetNumber,bookingCode) VALUES ('','$a','$b','$c','$d','$e','$f',
								'$g','$h','$i')") or die(mysqli_error($conn));
								if ($saving) {
									echo "<script>alert('Thank you for booking your booking code is".$i."');
									window.top.location='book_car.php';
									</script>";
									# code...
								}
							}

						}
					?>
				</div>	
			</section>
			<!-- End feature Area -->
			<!-- start footer Area -->		
			<?php require_once("inc/footer.php");?>	
			<!-- End footer Area -->			

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
