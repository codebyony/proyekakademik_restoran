<!-- HEAD -->
<?php
  $judul = 'Restoran Ilario - Halaman Admin';
  $paragraf_hero = 'Sebagai Administrator: Anda bisa mengentri data, mengupdate, juga menghapus!';
  include '_bagian/head.php';
  $edit = $_GET['edit'];
  $id = $_GET['id'];
  $edit_menu = 0;
?>
<body>
  <!-- ======= Header ======= -->
  <?php
    include '_bagian/header_admin.php';
  ?>
  <!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <?php
    include '_bagian/hero.php';
  ?>
  <!-- End Hero -->
  <main id="main">
    <?php
      if($edit == 1){
        include '_bagian/edit_menu.php';
      }else{
        include '_bagian/tambah_menu.php';
      }
    ?>
    <?php
      include '_bagian/menu_admin.php';
    ?>
  </main>
  <!-- ======= Footer ======= -->
  <?php
      include '_bagian/footer.php';
  ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>