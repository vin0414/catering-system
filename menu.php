<?php
require_once("resources/dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zephaniah's Event & Catering Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="Zephaniah's Event & Catering Services">
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="dropdown"><a href="/" class="text-primary"><span>Home</span></a></li>
          <li><a class="nav-link scrollto text-primary active" href="menu.php">Menu</a></li>
          <li><a class="nav-link scrollto text-primary" href="register.php">Register</a></li>
          <li><a class="nav-link scrollto text-primary" href="sign-in.php">Sign-In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="book.php">Book Now</a>

    </div>
  </header><!-- End Header -->

  <section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/logo.png" alt="Zephaniah's Event & Catering Services" width="400"/>
      <div class="d-flex">
        <a href="book.php" class="btn-get-started scrollto">Book Now</a>
        <a href="https://drive.google.com/file/d/1u54ppCgm00Fu2zBIeC1M_yGBG0579U4p/preview" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section>
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Menu</h2>
        </div>
        <div class="row g-2">
            <div class="col-12">
                <input type="search" class="form-control" id="search" placeholder="Search"/>
            </div>
            <div class="col-12">
                <div class="row g-2" data-aos="fade-up" data-aos-delay="200" id="output">
                </div>    
            </div>
        </div>
      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="footer-info">
              <h3>Zephaniah's Event & Catering Services</h3>
              <p>
                P. Burgos Ave. Cavite City, Cavite<br>
                <strong>Phone:</strong> (046) 434-0015 | 09953741205<br>
                <strong>Email:</strong> zephaniahs.event@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Birthdays</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Wedding</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Corporate Events</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Zephaniah's Event & Catering Services</span></strong>. All Rights Reserved
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="https://www.facebook.com/zephaniascatering?mibextid=ZbWKwL" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://instagram.com/zephaniah_events?igshid=MzRlODBiNWFlZA==" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
      $(document).ready(function()
      {
         load(); 
      });
      $('#search').keyup(function()
      {
          var action = "search";
          var text = $(this).val();
          $.ajax({
              url:"resources/menu.php",method:"GET",
              data:{action:action,keyword:text},
              success:function(data)
              {
                  $('#output').html(data);
              }
          });
      });
      function load()
      {
          var action = "load";
          $.ajax({
              url:"resources/menu.php",method:"GET",
              data:{action:action},
              success:function(data)
              {
                  $('#output').html(data);
              }
          });
      }
  </script>
</body>

</html>