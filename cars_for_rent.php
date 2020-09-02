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
		<title>Uratengamaye Kivu | Cars for rent</title>

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
			<!-- Main style CSS -->
			<link rel="stylesheet" type="text/css" href="css/list.css" media="all" />
			<link rel="stylesheet" href="css/main.css">
			
			<link href="font/css/all.css" rel="stylesheet"> 
			<link rel="stylesheet" type="text/css" href="css/icofont.min.css" media="all" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
		
		
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		<!-- Social medias -->
		<link rel="stylesheet" href="assets/css/social.css">
	</head>
<body>
	<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title"></h4>
		      </div>
		      <div class="modal-body">
		        <p>Some text in the modal.</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
	</div>
	<?php require_once("inc/header.php") ?>
		<section class="banner-area relative" id="home" style="background: url(img/test/45.jpg) center;
  			background-size: cover;">	
				<div class="overlay overlay-bg1"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Cars Hire				
							</h1>	
							<p class="text-white link-nav"><a href="index">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="cars_for_rent"> Cars hire</a></p>
						</div>											
					</div>
				</div>
		</section>
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<body>
		<section class="feature-area section-gap" id="service">
			<div class="row d-flex justify-content-center">
						<div class="menu-content pb- col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">All cars for rent </h1>
								
							</div>
						</div>
					</div>
	<div class="container">

		<div class="card">
			
			<ul class="nav nav-tabs" role="tablist" >
				<li class="nav-item">
					<a href="#menu0" class="nav-link active" data-toggle='pill'>Premium cars</a>
				</li>
				<li class="nav-item">
					<a href="#menu1" class="nav-link" data-toggle='pill'>Large cars</a>
				</li>
				<li class="nav-item">
					<a href="#menu2" class="nav-link" data-toggle='pill'>Medium cars</a>
				</li>

				<li class="nav-item">
					<a href="#menu3" class="nav-link" data-toggle='pill'>Small cars</a>
				</li>

				<li class="nav-item">
					<a href="#menu4" class="nav-link" data-toggle='pill'>Vans & Trucks</a>
				</li>
			</ul>

			<div class="tab-content">
				<div id="menu0" class="container tab-pane active">
					<div class="card-body">
					<h3>Premium cars</h3>

					<div class="row">
						<?php 
							$preQuery = mysqli_query($conn,"SELECT *FROM car_rent WHERE carType='Premium' ORDER BY carId DESC") or die(mysqli_error($conn));
							if(mysqli_num_rows($preQuery)>0){
								while ($rowPre = mysqli_fetch_array($preQuery)) {
									?>
										<div class="col-lg-4 col-md-6">
											<div class="single-feature1">
												<div class="feature-image">
													<img src="admin/media/imagesRent/<?= $rowPre['thumbnail']?>" alt="Land Cruiser">
													<div class="feature-overlay">
														<div class="display-table">
															<div class="display-tablecell">
																<a  href="car_details"><i class="icofont-car"></i></a>
																<a href="car_details?ids=<?= $rowPre['carId'];?>"><i title="Book this car" class="icofont icofont-link"></i></a>
															</div>

														</div>
													</div>
												</div>
												<div class="feature-middle">
														<span><i class="icofont icofont-company"></i><?= $rowPre['carTransimission']?></span>
														<span><i class="icofont icofont-glue-oil"></i><?= $rowPre['kmPerLitre']?> KM/L</span>
														<span><i class="icofont icofont-paper-plane"></i><?= $rowPre['carSeats']?> Seats</span>
														<span><i class="icofont icofont-energy-water"></i><?= $rowPre['carAirCondition']?></span>
														<span><i class="icofont icofont-dollar"></i>From <?= $rowPre['carPrice']?></i>$</span>
													<!-- <label class="text-danger text-uppercase text-bold text-center">Available </label> -->
												</div>
												<div class="feature-bottom text-uppercase">
													<h5><?= $rowPre['carName']?><a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse<?= $rowPre['carId']?>" role="button" aria-expanded="false" aria-controls="collapseExample">
														<i class="icofont-plus-circle"></i>
														</a></h5>
													<div class="collapse" id="collapse<?= $rowPre['carId']?>">
														<div class="card card-body">
															<?= $rowPre['carDesc']?></i>
														</div>
													</div>	
												</div>
											</div>
										</div>
									<?php
								}
							}
						?>
					</div>
					</div>
				</div>

				<div id="menu1" class="container tab-pane fade">
					<div class="card-body">
						<h3>Large cars</h3>
						<div class="row">
							<?php 
								$preQuery = mysqli_query($conn,"SELECT *FROM car_rent WHERE carType='Large'  ORDER BY carId DESC") or die(mysqli_error($conn));
								if(mysqli_num_rows($preQuery)>0){
									while ($rowPre = mysqli_fetch_array($preQuery)) {
										?>
											<div class="col-lg-4 col-md-6">
												<div class="single-feature1">
													<div class="feature-image">
														<img src="admin/media/imagesRent/<?= $rowPre['thumbnail']?>" alt="Land Cruiser">
														<div class="feature-overlay">
															<div class="display-table">
																<div class="display-tablecell">
																	<a  href="car_details"><i class="icofont-car"></i></a>
																	<a href="car_details?ids=<?= $rowPre['carId'];?>"><i title="Book this car" class="icofont icofont-link"></i></a>
																</div>

															</div>
														</div>
													</div>
													<div class="feature-middle">
														<span><i class="icofont icofont-company"></i><?= $rowPre['carTransimission']?></span>
														<span><i class="icofont icofont-glue-oil"></i><?= $rowPre['kmPerLitre']?> KM/L</span>
														<span><i class="icofont icofont-paper-plane"></i><?= $rowPre['carSeats']?> Seats</span>
														<span><i class="icofont icofont-energy-water"></i><?= $rowPre['carAirCondition']?></span>
														<span><i class="icofont icofont-dollar"></i>From <?= $rowPre['carPrice']?></i>$</span>
														<!-- <label class="text-danger text-uppercase text-bold text-center">Available </label> -->
													</div>
													<div class="feature-bottom text-uppercase">
														<h5><?= $rowPre['carName']?><a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse<?= $rowPre['carId']?>" role="button" aria-expanded="false" aria-controls="collapseExample">
															<i class="icofont-plus-circle"></i>
															</a></h5>
														<div class="collapse" id="collapse<?= $rowPre['carId']?>">
															<div class="card card-body">
																<?= $rowPre['carDesc']?></i>
															</div>
														</div>	
													</div>
												</div>
											</div>
										<?php
									}
								}
							?>
						</div>
					</div>
				</div>

				<div id="menu2" class="container tab-pane fade">
					<div class="card-body">
						<h3>Medium cars</h3>
						<div class="row">
						<?php 
							$preQuery = mysqli_query($conn,"SELECT *FROM car_rent WHERE carType='Medium' ORDER BY carId DESC") or die(mysqli_error($conn));
							if(mysqli_num_rows($preQuery)>0){
								while ($rowPre = mysqli_fetch_array($preQuery)) {
									?>
										<div class="col-lg-4 col-md-6">
											<div class="single-feature1">
												<div class="feature-image">
													<img src="admin/media/imagesRent/<?= $rowPre['thumbnail']?>" alt="Land Cruiser">
													<div class="feature-overlay">
														<div class="display-table">
															<div class="display-tablecell">
																<a  href="car_details"><i class="icofont-car"></i></a>
																<a href="car_details?ids=<?= $rowPre['carId'];?>"><i title="Book this car" class="icofont icofont-link"></i></a>
															</div>

														</div>
													</div>
												</div>
												<div class="feature-middle">
														<span><i class="icofont icofont-company"></i><?= $rowPre['carTransimission']?></span>
														<span><i class="icofont icofont-glue-oil"></i><?= $rowPre['kmPerLitre']?> KM/L</span>
														<span><i class="icofont icofont-paper-plane"></i><?= $rowPre['carSeats']?> Seats</span>
														<span><i class="icofont icofont-energy-water"></i><?= $rowPre['carAirCondition']?></span>
														<span><i class="icofont icofont-dollar"></i>From <?= $rowPre['carPrice']?></i>$</span>
													<!-- <label class="text-danger text-uppercase text-bold text-center">Available </label> -->
												</div>
												<div class="feature-bottom text-uppercase">
													<h5><?= $rowPre['carName']?><a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse<?= $rowPre['carId']?>" role="button" aria-expanded="false" aria-controls="collapseExample">
														<i class="icofont-plus-circle"></i>
														</a></h5>
													<div class="collapse" id="collapse<?= $rowPre['carId']?>">
														<div class="card card-body">
															<?= $rowPre['carDesc']?></i>
														</div>
													</div>	
												</div>
											</div>
										</div>
									<?php
								}
							}
						?>
					</div>
					</div>
				</div>

				<div id="menu3" class="container tab-pane fade">
					<div class="card-body">
						<h3>Small cars</h3>
						<div class="row">
							<?php 
								$preQuery = mysqli_query($conn,"SELECT *FROM car_rent WHERE carType='small' ORDER BY carId DESC") or die(mysqli_error($conn));
								if(mysqli_num_rows($preQuery)>0){
									while ($rowPre = mysqli_fetch_array($preQuery)) {
										?>
											<div class="col-lg-4 col-md-6">
												<div class="single-feature1">
													<div class="feature-image">
														<img src="admin/media/imagesRent/<?= $rowPre['thumbnail']?>" alt="Land Cruiser">
														<div class="feature-overlay">
															<div class="display-table">
																<div class="display-tablecell">
																	<a  href="car_details"><i class="icofont-car"></i></a>
																	<a href="car_details?ids=<?= $rowPre['carId'];?>"><i title="Book this car" class="icofont icofont-link"></i></a>
																</div>

															</div>
														</div>
													</div>
													<div class="feature-middle">
														<span><i class="icofont icofont-company"></i><?= $rowPre['carTransimission']?></span>
														<span><i class="icofont icofont-glue-oil"></i><?= $rowPre['kmPerLitre']?> KM/L</span>
														<span><i class="icofont icofont-paper-plane"></i><?= $rowPre['carSeats']?> Seats</span>
														<span><i class="icofont icofont-energy-water"></i><?= $rowPre['carAirCondition']?></span>
														<span><i class="icofont icofont-dollar"></i>From <b><?= $rowPre['carPrice']?></i></b>$</span>
														<!-- <label class="text-danger text-uppercase text-bold text-center">Available </label> -->
													</div>
													<div class="feature-bottom text-uppercase">
														<h5><?= $rowPre['carName']?><a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse<?= $rowPre['carId']?>" role="button" aria-expanded="false" aria-controls="collapseExample">
															<i class="icofont-plus-circle"></i>
															</a></h5>
														<div class="collapse" id="collapse<?= $rowPre['carId']?>">
															<div class="card card-body">
																<?= $rowPre['carDesc']?></i>
															</div>
														</div>	
													</div>
												</div>
											</div>
										<?php
									}
								}
							?>
						</div>
					</div>
				</div>
				
				<div id="menu4" class="container tab-pane fade">
					<div class="card-body">
						<h3>VANS AND TRUCKS</h3>
						<div class="row">
							<?php 
								$preQuery = mysqli_query($conn,"SELECT *FROM car_rent WHERE carType='Vans And Trucks' ORDER BY carId DESC") or die(mysqli_error($conn));
								if(mysqli_num_rows($preQuery)>0){
									while ($rowPre = mysqli_fetch_array($preQuery)) {
										?>
											<div class="col-lg-4 col-md-6">
												<div class="single-feature1">
													<div class="feature-image">
														<img src="admin/media/imagesRent/<?= $rowPre['thumbnail']?>" alt="Land Cruiser">
														<div class="feature-overlay">
															<div class="display-table">
																<div class="display-tablecell">
																	<a  href="car_details"><i class="icofont-car"></i></a>
																	<a href="car_details?ids=<?= $rowPre['carId'];?>"><i title="Book this car" class="icofont icofont-link"></i></a>
																</div>

															</div>
														</div>
													</div>
													<div class="feature-middle">
														<span><i class="icofont icofont-company"></i><?= $rowPre['carTransimission']?></span>
														<span><i class="icofont icofont-glue-oil"></i><?= $rowPre['kmPerLitre']?> KM/L</span>
														<span><i class="icofont icofont-paper-plane"></i><?= $rowPre['carSeats']?> Seats</span>
														<span><i class="icofont icofont-energy-water"></i><?= $rowPre['carAirCondition']?></span>
														<span><i class="icofont icofont-dollar"></i>From <b><?= $rowPre['carPrice']?></i></b>$</span>
														<!-- <label class="text-danger text-uppercase text-bold text-center">Available </label> -->
													</div>
													<div class="feature-bottom text-uppercase">
														<h5><?= $rowPre['carName']?><a style="text-decoration: none;color: grey;" data-toggle="collapse" href="#collapse<?= $rowPre['carId']?>" role="button" aria-expanded="false" aria-controls="collapseExample">
															<i class="icofont-plus-circle"></i>
															</a></h5>
														<div class="collapse" id="collapse<?= $rowPre['carId']?>">
															<div class="card card-body">
																<?= $rowPre['carDesc']?></i>
															</div>
														</div>	
													</div>
												</div>
											</div>
										<?php
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	</section>

	</body>

<!-- service110:28  -->
</html>
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