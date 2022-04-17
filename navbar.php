<?php
include('scurityForPage.php');
include_once('utils/langauge.php');
include_once('utils/assets_string.php');
include_once('utils/routes.php');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?php echo($assetsString['favicon'])?>" type="image/x-icon" />
  <title><?php echo($appString['title'])?></title>
  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/LineIcons.css" />
  <link rel="stylesheet" href="assets/css/quill/bubble.css" />
  <link rel="stylesheet" href="assets/css/quill/snow.css" />
  <link rel="stylesheet" href="assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="assets/css/morris.css" />
  <link rel="stylesheet" href="assets/css/vanilla-dataTables.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class=""><!-- class="darkTheme" -->
  <!-- ======== main-wrapper start =========== -->
  <main class="main-wrapper active">
    <!-- ========== header start ========== -->
    <header class="header">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-5 col-md-5 col-6 navbar-logo">
            <a href="dashboard.php">
                 <h3 class="text-primary mb-10">House-Wife Assistant Notes</h3>
               <!-- <img src="<?php echo($assetsString['nav_logo'])?>" alt="logo" style="width:190px"/> -->
            </a>
          </div>
          <div class="col-lg-7 col-md-7 col-6">
            <div class="header-right">
              <!-- notification start -->
              <div class="notification-box ml-15 d-none d-md-flex">
                <a href="dashboard.php"><button>
                  <i class="lni lni-grid-alt"></i>
                </button>
              </a>
            </div>
            <div class="notification-box ml-15 d-none d-md-flex">
              <button
              class="dropdown-toggle"
              type="button"
              id="notification"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >
              <i class="lni lni-alarm"></i>
              <?php 
$date=date("Y-m-d");
              $getNotificaitonCount="SELECT * FROM allnotes WHERE category='RM' AND uid='$uid' AND `date`>='$date'";
              $runNotificaitonCountQuery=mysqli_query($connection,$getNotificaitonCount);   
              $notification=mysqli_num_rows($runNotificaitonCountQuery)
              ?>
              <span><?php echo $notification;?></span>
            </button>
            <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="notification"
            >
            <?php
            if (mysqli_num_rows($runNotificaitonCountQuery)>0) {
        while ($row=mysqli_fetch_assoc($runNotificaitonCountQuery)) {  ?>
            <li>
              <a >
                <div class="content">
                  <h6>
                    <?php echo $row['title']; ?>
                  </h6>
                  <p>
                   <?php echo $row['note']; ?>
                  </p>
                  <span><?php echo $row['date'].' '.$row['time']; ?></span>
                </div>
              </a>
            </li>
          <?php } } ?>
          </ul>
        </div>
        <!-- notification end -->
        <!-- profile start -->
        <div class="profile-box ml-15">
          <div class="profile-info">
            <div class="info">
              <h6><?php echo $_SESSION['name']; ?></h6>
              <div class="image">
                <img src="assets/images/profile/profile-image.png" alt=""/>
                <span class="status"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="notification-box ml-15 d-none d-md-flex">
          <button
          class="dropdown-toggle"
          type="button" data-bs-toggle="modal" data-bs-target="#Logout"
          ><i class="lni lni-exit"></i>
        </button>
      </div>
      <div class="modal fade" id="Logout" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content card-style text-center">
            <div class="modal-body">
              <div class="image mb-30">
                <img src="assets/images/modals/image-2.svg" alt="" height="200px" />
              </div>
              <div class="content mb-30">
                <h2 class="mb-15">Wan't to logout </h2>
              </div>
              <div class="action d-flex flex-wrap justify-content-center">
                <form action="logout.php" method="POST">                  
                  <button type="submit" name="logout_btn" class="main-btn square-btn btn-hover m-1 ">
                    Logout
                  </button>
                </form>
                <button data-bs-dismiss="modal" class="main-btn primary-btn-outline square-btn btn-hover m-1">
                  Cancel
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- profile end -->
  </div>
</div>
</div>
</div>
</header>
<!-- ========== header end ========== -->
