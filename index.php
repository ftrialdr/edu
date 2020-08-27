<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EDUCATKJ</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/edu-icon.png" rel="icon">
  <link href="assets/img/edu-icon.png" rel="edu-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">


      <h1 class="logo mr-auto"><a href="index.php">EDUCATKJ</a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="index.php?halaman=discuss">Discuss</a></li>
          <li><a href="index.php?halaman=quiz">Quiz</a></li>
          <li class="drop-down"><a href="index.php?halaman=courses">Courses</a>
            <ul>
              <li><a href="#">Grade</a></li>
                <li class="drop-down"><a href="#">X</a>
                <ul>
                  <li><a href="#">Dasar Desain Grafis</a></li>
                  <li><a href="#">Pemrograman Dasar</a></li>
                  <li><a href="#">Sistem Komputer</a></li>
                  <li><a href="#">Komputer dan Jaringan Dasar</a></li>
                  <li><a href="#">Simulasi Komunikasi dan Digital</a></li>
                  </ul>
                <li class="drop-down"><a href="#">XI</a>
                <ul>
                  <li><a href="#">Administrasi Infrastruktur Jaringan</a></li>
                  <li><a href="#">Administrasi Sistem Jaringan</a></li>
                  <li><a href="#">Teknologi Layanan Jaringan</a></li>
                  <li><a href="#">Teknologi WAN</a></li>
                  </ul>
                <li class="drop-down"><a href="#">XII</a>
                <ul>
                  <li><a href="#">Administrasi Infrastruktur Jaringan</a></li>
                  <li><a href="#">Administrasi Sistem Jaringan</a></li>
                  <li><a href="#">Teknologi Layanan Jaringan</a></li>
                  <li><a href="#">Teknologi WAN</a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li><a href="index.php?halaman=help">Help</a></li>
          <li><a href="index.php?halaman=contact">Contact</a></li>


        </ul>
      </nav><!-- .nav-menu -->

      <a href="login.php" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow!</h1>
      <h2>SMK N 2 WONOSARI</h2>
      <a href="courses.php" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->


  <main id="main">

    <?php
          if (isset($_GET['halaman']))
          {
              if ($_GET['halaman']=="courses") {
                include 'courses.php';
              }
              elseif ($_GET['halaman']=="discuss") {
                include 'discuss.php';
              }
              elseif ($_GET['halaman']=="quiz") {
                include 'quiz.php';
              } 
              elseif ($_GET['halaman']=="help") {
                include 'help.php';
              }
              elseif ($_GET['halaman']=="contact") {
                include 'contact.php';
              }{

              }
          }
          else
          {
            include 'home.php';
          }
          ?>

      <!-- ======= Why Us Section ======= -->
    <div id="page-wrapper" >
       <div id="page-inner">
          
         </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SMK N 2 WONOSARI</h3>
            <p>
              Jl. KH. Agus Salim No.116, Ledoksari, Kepek, Kec. Wonosari, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55813 <br>
              <br>
              <strong>Phone:</strong> (0274) 391019 <br>
              <strong>Email support:</strong> stmnegerigk@yahoo.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Dukung kami dengan Subscribe Gratis</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>EDUCATKJ</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
