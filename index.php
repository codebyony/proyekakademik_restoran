<!-- HEAD -->
<?php
  $judul = 'Restoran Ilario - Index';
  include '_bagian/head.php';
?>
<body>

  <!-- ======= Header ======= -->
  <?php
    include '_bagian/header.php';
  ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php
    include '_bagian/hero.php';
  ?>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php
      include '_bagian/about.php';
    ?>
    <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <?php
      include '_bagian/whyus.php';
    ?>
    <!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <?php
      include '_bagian/menu.php';
    ?>
    <!-- End Menu Section -->

    <!-- ======= Events Section ======= -->
    <?php
      include '_bagian/events.php';
    ?>
    <!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <?php
      include '_bagian/tambah_user.php';
    ?>
    <!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <?php
      include '_bagian/testimoni.php';
    ?>
    <!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <?php
      include '_bagian/gallery.php';
    ?>
    <!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    
    <!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jalan Cendrawasih No.99 <br>
                Malang, Jawa Timur, Indonesia</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Buka:</h4>
                <p>
                  Senin-Sabtu:<br>
                  12:00 - 23:00 
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>ilario@hotdish.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0811 1111 0000</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Ilario</h3>
              <p>
                Jalan Cendrawasih No.99 <br>
                Malang, Jawa Timur, Indonesia<br><br>
                <strong>Telepon:</strong> 0811 1111 0000<br>
                <strong>Email  :</strong> ilario@hotdish.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link Terkait</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Berita Terbaru</h4>
            <p>Dapatkan berita terbaru mengenai promo, diskon, tawaran, dan lain-lain.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelompok 2</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
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

</html>