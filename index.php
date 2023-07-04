<?php
$title = "";

if(isset($_GET['page']) == 'home'){
  $title = "Home";
}else if(isset($_GET['page']) == 'about'){
  $title = "Tentang Kami";
}else if(isset($_GET['page']) == 'product'){
  $title = "Produk";
}else if(isset($_GET['page']) == 'why'){
  $title = "Mengapa Susu Kambing?";
}else if(isset($_GET['page']) == 'farm'){
  $title = "Peternakan";
}else{
  $title = "Home";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="no-referrer-when-downgrade" name="referrer">
  <meta content="all" name="robots">

  <title>SMK Ash Sholihuddin Dampit | <?=$title;?></title>
  <meta name="description" content="">
  <meta name="keywords" content="smk, sekolah, sekolah menengah kejuruhan">
  <meta name="author" content="Devan Eka Prasetian">

  <!--OG-->
  <!--
  <meta content="en_US" property="og:locale">
  <meta content="PT Etawa Dairy Industry" property="og:site_name">
  <meta content="website" property="og:type">
  <meta content="https://etawaku.com/" property="og:url">
  <meta content="Etawa Dairy" property="og:title">
  <meta content="Etawa Dairy Industry membangun ekosistem industri susu kambing yang terintegrasi dari hulu ke hilir. Visi utamanya adalah memberikan sumber protein susu alternatif yang sehat, bergizi, terjangkau dan memberdayakan ekonomi masyarakat" property="og:description">
  <meta content="assets/img/logo etawa dairy 2.png" property="og:image">
  <meta content="1200" property="og:image:width">
  <meta content="630" property="og:image:height">
  <meta content="Etawa Dairy" property="og:image:alt">
  -->
  <!--Twitter-->
  <!--
  <meta content="summary_large_image" name="twitter:card">
  <meta content="@" name="twitter:creator">
  <meta content="PT Etawa Dairy" name="twitter:title">
  <meta content="Etawa Dairy Industry membangun ekosistem industri susu kambing yang terintegrasi dari hulu ke hilir. Visi utamanya adalah memberikan sumber protein susu alternatif yang sehat, bergizi, terjangkau dan memberdayakan ekonomi masyarakat" name="twitter:description">
  <meta content="assets/img/logo etawa dairy 2.png" name="twitter:image">
  <meta content="800" name="twitter:image:width">
  <meta content="418" name="twitter:image:height">
  <meta content="Etawa Dairy" name="twitter:image:alt">
  -->

  <!-- Favicons -->
  <link href="assets/img/icon-school.png" rel="icon">
  <link href="assets/img/icon-school.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="?page=home">Logo</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="?page=home">Home</a></li>
		  <!--
          <li><a href="about.html">About</a></li>
          <li><a href="courses.html">Courses</a></li>
          <li><a href="trainers.html">Trainers</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="pricing.html">Pricing</a></li>

          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
		  -->
          <!-- <li><a href="contact.html">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="?page=home" class="get-started-btn">Get Started</a>

    </div>
  </header><!-- End Header -->

  <?php 
    if(empty($_GET['page'])){
      require "home.php";
    }else{
      switch($_GET['page']){
        case 'home' :
          require "home.php";
        break;
        
        case 'about' :
          require "about.php";
        break;
        
        case 'product' :
          require "product.php";
        break;
        
        case 'why' :
          require "why.php";
        break;

        case 'farm' :
          require "farm.php";
        break;
        
        case 'mitra' :
          require "mitra.php";
        break;
        
        default : return '';
      }
    }
  ?> 

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SMK Ash Sholihuddin</h3>
            <p>
              Jalan Pesantren 72, <br>
              Desa Sumbersuko, Kecamatan Dampit,<br>
              Kabupaten Malang, 65181<br><br>
              <strong>Telp:</strong> 081335235736<br>
              <!-- <strong>Email:</strong> info@example.com<br> -->
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="?page=home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>SMK Ash Sholihuddin Dampit</span></strong>. All Rights Reserved
        </div>
        <!-- <div class="credits"> -->
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        <!-- </div> -->
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        <!-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> -->
        <a href="https://www.instagram.com/smk_ashsholihuddin/?hl=en" class="instagram" target="_blank">
          <i class="bx bxl-instagram"></i>
        </a>
        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
        <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>