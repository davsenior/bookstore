<footer>
  <!-- Top footer section -->
  <section class="top-footer row">
    <!-- First widget area -->
    <div class="first-widget-area col-sm-12 col-md-3 col-lg-3">
      <!-- Link to home page -->
      <a href="<?php echo esc_url( home_url() );?>">
        <!-- Display content of first widget area -->
        <?php dynamic_sidebar( 'footer-widget-area-one' ); ?>
      </a>
    </div>
    <!-- Second widget area -->
    <div class="second-widget-area col-sm-12 col-md-3 col-lg-6">
      <!-- Display content of second widget area -->
      <?php dynamic_sidebar( 'footer-widget-area-two' ); ?>
    </div>
    <!-- Third widget area -->
    <div class="third-widget-area col-sm-12 col-md-3 col-lg-3">
      <!-- Display content of third widget area -->
      <?php dynamic_sidebar( 'footer-widget-area-three' ); ?>
    </div>
  </section>
  <!-- Bottom footer section -->
  <section class="bottom-footer">
    <p>Website Created by: David Senior</p>
  </section>
</footer>
</body>
</html>
