<?php
  // Get the header template
  get_header();

  // Get the featured image of the shop page
  $shopFeaturedImg = wp_get_attachment_image_src( get_post_thumbnail_id( wc_get_page_id( 'shop' ) ), 'full' );
?>
<section class="shop-masthead" style="background: url('<?php echo $shopFeaturedImg[0]; ?>');">
  <div>
    <h1>Shop Page</h1> <!-- Title for the shop page -->
  </div>
</section>
<section class="shop-body">
  <?php
    // Hook for actions before the shop loop (e.g., breadcrumbs)
    do_action('woocommerce_before_shop_loop');

    // Display products using WooCommerce shortcode
    echo do_shortcode ('[products limit="6" columns="2"]');

    // Hook for actions after the shop loop (e.g., pagination)
    do_action('woocommerce_after_shop_loop');
  ?>
</section>
<?php
  // Get the footer template
  get_footer();
?>