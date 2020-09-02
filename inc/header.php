<header id="header" id="home" style="">
	<div class="fixed-top" style="background-color:black;height:25px;overflow:hidden;">
		<div class="container">
			<div class="row">
			<div class="col-md-4">
				<h5>
					<b  style="color:white;">Tel:</b> 
					<span style="color:#97c03a;">0788239593</span>
				</h5>
			</div>			
			<div class="col-md-4">
				<div class="uren-social_link">
					<ul>
						<li class="facebook">
							<a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
								<i class="fab fa-facebook"></i>
							</a>
						</li>
						<li class="twitter">
							<a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
								<i class="fab fa-twitter-square"></i>
							</a>
						</li>
						<li class="youtube">
							<a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
								<i class="fab fa-youtube"></i>
							</a>
						</li>
						<li class="google-plus">
							<a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
								<i class="fab fa-google-plus"></i>
							</a>
						</li>
						<li class="instagram">
							<a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="Instagram">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<h5>
					<b  style="color:white;">Email:</b> 
					<span style="color:#97c03a;">kivurarwanda@gmail.com</span>
				</h5>
			</div>
			</div>
		</div>&nbsp;&nbsp;
	</div>&nbsp;
	<div class="container">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="index?home=1"><img src="img/logo.png" alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li  <?php if (isset($_GET['home'])) { echo "class='menu-active'";}?>><a <?php if (isset($_GET['home'])) { echo "class='active'";}?> href="index?home=1">Home</a></li>
					<li  <?php if (isset($_GET['about'])) { echo "class='menu-active'";}else{}?>><a <?php if (isset($_GET['about'])) { echo "class='active'";}?> href="about?about=1">About</a></li>
					<li class="menu-has-children"><a href="">Cars</a>
					<ul>
						<li <?php if (isset($_GET['forRent'])) { echo "class='active'";}?>><a <?php if (isset($_GET['forRent'])) { echo "class='active'";}?> href="cars_for_rent?forRent=1">For rent</a></li>
						<li <?php if (isset($_GET['forSale'])) { echo "class='active'";}?>><a <?php if (isset($_GET['forSale'])) { echo "class='active'";}?> href="cars_for_sale?forSale=1">For sale</a></li>
					</ul>
					</li>	

					<li class="menu-has-children"><a href="">Apartments</a>
					<ul>
						<li><a href="">For rent</a></li>
						<li><a href="">For sale</a></li>
					</ul>
					</li>
					<!-- <li <?php //if (isset($_GET['tourPackages'])) { echo "class='active'";}?>><a <?php //if (isset($_GET['tourPackages'])) { echo "class='active'";}?> href="tour_packages?tourPackages=1">Tour Packages</a></li>	 -->
					<li <?php if (isset($_GET['others'])) { echo "class='active'";}?>><a <?php if (isset($_GET['others'])) { echo "class='active'";}?> href="other?others=1">Other services</a></li>
					<li <?php if (isset($_GET['airPort'])) { echo "class='active'";}?>><a <?php if (isset($_GET['airPort'])) { echo "class='active'";}?> href="airport_pickup?airPort=1">Airport pickup</a></li>	
					
					<li <?php if (isset($_GET['contact'])) { echo "class='active'";}?>><a <?php if (isset($_GET['contact'])) { echo "class='active'";}?> href="contact?contact=1">Contact</a></li>	
										
				</ul>
			</nav><!-- #nav-menu-container -->		    		
		</div>
	</div>
</header><!-- #header -->