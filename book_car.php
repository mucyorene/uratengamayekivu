<?php
    require_once("admin/includes/db.php");
    if (empty($_GET['idSent'])) {
       echo "<script>window.top.location = 'cars_for_rent.php';</script>";
    }
    $id = $_GET['idSent'];
?>
<!doctype html>
<html class="no-js" lang="zxx">

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
        <title>Uratengamaye Kivu | Car details</title>


    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <!-- Fontawesome Star -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-stars.css">
    <!-- Ion Icon -->
    <link rel="stylesheet" href="assets/css/vendor/ion-fonts.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Lightgallery -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->





            <link rel="stylesheet" href="css/linearicons.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/nice-select.css">                  
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">          
            <link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="css/tab.css">

            <!-- Social medias -->
            <link rel="stylesheet" href="assets/css/social.css">
            <link href="font/css/all.css" rel="stylesheet"> 

</head>

<body class="template-color-1">
    <?php require_once("inc/header.php");?>
    <section class="banner-area relative" id="home" style="background: url(img/test/45.jpg) center;
        background-size: cover;"> 
        <div class="overlay overlay-bg1"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Cars Details              
                    </h1>   
                    <p class="text-white link-nav"><a href="index">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="car_details"> Cars details</a></p>
                </div>                                          
            </div>
        </div>
    </section>
    <div class="main-wrapper">
        <!-- Begin Uren's Single Product Area -->
        <div class="sp-area">
            <div class="container-fluid">
                <div class="sp-nav">
                    <div class="row">
                        <?php
                            $query = mysqli_query($conn,"SELECT *FROM car_rent WHERE carId='$id'") or die(mysqli_error($conn));
                            if (mysqli_num_rows($query)>0) {
                                $row = mysqli_fetch_array($query);
                                    $carType = $row['carType'];
                                ?>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="sp-img_area">
                                            <div class="sp-img_slider slick-img-slider uren-slick-slider" data-slick-options='{
                                            "slidesToShow": 1,
                                            "arrows": false,
                                            "fade": true,
                                            "draggable": false,
                                            "swipe": false,
                                            "asNavFor": ".sp-img_slider-nav"
                                            }'>
                                                <div class="single-slide red zoom">
                                                    <img src="admin/media/imagesRent/<?= $row['thumbnail']?>" alt="Land Cruiser">
                                                </div>

                                                <div class="single-slide red zoom">
                                                    <img src="admin/media/imagesRent/<?= $row['photo1']?>" alt="Land Cruiser">
                                                </div>
                                                <div class="single-slide red zoom">
                                                    <img src="admin/media/imagesRent/<?= $row['photo2']?>" alt="Land Cruiser">
                                                </div>
                                                <div class="single-slide red zoom">
                                                    <img src="admin/media/imagesRent/<?= $row['photo3']?>" alt="Land Cruiser">
                                                </div>

                                                <div class="single-slide red zoom">
                                                    <img src="admin/media/imagesRent" alt="Land Cruiser">
                                                </div>
                                            </div>
                                            <div class="sp-img_slider-nav slick-slider-nav uren-slick-slider slider-navigation_style-3" data-slick-options='{
                                            "slidesToShow": 3,
                                            "asNavFor": ".sp-img_slider",
                                            "focusOnSelect": true,
                                            "arrows" : true,
                                            "spaceBetween": 30
                                            }' data-slick-responsive='[
                                                    {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                                    {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                                    {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                                    {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                                ]'>
                                                <div class="single-slide red zoom">
                                                    <img src="admin/media/imagesRent/<?= $row['thumbnail']?>" alt="Land Cruiser">
                                                </div>
                                                    <div class="single-slide red zoom">
                                                    <img src="admin/media/imagesRent/<?= $row['photo1']?>" alt="Land Cruiser">
                                                </div>
                                                    <div class="single-slide red zoom">
                                                    <img src="admin/media/imagesRent/<?= $row['photo2']?>" alt="Land Cruiser">
                                                </div>

                                                    <div class="single-slide red zoom">
                                                    <img src="admin/media/imagesRent/<?= $row['photo3']?>" alt="Land Cruiser">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-4">
                                        <div class="sp-content">
                                            <h2><?= $row['carName']?></h2>
                                            <!-- <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li><i class="ion-android-star"></i></li>
                                                    <li class="ion-android-star"></i></li>
                                                    <li class="silver-color"></li>
                                                </ul>
                                            </div> -->
                                            <div class="sp-essential_stuff">
                                                <ul>
                                                    <li>Car Name: <a href="javascript:void(0)"><?= $row['carName']?></a></li>
                                                    <li>Transimission: <a href="javascript:void(0)"><?= $row['carTransimission']?></a></li>
                                                    <li>Seats: <a href="javascript:void(0)"><?= $row['carSeats']?></a></li>
                                                    <li>KM / Litre: <a href="javascript:void(0)"><?= $row['kmPerLitre']?></a></li>
                                                    <li>Doors: <a href="javascript:void(0)"><?= $row['doors']?></a></li>  
                                                    <li>Fuels/Diesel: <a href="javascript:void(0)"><?= $row['fuelType']?></a></li>                                                  
                                                    <li>Air Condition: <a href="javascript:void(0)"><?= $row['carAirCondition']?></a></li>
                                                    <li>Price : <a href="javascript:void(0)"><?= $row['carPrice']?></a></li>
                                                </ul>
                                            </div>
                                            
                                            <div class="qty-btn_area">
                                                <!-- <ul>
                                                    <li><a class="qty-cart_btn" title="Book this car" href="book_car?idSent=<?= $id;?>" data-toggle="tooltip">Book now</a></li>
                                                    <li><a class="qty-wishlist_btn" href="wishlist.html" data-toggle="tooltip" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                    </li>
                                                    
                                                </ul> -->
                                            </div>
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
                                            </div><br>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-lg-4">
                                    
                                        <!-- <form class="form" role="form" autocomplete="off" method="POST">
                                            <div class="form-group">
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
                                                <div class="col-md-12 wrap-right">
                                                    <div class="input-group dates-wrap">                                          
                                                        <input id="datepicker" name="dateToPick" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
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
                                                <input class="form-control txt-field" type="text" name="homeNumber" placeholder="Home address">
                                                <input class="form-control txt-field" type="text" name="streetNumber" placeholder="Street number">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <button type="type" name="saveCarRentBooking" class="btn btn-primary btn-block text-center text-uppercase">Confirm Car Booking</button>
                                                </div>
                                            </div>
                                        </form> -->
                                        <form method="POST" class="form">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="input-group dates-wrap">                                          
                                                        <input id="datepicker" name="dateToPick" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
                                                        <div class="input-group-prepend">
                                                            <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                                        </div>											
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>Your Names</label> 
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="names" class="form-control" required=""> 
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>Email</label> 
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="email" name="email" class="form-control" required=""> 
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>Phone</label> 
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="phone" class="form-control" required=""> 
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>Home Address</label> 
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="homeNumber" class="form-control" required=""> 
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-3">
                                                        <label>Street Number</label> 
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="streetNumber" required=""> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="card-footer text-right">
                                                        <button class="btn btn-success" type="text" name="saveCarRentBooking">Confirm Booking</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                        <?php
                                            if (isset($_POST['saveCarRentBooking'])) {
                                                $b = mysqli_real_escape_string($conn,$_POST['dateToPick']);
                                                $c = mysqli_real_escape_string($conn,$_POST['names']);
                                                $d = mysqli_real_escape_string($conn,$_POST['email']);
                                                $e = mysqli_real_escape_string($conn,$_POST['phone']);
                                                $f = mysqli_real_escape_string($conn,$_POST['homeNumber']);
                                                $g = mysqli_real_escape_string($conn,$_POST['streetNumber']);
                                                $i = "#".$id.$b.$e;

                                                // echo "<script>alert('".$cod."')</script>";

                                                // die();
                                                
                                                $ch = mysqli_query($conn,"SELECT *FROM carrentbookings WHERE bookingCode='$i'") or die(mysqli_error($conn));
                                                if (mysqli_num_rows($ch)>0) {
                                                    echo "<script>alert('This booking already booked')</script>";
                                                    # code...
                                                }else{
                                                    $saving = mysqli_query($conn,"INSERT INTO carrentbookings (id,datePickedUp
                                                    ,names,email,phoneNumber,hNumber,streetNumber,bookingCode,carId,status1) VALUES ('','$b','$c','$d','$e','$f','$g','$i','$id','unread')") or die(mysqli_error($conn));
                                                    if ($saving) {
                                                        echo "<script>alert('Thank you for booking your booking code is".$i."');
                                                        window.top.location='cars_for_rent.php';
                                                        </script>";
                                                        # code...
                                                    }else {
                                                        echo "<script>alert('Failed to book');</script>";
                                                    }
                                                }

                                            }
                                        ?>
                                    </div>
                                <?php
                            }else{
                                echo "<h2>No car to rend available</h2>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Single Product Area End Here -->

        <!-- Begin Uren's Single Product Tab Area -->
        <!-- <div class="sp-product-tab_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sp-product-tab_nav">
                            <div class="product-tab">
                                <ul class="nav product-menu">
                                    <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                                    </li>
                                    <li><a data-toggle="tab" href="#specification"><span>Specification</span></a></li>
                                    <li><a data-toggle="tab" href="#reviews"><span>Reviews (1)</span></a></li>
                                </ul>
                            </div>
                            <div class="tab-content uren-tab_content">
                                <div id="description" class="tab-pane active show" role="tabpanel">
                                    <div class="product-description">
                                        <ul>
                                            <li>
                                                <strong>Ullam aliquam</strong>
                                                <span>Voluptatum, minus? Optio molestias voluptates aspernatur laborum ratione minima, natus eaque nemo rem quisquam, suscipit architecto saepe. Debitis omnis labore laborum consectetur, quas, esse voluptates minus aliquam modi nesciunt earum! Vero rerum molestiae corporis libero repellat doloremque quae sapiente ratione maiores qui aliquam, sunt obcaecati! Iure nisi doloremque numquam delectus.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="specification" class="tab-pane" role="tabpanel">
                                      <li>
                                                <strong>Ullam aliquam</strong>
                                                <span>Voluptatum, minus? Optio molestias voluptates aspernatur laborum ratione minima, natus eaque nemo rem quisquam, suscipit architecto saepe. Debitis omnis labore laborum consectetur, quas, esse voluptates minus aliquam modi nesciunt earum! Vero rerum molestiae corporis libero repellat doloremque quae sapiente ratione maiores qui aliquam, sunt obcaecati! Iure nisi doloremque numquam delectus.</span>
                                            </li>
                                </div>
                                <div id="reviews" class="tab-pane" role="tabpanel">
                                    <div class="tab-pane active" id="tab-review">
                                        <form class="form-horizontal" id="form-review">
                                            <div id="review">
                                                <table class="table table-striped table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50%;"><strong>Customer</strong></td>
                                                            <td class="text-right">15/09/20</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <p>Good product! Thank you very much</p>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h2>Write a review</h2>
                                            <div class="form-group required">
                                                <div class="col-sm-12 p-0">
                                                    <label>Your Email <span class="required">*</span></label>
                                                    <input class="review-input" type="email" name="con_email" id="con_email" required>
                                                </div>
                                            </div>
                                            <div class="form-group required second-child">
                                                <div class="col-sm-12 p-0">
                                                    <label class="control-label">Share your opinion</label>
                                                    <textarea class="review-textarea" name="con_message" id="con_message"></textarea>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group last-child required">
                                                <div class="col-sm-12 p-0">
                                                    <div class="your-opinion">
                                                        <label>Your Rating</label>
                                                        <span>
                                                    <select class="star-rating">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="uren-btn-ps_right">
                                                    <button class="uren-btn-2">Continue</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Uren's Single Product Tab Area End Here -->

        <!-- Begin Uren's Product Area -->
        <div class="uren-product_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title_area">
                            <span></span>
                            <h3>Related Products</h3>
                        </div>
                    <div class="product-slider uren-slick-slider slider-navigation_style-1 img-hover-effect_area" data-slick-options='{
                        "slidesToShow": 6,
                        "arrows" : true
                        }' data-slick-responsive='[
                                                {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                                                {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                                                {"breakpoint":992, "settings": {"slidesToShow": 2}},
                                                {"breakpoint":767, "settings": {"slidesToShow": 1}},
                                                {"breakpoint":480, "settings": {"slidesToShow": 1}}
                                            ]'>
                            <?php
                                $relatedQuery = mysqli_query($conn,"SELECT *FROM car_rent WHERE carType='$carType' ORDER BY carId DESC") or die(mysqli_error($conn));
                                if (mysqli_num_rows($relatedQuery)>0) {
                                    # code...
                                    $var = 1;
                                    while ($related= mysqli_fetch_array($relatedQuery)) {
                                       ?>
                                        <div class="product-slide_item">
                                            <div class="inner-slide">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="car_details?ids=<?= $related['carId']?>">
                                                            <img src="admin/media/imagesRent/<?= $related['thumbnail']?>" alt="TXL">
                                                        </a>
                                                        <div class="sticker">
                                                            <span class="sticker">New</span>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul>
                                                                <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                                </li>
                                                                <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                </li>
                                                                <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                        class="ion-android-options"></i></a>
                                                                </li>
                                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                        class="ion-android-open"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-desc_info">
                                                            <div class="rating-box">
                                                                <ul>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li><i class="ion-android-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                </ul>
                                                            </div>
                                                            <h6><a class="product-name" href="#"><?= $related['carName']?></a></h6>
                                                            <div class="price-box">
                                                                <span class="new-price">From $<?= $related['carPrice']?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       <?php
                                    $var++;}
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Product Area End Here -->

        <!-- Begin Uren's Brand Area -->
       
        <!-- Uren's Footer Area End Here -->
        <!-- Begin Uren's Modal Area -->
        
        <!-- Uren's Modal Area End Here -->
    </div>

            <!-- start footer Area -->      
                <?php require_once("inc/footer.php");?>
            <!-- End footer Area -->
    <!-- JS
============================================ -->

   <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Barrating JS -->
    <script src="assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/plugins/jquery.counterup.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Jquery-ui JS -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <!-- Lightgallery JS -->
    <script src="assets/js/plugins/lightgallery.min.js"></script>
    <!-- Scroll Top JS -->
    <script src="assets/js/plugins/scroll-top.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!-- jQuery Zoom JS -->
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

        <!-- Main JS -->
            <script src="assets/js/main.js"></script>
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