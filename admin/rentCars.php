<?php
require_once("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<!-- basic-table.html  21 Nov 2019 03:55:20 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin | Uratengamaye Kivu</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
    <script src="assets/bundles/sweetalert/sweetalert.min.js"></script>
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php 
    
      // include_once 'includes/insert_car_rent.php';

      include 'includes/header.php';
      include 'includes/left_nav.php';
        ?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">New Booking</h5>
                            <h2 class="mb-3 font-18">258</h2>
                            <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/1.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15"> Customers</h5>
                            <h2 class="mb-3 font-18">1,287</h2>
                            <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/2.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">New Project</h5>
                            <h2 class="mb-3 font-18">128</h2>
                            <p class="mb-0"><span class="col-green">18%</span>
                              Increase</p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/3.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Revenue</h5>
                          <h2 class="mb-3 font-18">$48,697</h2>
                          <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/banner/4.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Registered Cars</h4>
                  </div>
                  <div class="card-body">
                  <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List of Registered Cars</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>N<sup>o</sup></th>
                            <th>Car Name</th>
                            <th>Car Transimision</th>
                            <th>Air Condition</th>
                            <th>KM/Litre</th>
                            <th>Doors</th>
                            <th>Fuel Type</th>
                            <th>Price</th>
                            <th>Type</th>
                            <th>Descriptions</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $allQuery = mysqli_query($conn,"SELECT *FROM car_rent ORDER BY carId DESC") or die(mysqli_error());
                          if (mysqli_num_rows($allQuery)>0) {
                            $a = 1;
                            while ($row = mysqli_fetch_array($allQuery)) {
                              ?>
                                <tr>
                                  <td><?= $a;?></td>
                                  <td><?= $row['carName']?></td>
                                  <td><?= $row['carTransimission']?></td>
                                  <td><?= $row['carAirCondition']?></td>
                                  <td><?= $row['kmPerLitre']?></td>
                                  <td><?= $row['doors']?></td>
                                  <td><?= $row['fuelType']?></td>
                                  <td><?= $row['carPrice']?></td>
                                  <td><?= $row['carType']?></td>
                                  <td><?= $row['carDesc']?></td>
                                  <td><a href="editCarRent?editCar=<?= $row['carId']?>" class="btn btn-success">Edit</a></td>
                                  <td><a href="deleteCarRent?editCar=<?= $row['carId']?>" class="btn btn-danger">Delete</a></td>                                  
                                </tr>
                              <?php
                            $a++;}
                          }
                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        <?php include'includes/settings.php' ?>
      </div>
      <?php
        if (isset($_POST["save_car"])) {
          $a = mysqli_real_escape_string($conn,$_POST['car_name']);
          $b = mysqli_real_escape_string($conn,$_POST['transmission']);     
          $c = mysqli_real_escape_string($conn,$_POST['airCondition']);      
          $d = mysqli_real_escape_string($conn,$_POST['car_seats']);
          $p = mysqli_real_escape_string($conn,$_POST['kmLitre']);                            
          $e = mysqli_real_escape_string($conn,$_POST['car_doors']);
          $f = mysqli_real_escape_string($conn,$_POST['car_fuel']);  
          $g = mysqli_real_escape_string($conn,$_POST['price']);
          $h = mysqli_real_escape_string($conn,$_POST['car_type']);          
          $i = mysqli_real_escape_string($conn,$_POST['description']);          
          $j = mysqli_real_escape_string($conn,$_FILES['thumbs']["name"]);
          $k = mysqli_real_escape_string($conn,$_FILES['photo1']["name"]);          
          $l = mysqli_real_escape_string($conn,$_FILES['photo2']["name"]);          
          $m = mysqli_real_escape_string($conn,$_FILES['photo3']["name"]);          
          $n = mysqli_real_escape_string($conn,$_FILES['photo4']["name"]);          
          $o = mysqli_real_escape_string($conn,$_FILES['photo5']["name"]);
        $exist = mysqli_query($conn,"SELECT * FROM car_rent WHERE carName = '$a'") or die(mysqli_error($conn));
        if (mysqli_num_rows($exist)>0) {
          echo "<script>alert('This car already registered')</script>";
        }
        else{
          $query = mysqli_query($conn,"INSERT INTO car_rent (carId,carName,carTransimission,carAirCondition,carSeats,kmPerLitre,
          doors,fuelType,carPrice,carType,carDesc,thumbnail,photo1,photo2,photo3,photo4,photo5) VALUES ('','$a','$b','$c','$d',
          '$p','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')") or die(mysqli_error($conn));
          if ($query) {
            move_uploaded_file($_FILES['thumbs']["tmp_name"],"media/imagesRent/".$j);
            move_uploaded_file($_FILES['photo1']["tmp_name"],"media/imagesRent/".$k);
            move_uploaded_file($_FILES['photo2']["tmp_name"],"media/imagesRent/".$l);
            move_uploaded_file($_FILES['photo3']["tmp_name"],"media/imagesRent/".$m);
            move_uploaded_file($_FILES['photo4']["tmp_name"],"media/imagesRent/".$n);
            move_uploaded_file($_FILES['photo5']["tmp_name"],"media/imagesRent/".$o);                        
            echo "<script>window.location = 'new_car.php';</script>";
          }
          else {
            die();
          }
        }
        
        }
      ?>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="">&copy Uratengamaye Kivu Ltd | Rwanda</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
    <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/js/page/datatables.js"></script>
 <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/cleave-js/dist/cleave.min.js"></script>
  <script src="assets/bundles/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

  <!-- Page Specific JS File -->  <script src="assets/js/page/forms-advanced-forms.js"></script>
  <!-- Template JS File -->

  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>
<!-- basic-table.html  21 Nov 2019 03:55:20 GMT -->
</html>