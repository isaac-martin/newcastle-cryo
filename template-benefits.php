<?php /* Template Name: Benefits Page */ get_header(); ?>
<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
<section class="image-header valign-wrapper" style="background-image: url('<?php echo $background[0]; ?>')">
  <div class="image-content valign center-align">
    <h2 class="image-tagline">
      <?php the_field('image_caption') ?>
    </h2>
  </div>
</section>


<div class="secondary-menu center-align" id="prpl-menu">
  <ul>
      <li><a href="#ice">why is it better than an ice bath?</a></li>
      <li><a href="#recovery">recovery</a></li>
      <li><a href="#health">health &amp; wellness</a></li>
      <li><a href="#spa">spa &amp; beauty</a></li>
  </ul>
</div>



<section class="ice-block" id="ice">
  <div class="container">
    <h3 class="center-align">Why Is It Better Than an Ice Bath?</h3>
    <?php the_field('ice_content');?>
  </div>
</section>

<section class="recovery-block" id="recovery">
  <div class="container">
    <h3>Recovery</h3>
    <?php the_field('recovery_content');?>
  </div>
</section>

<section class="health-block" id="health">
  <div class="container">
    <h3>Health &amp; Wellness</h3>
    <?php the_field('wellness_content');?>
  </div>
</section>

<section class="spa-block" id="spa">
  <div class="container">
    <h3>Spa &amp; Beauty</h3>
    <?php the_field('spa_content');?>
  </div>
</section>



<?php get_footer(); ?>
