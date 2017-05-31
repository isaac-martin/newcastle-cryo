<?php get_header(); ?>
<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>



  <div class="container" style="padding-top: 150px;">

		<h1 class="center">404! Sorry Page Not Found</h1>
		<h3 class="center">Return <a href="<?php echo site_url(); ?>">Home</a></h3>

    <h4 style="margin: 50px 0;" class="center">Our Latest Posts</h4>

    <?php get_template_part('loop'); ?>
  </div>


<?php get_footer(); ?>
