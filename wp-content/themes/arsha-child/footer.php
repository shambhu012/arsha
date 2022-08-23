<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <?php
            if(is_active_sidebar('footer1')):?>
            <?php dynamic_sidebar('footer1'); ?>
          <?php endif;?>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <?php
            if(is_active_sidebar('footer2')):?>
            <?php dynamic_sidebar('footer2'); ?>
          <?php endif;?>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <?php
            if(is_active_sidebar('footer3')):?>
            <?php dynamic_sidebar('footer3'); ?>
          <?php endif;?>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
             <?php
            if(is_active_sidebar('footer4')):?>
            <?php dynamic_sidebar('footer4'); ?>
          <?php endif;?>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
  <?php wp_footer(); ?>

</body>

</html>