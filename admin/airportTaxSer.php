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
              <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>AIRPORT TAX SERVICE REQUESTS</h4>
                  </div>
                  <div class="card-body">
                  <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>ALL REQUESTS</h4>
                    <!-- <div class="modal fade" id="readMessage"  role="dialog" aria-labelledby="formModal"
                          aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="formModal">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form class="">
                                  <div class="form-group">
                                    <label>Username</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">
                                          <i class="fas fa-envelope"></i>
                                        </div>
                                      </div>
                                      <input type="text" class="form-control" placeholder="Email" name="email">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">
                                          <i class="fas fa-lock"></i>
                                        </div>
                                      </div>
                                      <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                  </div>
                                  <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                      <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                  </div>
                                  <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div> -->
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>N<sup>o</sup></th>
                            <th>Car photo</th>
                            <th>Booking Number</th>
                            <th>Pickup</th>
                            <th>Date of Pickup</th>
                            <th>Self Drive?</th>
                            <th>Names</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $allQuery = mysqli_query($conn,"SELECT *FROM airportservices,car_rent WHERE car_rent.carId = airportservices.carId 
                          ORDER BY airportservices.id DESC") or die(mysqli_error());
                          if (mysqli_num_rows($allQuery)>0) {
                            $a = 1;
                            while ($row = mysqli_fetch_array($allQuery)) {
                              ?>
                                <tr>
                                  <td><?= $a;?></td>
                                  <td><img src="media/imagesRent/<?= $row['thumbnail']?>" height="20" width="40" alt=""></td>
                                  <td><?= $row['bookingNumber']?></td>
                                  <td><?= $row['numberOfpickups']?></td>
                                  <td><?= $row['picDate']?></td>
                                  <td><?= $row['driveType']?></td>
                                  <td><?= $row['names']?></td>
                                  <td><?= $row['email']?></td>
                                  <td><?= $row['phoneNumber']?></td>
                                  <td><a href="pages/deleteAirportSerBooking?deleteBooking=<?= $row['id']?>" class="btn btn-danger">Delete</a></td>                                  
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
 <!-- <script src="assets/js/app.min.js"></script> -->
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