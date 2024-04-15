<?php
/**
 * Template Name: Homepage
 * Template Post Type: page
 */
// Fetch the header template
get_header();
?>
  <main>
    <!-- Masthead section -->
    <section class="masthead" style="background-image: url('<?php echo wp_kses_post(get_field('image')); ?>')">
      <div>
        <!-- Main heading -->
        <h1><?php echo wp_kses_post(get_field('main_heading')); ?></h1>
        <!-- Sub-heading -->
        <h2><?php echo wp_kses_post(get_field('sub-heading')); ?></h2>
      </div>
    </section>

    <!-- Home row one section -->
    <section class="home-row-one row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <!-- Title for the first row -->
        <h3><?php echo wp_kses_post(get_field('row_one_title')); ?></h3>
        <!-- Text content for the first row -->
        <p><?php echo wp_kses_post(get_field('row_one_text')); ?></p>
      </div>
    </section>

    <!-- Home row two section -->
    <section class="home-row-two row">
      <div class="col-sm-12 col-md-8 col-lg-6">
        <!-- Title for the second row -->
        <h3><?php echo wp_kses_post(get_field('row_two_title')); ?></h3>
        <!-- Text content for the second row -->
        <p><?php echo wp_kses_post(get_field('row_two_text')); ?></p>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-6">
        <!-- Image for the second row -->
        <img src="<?php echo wp_kses_post(get_field('row_two_image')); ?>" alt="<?php echo wp_kses_post(get_field('row_two_image_alt_text')); ?>">
      </div>
    </section>

    <!-- Home row three section -->
    <section class="home-row-three row">
      <!-- Content for the third row -->
      <?php echo wp_kses_post(get_field('row_three_content')); ?>
    </section>
  </main>

<?php
// Fetch the footer template
get_footer();
?>