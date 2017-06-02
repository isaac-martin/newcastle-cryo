<?php /* Template Name: Text Page */ get_header(); ?>
<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
<section class="image-header valign-wrapper" style="background-image: url('<?php echo $background[0]; ?>')">
  <div class="image-content valign center-align">
    <h2 class="image-tagline">
      <?php the_field('image_caption') ?>
    </h2>
  </div>
</section>

<div class="container">
    <?php the_content()?>
</div>
<?php get_footer(); ?>
