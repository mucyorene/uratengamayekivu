<?php
	require_once("admin/includes/db.php");
?>
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
		<title>Uratengamaye Kivu | Home</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/list.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/icofont.min.css" media="all" />
		<!-- Social medias -->
		<link rel="stylesheet" href="assets/css/social.css">
		<link href="font/css/all.css" rel="stylesheet"> 
</head>
<body>
	<?php require_once("inc/header.php");?>
	<!-- start banner Area -->
	<section class="banner-area relative" id="home" style="background: url(img/test/30.jpg) center;background-size:center;">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-7 col-md-6 ">
					<h6 class="text-white ">Welcome to the best dealer in car rent, apartment for rent and tour packages</h6>
					<h1 class="text-white text-uppercase">
						URATENGAMAYE KIVU					
					</h1>
					<p class="pt-20 pb-20 text-white">
						THE POWER OF DREAMS
					</p>
					<a href="#cars" class="primary-btn text-uppercase">RENT CAR NOW NOW</a> <br><br>
					<a href="#apartments" class="primary-btn text-uppercase">RENT APARTMENT NOW</a>
				</div>

				<div class="col-lg-5  col-md-6 header-right">
					<h4 class="text-white pb-30">Airport Taxi Services!</h4>
					<form class="form" role="form" autocomplete="off" method="POST">
						<div class="form-group">
							<div class="default-select" id="default-select">
								<select name="carId">
									<option value="" disabled selected hidden>Select Your Car</option>
									<?php
										$select = mysqli_query($conn,"SELECT *FROM car_rent") or die(mysqli_error($conn));
										if (mysqli_num_rows($select)>0) {
											while ($row = mysqli_fetch_array($select)) {
												echo "<option value='".$row['carId']."'>".$row['carName']."</option>";
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="default-select" id="default-select">
								<select name="drivingType">
									<option value="" disabled selected hidden>Self drive?</option>
									<option value="yes">YES</option>
									<option value="no">NO</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6 wrap-left">
								<div class="default-select" id="default-select">
									<select name="noPickups">
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
									<input id="datepicker" class="dates form-control" id="exampleAmount" name="pickupDate" placeholder="Date & time" type="text">                        
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
						</div>
						<div class="form-group row">
							<div class="col-md-12">
								<button type="submit" name="saveAirportBookings" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirm Car Booking</button>
							</div>
						</div>
					</form>
				</div>
	<?php
		if (isset($_POST['saveAirportBookings'])) {
			$a = mysqli_real_escape_string($conn,$_POST['carId']);
			$b = mysqli_real_escape_string($conn,$_POST['drivingType']);
			$c = mysqli_real_escape_string($conn,$_POST['noPickups']);
			$d = mysqli_real_escape_string($conn,$_POST['pickupDate']);
			$e = mysqli_real_escape_string($conn,$_POST['name']);
			$f = mysqli_real_escape_string($conn,$_POST['email']);
			$g = mysqli_real_escape_string($conn,$_POST['phone']);
			$h = "#".$a.$g.$d;
			$ch = mysqli_query($conn,"SELECT *FROM airportservices WHERE bookingNumber='$h'") or die(mysqli_error($conn));
			 if (mysqli_num_rows($ch)>0) {
				echo "<script>alert('This booking already done')</script>";
			 }else{
					$saveAirPBookings = mysqli_query($conn,"INSERT INTO airportservices 
				(id,carId,driveType,numberOfpickups,picDate,names,email,phoneNumber,bookingNumber) VALUES
				('','$a','$b','$c','$d','$e','$f','$g','$h')") or die(mysqli_error($conn));
				if ($saveAirPBookings) {
					echo "<script>alert('Thank you for booking your booking codes is: ".$h."')</script>";
					# code...
				}
			 }
		}
	?>
			</div>
		</div>					
	</section>
	<!-- End banner Area -->

			<section class="blog-area section-gap" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb- col-lg-12">
							<div class="title text-center">
								<h1 class="mb-10">Available cars for rent </h1>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-body">
							<div class="row">
								<?php
									$query = mysqli_query($conn,"SELECT *FROM car_rent ORDER BY carId DESC limit 3") or die(mysqli_error($conn));
									if (mysqli_num_rows($query)>0) {
										$a = 1;
										while ($row = mysqli_fetch_array($query)) {
										?>
											<div class="col-lg-4 col-md-6">
												<div class="single-feature1">
													<div class="feature-image">
													<img src="admin/media/imagesRent/<?php echo $row['thumbnail'];?>" alt="corolla_altis">
														<div class="feature-overlay">
															<div class="display-table">
																<div class="display-tablecell">
																<a  href="car_details"><i class="icofont-car"></i></a>
																<a href="car_details?ids=<?php echo $row['carId']?>"><i title="Book this car" class="icofont icofont-link"></i></a>
																</div>

															</div>
														</div>
													</div>
													<div class="feature-middle">
														<span><i class="icofont icofont-company"></i><?= $row['carTransimission']?></span>
														<span><i class="icofont icofont-glue-oil"></i><?= $row['kmPerLitre']?> KM/L</span>
														<span><i class="icofont icofont-paper-plane"></i><?= $row['carSeats']?> Seats</span>
														<span><i class="icofont icofont-energy-water"></i><?= $row['carAirCondition']?></span>
														<span><i class="icofont icofont-dollar"></i>From <?= $row['carPrice']?></i>$</span>
													</div>
													<div class="feature-bottom">
														<h5><?= $row['carName']?><a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse<?= $row['carId']?>" role="button" aria-expanded="false" aria-controls="collapseExample">
															<i class="icofont-plus-circle"></i>
														</a></h5>
														<div class="collapse" id="collapse<?= $row['carId']?>">
														<div class="card card-body">
															<?php echo $row['carDesc'];?>
														</div>
														</div>	
													</div>
												</div>
											</div>
										<?php
										$a++;}
									}
								?>
								<!-- <div class="col-lg-4 col-md-6">
									<div class="single-feature1">
										<div class="feature-image">
										<img src="uploads/land_cruiser_v8/1.jpg" alt="Land Cruiser">
											<div class="feature-overlay">
												<div class="display-table">
													<div class="display-tablecell">
													<a  href="car_details"><i class="icofont-car"></i></a>
													<a href="car_details"><i title="Book this car" class="icofont icofont-link"></i></a>
													</div>

												</div>
											</div>
										</div>
										<div class="feature-middle">
										<span><i class="icofont-car"></i>30,000</span>
										<span><i class="icofont icofont-glue-oil"></i>20kmpl</span>
										<span><i class="icofont icofont-company"></i>Automatic</span>
										<span><i class="icofont icofont-paper-plane"></i>Model: 2018</span>
										<span><i class="icofont icofont-energy-water"></i>27hp</span>
										<span><i class="icofont icofont-dollar"></i>From 27.368</span>
										
										</div>
										<div class="feature-bottom text-uppercase">
											<h5>land cruiser v8<a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapseExample">
												<i class="icofont-plus-circle"></i>
											</a></h5>
											
											
											
											<div class="collapse" id="collapse4">
											<div class="card card-body">
											This car has got a very high speed rate and oill consuming is not huge
											</div>
											</div>	
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6">
									<div class="single-feature1">
										<div class="feature-image">
										<img src="uploads/txl/2.jpg" alt="TXL">
											<div class="feature-overlay">
												<div class="display-table">
													<div class="display-tablecell">
													<a  href="car_details"><i class="icofont-car"></i></a>
													<a href="car_details"><i title="Book this car" class="icofont icofont-link"></i></a>
													</div>

												</div>
											</div>
										</div>
										<div class="feature-middle">
										<span><i class="icofont-car"></i>30,000</span>
										<span><i class="icofont icofont-glue-oil"></i>20kmpl</span>
										<span><i class="icofont icofont-company"></i>Automatic</span>
										<span><i class="icofont icofont-paper-plane"></i>Model: 2018</span>
										<span><i class="icofont icofont-energy-water"></i>27hp</span>
										<span><i class="icofont icofont-dollar"></i>From 27.368</span>
										
										</div>
										<div class="feature-bottom">
											<h5>TXL<a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapseExample">
												<i class="icofont-plus-circle"></i>
											</a></h5>
											
											
											
											<div class="collapse" id="collapse5">
											<div class="card card-body">
											This car has got a very high speed rate and oill consuming is not huge
											</div>
											</div>	
										</div>
									</div>
								</div> -->
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6"></div>
										<div class="col-md-6">
											<h4><a href="cars_for_rent?forRent=1">--More--</a></h4>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>	
			</section>
			<section class="blog-area section-gap" id="cars2">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb- col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Available cars for sale </h1>
								<p>These are some of available cars for sale, choose your desired one and send us your booking, we will directly get to you !</p>
							</div>
						</div>
					</div>				
					<div class="row">
					
							<div class="col-lg-4 col-md-6">
								<div class="single-feature1">
									<div class="feature-image">
									   	<img src="uploads/RAV4_2004_black/5.jpg" alt="TXL">
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a  href="car_details"><i class="icofont-car"></i></a>
												   <a href="car_details"><i title="Book this car" class="icofont icofont-link"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="feature-middle">
									   <span><i class="icofont-car"></i>30,000</span>
									   <span><i class="icofont icofont-glue-oil"></i>20kmpl</span>
									   <span><i class="icofont icofont-company"></i>Automatic</span>
									   <span><i class="icofont icofont-paper-plane"></i>Model: 2018</span>
									   <span><i class="icofont icofont-energy-water"></i>27hp</span>
									   <span><i class="icofont icofont-dollar"></i>From 27.368</span>  
									</div>
									<div class="feature-bottom">
										<h5>RAV4 2004 BLACK<a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
										    <i class="icofont-plus-circle"></i>
										  </a></h5>
										<div class="collapse" id="collapse3">
										  <div class="card card-body">
										   This car has got a very high speed rate and oill consuming is not huge
										  </div>
										</div>	
									</div>
							</div>
							<!-- </div> -->
							<!-- <div class="col-lg-4 col-md-6">
								<div class="single-feature1">
									<div class="feature-image">
									   <img src="uploads/RAV4_2006_KAKI/1.jpg" alt="RAV4_2004_SILVER">
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a  href="car_details"><i class="icofont-car"></i></a>
												   <a href="car_details"><i title="Book this car" class="icofont icofont-link"></i></a>
												</div>

											</div>
										</div>
									</div>
									<div class="feature-middle">
									   <span><i class="icofont-car"></i>30,000</span>
									   <span><i class="icofont icofont-glue-oil"></i>20kmpl</span>
									   <span><i class="icofont icofont-company"></i>Automatic</span>
									   <span><i class="icofont icofont-paper-plane"></i>Model: 2018</span>
									   <span><i class="icofont icofont-energy-water"></i>27hp</span>
									   <span><i class="icofont icofont-dollar"></i>From 27.368</span>
									   
									</div>
									<div class="feature-bottom">
										<h5>RAV4 2006 KAKI<a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse6" role="button" aria-expanded="false" aria-controls="collapseExample">
										    <i class="icofont-plus-circle"></i>
										  </a></h5>
										
										  
										
										<div class="collapse" id="collapse6">
										  <div class="card card-body">
										   This car has got a very high speed rate and oill consuming is not huge
										  </div>
										</div>	
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6">
								<div class="single-feature1">
									<div class="feature-image">
									   <img src="uploads/corolla_altis/1.jpg" alt="corolla_altis">
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a  href="car_details"><i class="icofont-car"></i></a>
												   <a href="car_details"><i title="Book this car" class="icofont icofont-link"></i></a>
												</div>

											</div>
										</div>
									</div>
									<div class="feature-middle">
									   <span><i class="icofont-car"></i>30,000</span>
									   <span><i class="icofont icofont-glue-oil"></i>20kmpl</span>
									   <span><i class="icofont icofont-company"></i>Automatic</span>
									   <span><i class="icofont icofont-paper-plane"></i>Model: 2018</span>
									   <span><i class="icofont icofont-energy-water"></i>27hp</span>
									   <span><i class="icofont icofont-dollar"></i>From 27.368</span>
									   
									</div>
									<div class="feature-bottom">
										<h5>COROLLA ALTIS<a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse7" role="button" aria-expanded="false" aria-controls="collapseExample">
										    <i class="icofont-plus-circle"></i>
										  </a></h5>
										
										  
										
										<div class="collapse" id="collapse7">
										  <div class="card card-body">
										   This car has got a very high speed rate and oill consuming is not huge
										  </div>
										</div>	
									</div>
								</div>
							</div> -->
					</div>
				</div>	
			</section>


			<!-- Start home-about Area -->
			<section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="img/test/44.jpg" alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>We also rent and sell <br>
							houses and apartments</h1>
							<p>
								<span>We are here for you!</span>
							</p>
							<p>
								If you are looking for well-located-apartments for rent in Rwanda, hire us and let us provide the best we have.
							</p>
							<a class="text-uppercase primary-btn" href="">get details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	
			<section class="blog-area section-gap" id="apartments">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb- col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Available Apartments for rent </h1>
								<p>These are some of available apartments for cars_rent, choose your desired one and send us your booking, we will directly get to you !</p>
							</div>
						</div>
					</div>					
					<div class="row">
					
						<div class="col-lg-4 col-md-6">
								<div class="single-feature1">
									<div class="feature-image">
									   <img src="apartments/1.jpg" alt="corolla_altis">
										<div class="feature-overlay">
											<div class="display-table">
												<div class="display-tablecell">
												   <a  href="car_details"><i class="icofont-car"></i></a>
												   <a href="car_details"><i title="Book this car" class="icofont icofont-link"></i></a>
												</div>

											</div>
										</div>
									</div>
									<div class="feature-middle">
									   <span><i class="icofont-company"></i>30,000</span>
									   <span><i class="icofont icofont-glue-oil"></i>20kmpl</span>
									   <span><i class="icofont icofont-company"></i>Gisozi</span>
									   
									   <span><i class="icofont icofont-energy-water"></i>27hp</span>
									   <span><i class="icofont icofont-dollar"></i>From 27.368</span>
									   
									</div>
									<div class="feature-bottom">
										<h5>HOUSE AT GISOZI<a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse8" role="button" aria-expanded="false" aria-controls="collapseExample">
										    <i class="icofont-plus-circle"></i>
										  </a></h5>
										
										  
										
										<div class="collapse" id="collapse8">
										  <div class="card card-body">
										   This car has got a very high speed rate and oill consuming is not huge
										  </div>
										</div>	
									</div>
								</div>
							</div>							
					</div>
				</div>	
			</section>


		
					

			

			


			<!-- Start fact Area -->
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">
					<div class="row">
						<div class="col single-fact">
							<h1 class="counter">13</h1>
							<p>Cars available</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">4</h1>
							<p>Apartments available</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">159</h1>
							<p>Total Tasks Completed</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">4</h1>
							<p>Team members</p>
						</div>	
						<div class="col single-fact">
							<h1 class="counter">5</h1>
							<p>In House Professionals</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->
						<!-- Start callaction Area -->
			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Customer Testimonials</h1>
							<p>
								Appreciations and ideas from our beloved clients about offered services
							</p>
							<!-- <a class="callaction-btn text-uppercase" href="#">View all available cars for you</a> -->
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="testimonial">
										<h4>Manzi Brian</h4>
										
										<p>
											I bought a TXL car with you guys in 2019, and till now the car is still awesome as before and price was not overshaming.
										</p>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6">
									<div class="testimonial">
										<h4>Rukundo Yves</h4>
										<p>
											I bought a TXL car with you guys in 2019, and till now the car is still awesome as before and price was not overshaming.
										</p>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
								</div>


								<div class="col-lg-4 col-md-6">
									<div class="testimonial">
										<h4>Chad Herrera</h4>
										<p>
											I bought a TXL car with you guys in 2019, and till now the car is still awesome as before and price was not overshaming.
										</p>
										<div class="star">
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>	
			</section>
			<!-- End callaction Area -->

			<!-- start footer Area -->		
				<?php
					require_once("inc/footer.php");
				?>
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



<script type="text/javascript">
	 $('#datepicker2'). datetimepicker({ minDate: new Date() });
</script>