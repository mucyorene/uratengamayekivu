<?php
  require_once("db.php");
?>
<?php
  session_start();
    if (!$_SESSION['admin']) {
      header("location:auth-login.php");
    }
?>
<nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                  collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">
              <i data-feather="mail"></i>
              <span class="badge headerBadge1">
                <?php
                  $se = mysqli_query($conn,"SELECT *FROM contact WHERE status1='unread'") or die(mysqli_error($conn));
                  if (mysqli_num_rows($se)>0) {
                
                    $number = mysqli_num_rows($se);
                    echo $number;
                  }else{
                    echo "0";
                  }
                ?>
              </span>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <!-- <a href="#">Mark All As Read</a> -->
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <?php
                  $se = mysqli_query($conn,"SELECT *FROM contact WHERE status1='unread' ORDER BY id DESC") or die(mysqli_error($conn));
                  if ($number = mysqli_num_rows($se)>0) {
                    while($message = mysqli_fetch_array($se)){
                      ?>
                        <a href="readMessages?id=<?= $message['id']?>" class="dropdown-item dropdown-item-unread" data-toggle="tooltip" 
                          data-placement="top" title="<?php echo $message['message']?>"> 
                          <span class="dropdown-item-avatar text-white">
                              <img alt="image" src="assets/img/user.png" class="rounded-circle">
                          </span>
                          <span class="dropdown-item-desc">
                            <span class="message-user">
                              <?= $message['names'];?>
                            </span>
                            <span class="time messege-text">
                              <?= $message['subject'];?>
                            </span>
                            <span class="time">2 Days Ago</span>
                          </span>
                        </a>
                      <?php
                    }
                  }
                ?>
                <?php
                  $readed = mysqli_query($conn,"SELECT *FROM contact WHERE status1='read' ORDER BY id DESC");
                  if (mysqli_num_rows($readed)) {
                    while ($readM = mysqli_fetch_array($readed)) {
                      ?>
                        <a class="dropdown-item" href="readMessages?id=<?= $readM['id']?>" 
                          data-toggle="tooltip" data-placement="top" title="<?php echo $readM['message']?>">
                          <span class="dropdown-item-avatar text-white">
                            <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                          </span>
                          <span class="dropdown-item-desc">
                            <span class="message-user"><?= $readM['names']?></span>
                            <span class="time messege-text"><?= $readM['subject']?></span>
                            <span class="time">2 Days Ago</span>
                          </span>
                        </a>
                      <?php
                    }
                  }
                ?>
              </div>
              <div class="dropdown-footer text-center">
                <a href="allMessages">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
            <!-- Modal for reading some contents -->
          <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link message-toggle nav-link-lg">
              <i data-feather="bell" class="bell"></i>
                <span class="badge headerBadge1">
                  <?php
                    $se = mysqli_query($conn,"SELECT *FROM airportservices WHERE status1 = 'unread' ORDER BY id DESC") or die(mysqli_error($conn));
                    $se1 = mysqli_query($conn,"SELECT *FROM carrentbookings WHERE status1 = 'unread' ORDER BY id DESC") or die(mysqli_error($conn));
                    if ((mysqli_num_rows($se)>0) || (mysqli_num_rows($se1)>0)) {
                      $number = mysqli_num_rows($se);
                      $number2 = mysqli_num_rows($se1);
                      // echo "<script>alert('".$number2."')</script>";
                      $total = $number+$number2;
                    echo $total;
                    }else{
                      echo "0";
                    }
                  ?>
                </span>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <!-- <a href="#">Mark All As Read</a> -->
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <?php
                    $notif = mysqli_query($conn,"SELECT *FROM airportservices WHERE status1 = 'unread' ORDER BY id DESC") or die(mysqli_error($conn));
                    $notif2 = mysqli_query($conn,"SELECT *FROM carrentbookings WHERE status1 = 'unread' ORDER BY id DESC") or die(mysqli_error($conn));
                    if ((mysqli_num_rows($notif)>0) || (mysqli_num_rows($notif2)>0)) {
                    while ($noti = mysqli_fetch_array($notif)) {
                      ?>
                      <a href="airportTaxSer" class="dropdown-item dropdown-item-unread">
                        <span class="dropdown-item-icon bg-primary text-white">
                          <i class="fas fa-code"></i>
                        </span>
                        <span class="dropdown-item-desc"><b><?= $noti['names']?></b><br><b>New airport services booking</b>
                          <span class="time">2 Min Ago</span>
                        </span>
                      </a> 
                      <?php
                    }
                    while($noti2 = mysqli_fetch_array($notif2)){
                      ?>
                        <a href="bookedCarRent?idNoti=<?= $noti2['id'];?>" class="dropdown-item dropdown-item-unread">
                          <span class="dropdown-item-icon bg-primary text-white">
                            <i class="fas fa-code"></i>
                          </span>
                          <span class="dropdown-item-desc"><b><?= $noti2['names']?></b><br><b>New Car rent booking</b>
                            <span class="time">2 Min Ago</span>
                          </span>
                        </a>
                      <?php
                    }
                  }
                ?>
                <?php
                  $notif1 = mysqli_query($conn,"SELECT *FROM airportservices WHERE status1='read' ORDER BY id DESC") or die(mysqli_error($conn));
                  $notif3 = mysqli_query($conn,"SELECT *FROM carrentbookings WHERE status1='read' ORDER BY id DESC") or die(mysqli_error($conn));
                  if ((mysqli_num_rows($notif)>0) || (mysqli_num_rows($notif3)>0)) {
                    while ($noti1=mysqli_fetch_array($notif1)) {
                      ?>
                        <a href="airportTaxSer" class="dropdown-item">
                          <span class="dropdown-item-icon bg-info text-white">
                            <i class="fa fa-user"></i>
                          </span>
                          <span class="dropdown-item-desc"> <b><?= $noti1['names']?></b> <br>Booked from car for rent <span class="time">10 Hours
                              Ago</span>
                          </span>
                        </a>
                      <?php
                    }
                    while ($noti3 = mysqli_fetch_array($notif3)) {
                      ?>
                        <a href="bookedCarForRent" class="dropdown-item">
                          <span class="dropdown-item-icon bg-info text-white">
                            <i class="fa fa-user"></i>
                          </span>
                          <span class="dropdown-item-desc"> <b><?= $noti1['names']?></b> Booked from car for rent <span class="time">10 Hours
                              Ago</span>
                          </span>
                        </a>
                      <?php
                    }
                  }
                ?>
                
                <!-- <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
                        fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
                        fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a> -->
              </div>
              <!-- <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div> -->
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="assets/img/admin.jpg" class="user-img-radious-style"><span class="d-sm-none d-lg-inline-block"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profiles" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <!-- <a href="timeline.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i>
                Activities
              </a> -->
              <a href="#" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
  </nav>