<?php
session_start();
include_once("header.php");
?>

  <!-- ======= Hero Section ======= -->
  <?php include_once("home.php") ?>
  <!-- End Hero Section -->

  <main id="main">

    <?php include_once("about.php") ?>
    <!-- ======= Clients Section ======= -->
    <?php include_once("sponsors.php") ?>

    <!-- ======= Stats Counter Section ======= -->
    <?php include_once("stats.php") ?>
    <!-- ======= Call To Action Section ======= -->
    <?php include_once("video.php") ?>
    <!-- End Call To Action Section -->

    <?php include_once("team.php") ?>

    <!-- ======= Our Services Section ======= -->
    <?php include_once("programs.php") ?>
    <!-- End Our Services Section -->

    <!-- ======= Pricing Section ======= -->
    <?php include_once("pricing.php") ?>
    <!-- End Pricing Section -->

    <?php include_once("apply-now.php") ?>
    <?php include_once("contact.php") ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once("footer.php"); ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- My files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.1/axios.min.js" integrity="sha512-NbjaUHU8g0+Y8tMcRtIz0irSU3MjLlEdCvp82MqciVF4R2Ru/eaXHDjNSOvS6EfhRYbmQHuznp/ghbUvcC0NVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="app.js"></script>

</body>

</html>