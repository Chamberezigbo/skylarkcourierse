<?php
session_start();

$msg = $success = $packages = '';
if (isset($_SESSION['success']) && isset($_SESSION['msg'])) {
     // || checks for boolean values only
     $success = $_SESSION['success'] || false;
     $msg = $_SESSION['msg'];
     //remove the session
     unset($_SESSION['success']);
     unset($_SESSION['msg']);
}


     function isActive($page)
     {
          $currentURI = trim(str_replace('skylarkcourierse.com/', '', $_SERVER['REQUEST_URI']), '/');
          $isActive = ($currentURI == $page) ? 'active' : '';
          return $isActive;
     }

       $companyName = "skylark courier"
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?= $companyName ?></title>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRVkBVIza6LFm1TGNgMlN5FRdVXVERjnc&callback=initMap" async defer></script>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
       <video autoplay muted loop id="background-video">
              <source src="images/ngvid.mp4" type="video/mp4">
        </video>
   <div class="overlay"></div>
    <!-- header section strats -->
    <section class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container d-lg-none">
          <a class="navbar-brand" href="#">
            <div class="logo-box">
              <img src="images/logo.png" alt="">
              <span class="text-white">
                SK
              </span>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html"<?php echo isActive('index.php'); ?> >Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html" <?php echo isActive('about.php'); ?>> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html" <?php echo isActive('service.php'); ?>> Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html" <?php echo isActive('shop.php'); ?>> Shop </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="company.html" <?php echo isActive('company.php'); ?>> Company </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link " href="contact.html" <?php echo isActive('contact.php'); ?>>Contact us</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="header_container ">
          <div class="logo-box">
            <img src="images/logo.png" alt="">
            <span class="text-white">
              <?= $companyName ?>
            </span>
          </div>
          <div>
            <div class="header_top">
              <div class="header_top-contact">

                <a href="" class="ml-4">
                  <div>
                    <img src="images/phone.png" alt="" />
                  </div>
                  <span>
                    (+71) 258964785
                  </span>
                </a>
                <a href="" class="ml-4">
                  <div>
                    <img src="images/mail.png" alt="" />
                  </div>
                  <span>
                    info@skylarkcourierse.com
                  </span>
                </a>
              </div>
              <div class="header_top-social">
                <div>
                  <a href="">
                    <img src="images/fb.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/twitter.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/g-plus.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="header_btm">
              <nav class="navbar navbar-expand-lg custom_nav-container pt-3">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php" <?php echo isActive('index.php'); ?> >Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php"<?php echo isActive('about.php'); ?>> About </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="service.php" <?php echo isActive('service.php'); ?>> Service</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="shop.php" <?php echo isActive('shop.php'); ?>> Shop </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="company.php" <?php echo isActive('company.php'); ?>> Company </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link pr-0" href="contact.php" <?php echo isActive('contact.php'); ?>>Contact us</a>
                      </li>
                    </ul>

                  </div>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end header section -->