<?php /* Template Name: Home Page */ get_header(); ?>
<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
<section class="image-header valign-wrapper" style="background-image: url('<?php echo $background[0]; ?>')">
  <p class="phone"><?php the_field('phone_number','options');?></p>
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
      <form action="http://prudenceconsulting.createsend.com/t/d/s/nvjky/" method="post" id="subForm">
  <div class="input-field">
    <input id="fieldName" name="cm-name" type="text" />
    <label for="fieldName">Name</label><br />
  </div>
  <div class="input-field">
      <input class="validate" id="fieldEmail" name="cm-nvjky-nvjky" type="email" required />
      <label for="fieldEmail">Email</label>
  </div>

      <select id="fieldkhuyil" name="cm-fo-khuyil">
          <option value="" selected="true"  disabled="disabled">Industry</option>
          <option value="1403601">Legal</option>
          <option value="1403602">Allied Health</option>
          <option value="1403603">Other</option>
      </select>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>

</form>
    </div>
  </div><!-- End Row -->
</div><!-- End Container -->
</div><!-- End newsleter block -->
</section>

<?php  get_footer(); ?>
