<!DOCTYPE html>
<html lang="en">


<!-- basic-table.html  21 Nov 2019 03:55:20 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
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
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <?php 
      include 'includes/header.php';
      include 'includes/left_nav.php';
       ?>
    
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
            </div>
             <div class="row">
              
            </div>
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List of all booked cards</h4>
                  </div>

                  <div class="card-body">
                  
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Task Name</th>
                            <th>Progress</th>
                            <th>Members</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-40">
                                </div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                            </td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar width-per-60"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-3.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                            </td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-info badge-shadow">Todo</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning width-per-70"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                            </td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge badge-warning badge-shadow">In Progress</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-90"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                            </td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              5
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-40">
                                </div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                            </td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              6
                            </td>
                            <td>Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar width-per-60"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-3.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                            </td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-info badge-shadow">Todo</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              7
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning width-per-70"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                            </td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge badge-warning badge-shadow">In Progress</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              8
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-90"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                            </td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              9
                            </td>
                            <td>Create a mobile app</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-40">
                                </div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                            </td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              10
                            </td>
                            <td>Redesign homepage</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar width-per-60"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-3.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                            </td>
                            <td>2018-04-10</td>
                            <td>
                              <div class="badge badge-info badge-shadow">Todo</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              11
                            </td>
                            <td>Backup database</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-warning width-per-70"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                            </td>
                            <td>2018-01-29</td>
                            <td>
                              <div class="badge badge-warning badge-shadow">In Progress</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                          <tr>
                            <td>
                              12
                            </td>
                            <td>Input data</td>
                            <td class="align-middle">
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-success width-per-90"></div>
                              </div>
                            </td>
                            <td>
                              <img alt="image" src="assets/img/users/user-2.png" width="35">
                              <img alt="image" src="assets/img/users/user-5.png" width="35">
                              <img alt="image" src="assets/img/users/user-4.png" width="35">
                              <img alt="image" src="assets/img/users/user-1.png" width="35">
                            </td>
                            <td>2018-01-16</td>
                            <td>
                              <div class="badge badge-success badge-shadow">Completed</div>
                            </td>
                            <td><a href="#" class="btn btn-primary">Detail</a></td>
                          </tr>
                        </tbody>
                      </table>
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
</body>


<!-- basic-table.html  21 Nov 2019 03:55:20 GMT -->
</html>