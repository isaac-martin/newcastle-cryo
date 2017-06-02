<?php /* Template Name: Home Page */ get_header(); ?>
<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
<section class="image-header valign-wrapper" style="background-image: url('<?php echo $background[0]; ?>')">
  <div class="image-content valign center-align">
    <h2 class="image-tagline">
      <?php the_field('featured_image_tagline') ?>
    </h2>
    <div class="buttons">
      <a href="/benefits" class="waves-effect waves-light btn">see benefits</a>
      <a href="/book" class="waves-effect waves-light btn">book now</a>
    </div>
  </div>
</section>
<section class="main-content">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <p class="page-intro">
          <?php the_field('page_intro') ?>
        </p>
      </div>
    </div>
    <div class="divider">
      &nbsp;
    </div>

    <?php if(get_field('icon_text_links')): ?>
    <div class="row home-cards">
    	<?php while(has_sub_field('icon_text_links')): ?>
        <a href="<?php the_sub_field('link'); ?>">
        <div class="col s12 m4 center-align home-card">
        <img src="<?php the_sub_field('icon'); ?>">
        <h4><?php the_sub_field('title'); ?></h4>
        <p data-mh="home-card"><?php the_sub_field('text'); ?></p>
        <span class="waves-effect waves-light btn"><?php the_sub_field('link_text'); ?></span>
      </div>
    	<?php endwhile; ?>
    </a>
    </div>
    <?php endif; ?>

  </div> <!-- End Container -->
<div class="newsletter-block fw">
  <div class="container">


  <div class="row no-mrg">
    <div class="col s12 m6">
      <div class="loop-inner w85-l">
        <h4>Stay in the loop.</h4>
        <p>Subscribe to our newsletter and stay up to date and get special deals.</p>
        <div class="social-icons-wrap">
          <?php include 'includes/social-icons.php'; ?>
        </div>
      </div>
    </div>
    <div class="col s12 m6">
      <form action="//Newcastlecryo.us16.list-manage.com/subscribe/post?u=ec9140defd555c0c55b8d3dd8&amp;id=539ebe0fb4" method="post" id="subForm" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">

      <div class="input-field">
      	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
        <label for="mce-EMAIL">Email Address </label>
      </div>
      <div class="input-field">
      	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
        	<label for="mce-FNAME">First Name </label>
      </div>
      	<div id="mce-responses" class="clear">
      		<div class="response" id="mce-error-response" style="display:none"></div>
      		<div class="response" id="mce-success-response" style="display:none"></div>
      	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ec9140defd555c0c55b8d3dd8_539ebe0fb4" tabindex="-1" value=""></div>
          <div class="clear"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn waves-effect waves-light">Join Now</button></div>
          </div>
      </form>
    </div>
  </div><!-- End Row -->
</div><!-- End Container -->
</div><!-- End newsleter block -->
</section>

<?php  get_footer(); ?>
