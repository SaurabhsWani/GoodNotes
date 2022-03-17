<?php
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
	<link
	rel="shortcut icon"
	href=<?php echo($assetsString['favicon'])?>
	type="image/x-icon"
	/>
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
<body>
	<!-- ========== section start ========== -->
	<section class="signin-section">
        <div class="container-fluid">
          <div class="row g-0 auth-row">
            <div class="col-lg-6">
              <div class="auth-cover-wrapper bg-primary-100">
                <div class="auth-cover">
                  <div class="title text-center">
                    <h1 class="text-primary mb-10">Get Started</h1>
                  </div>
                  <div class="cover-image">
                    <img src="assets/images/auth/signin.svg" alt="" />
                  </div>
                  <div class="shape-image">
                    <img src="assets/images/auth/shape.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6">
              <div class="signup-wrapper">
                <div class="form-wrapper">
                  <h6 class="mb-15">Sign Up Form</h6>
                  <p class="text-sm mb-25">
                    Start creating the best possible user experience for you
                    customers.
                  </p>
                  <form action="signUpController.php" method="POST">
                    <div class="row">
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Name</label>
                          <input type="text" name="Name" placeholder="Name" />
                        </div>
                      </div>
                      <!-- end col -->
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Email</label>
                          <input type="email" name="Email" placeholder="Email" />
                        </div>
                      </div>
                      <!-- end col -->
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Password</label>
                          <input type="password" name="Password" placeholder="Password" />
                        </div>
                      </div>
                      <div class="col-12">
                        <div class=" button-group d-flex justify-content-center flex-wrap " >
                          <button class=" main-btn primary-btn btn-hover w-100 text-center" type="submit">
                            Sign Up
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- end row -->
                  </form>
                  <div class="singup-option pt-10">
                    <p class="text-sm text-medium text-dark text-center">
                      Already have an account? <a href="index.php">Sign In</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
      </section>
<!-- ========== section end ========== -->
<?php
include_once('footer.php');
?>