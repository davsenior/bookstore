<?php
/**
 * Template Name: Custom Post-Type books Layout
 * Template Post Type: books
 */
// Fetch the header template
get_header();

// Get the featured image of the current post
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<!-- Post masthead section -->
<section class="post-masthead" style="background: url('<?php echo $featuredImg[0]; ?>');">
  <div>
    <!-- Post title -->
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<!-- Main content and related posts section -->
<section class="row single-post-row-one">
  <!-- Main content section -->
  <div class="col-sm-12 col-md-8 col-lg-8 post-content">
    <!-- Post content -->
    <p><?php echo get_the_content(); ?></p>
    <!-- Post date -->
    <p><?php echo get_the_date(); ?></p>
    <!-- Post tags -->
    <p><?php the_tags(); ?></p>
    <!-- Post categories -->
    <p>Category: <?php echo the_category(',', '', get_the_ID()); ?></p>
  </div>

  <!-- Related posts section -->
  <aside class="post-list col-sm-12 col-md-4 col-lg-4 row related-posts">
    <?php
    // Query for related posts of the same post type ('books')
    $the_query = new WP_Query(array('post_type' => 'books', 'posts_per_page' => 3, 'order' => 'desc'));
    while ($the_query->have_posts()) : $the_query->the_post();
    ?>
      <article class="col-sm-12 col-md-12 col-lg-12">
        <!-- Related post image -->
        <a href="<?php the_permalink(); ?>">
          <img src="<?php echo $featuredImg[0]; ?>" alt="post featured image">
        </a>
        <!-- Related post title -->
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </article>
    <?php
    endwhile;
    // Reset post data after the loop
    wp_reset_postdata();
    ?>
  </aside>
</section>

<?php
// Fetch the footer template
get_footer();
?>
