<?php /* Template Name: What Is Cryo Page */ get_header(); ?>
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
    <li><a href="#story">our story</a></li>
      <li><a href="#services">services</a></li>
    <li><a href="#mgmt">management</a></li>
  </ul>
</div>


<?php if(get_field('stats')): ?>
  <section class="stats-block t-purple" id="story">
  <div class="container">
    <div class="row">
    <?php while(has_sub_field('stats')): ?>
        <div class="col s12 m4 center-align half-border-r" data-mh="stats">
          <p class="stats-counter">
            <span class="number"><?php the_sub_field('number')?></span>
            <?php the_sub_field('text')?>
          </p>
        </div>
    <?php endwhile; ?>
  </div>
</div>
</section>
<?php endif; ?>

<section class="map-block" >
<div class="container">
<div class="row">
<div class="col m6 s12" data-mh="map">
  <div class="map valign-wrapper w85-l">
      <h4 class="vertical-align center-align"><?php the_field('map_text');?></h4>
  </div>
</div>
  <div class="col m6 s12 valign-wrapper" data-mh="map">
    <div class="map-text vertical-align w85-r">
      <p class="t-purple"><?php the_field('map_description') ?></p>
    </div>
  </div>
</div>
</div>
</section>



<section class="services-block" id="services">
  <div class="container center-align">
    <div class="mrg-50">
      <h3>Services</h3>
      <p class="w50"><?php the_field('services_intro');?></p>
    </div>

    <div class="row mrg-50">
      <div class="col s12 m6 half-border-r left-align">
        <p class="w85-l"><?php the_field('left_col_text');?></p>
      </div>
      <div class="col s12 m6 left-align">
        <p class="w85-r"><?php the_field('right_col_text');?></p>
      </div>
    </div>

    <div class="row">
      <?php if(get_field('areas_of_practice')): ?>
      <div class="col s12 m6">
        <h5 class="t-purple mrg-50">Areas of Practice</h5>
        <ul class="services-list w85-l">
          <?php while(has_sub_field('areas_of_practice')): ?>
              <li><?php the_sub_field('list_item'); ?></li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>

      <?php if(get_field('personal_injury_types')): ?>
      <div class="col s12 m6">
        <h5 class="t-purple mrg-50">Personal injury Types</h5>
        <ul class="services-list w85-r">
          <?php while(has_sub_field('personal_injury_types')): ?>
              <li><?php the_sub_field('list_item'); ?></li>
          <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>


<section class="mgmt-block" id="mgmt">
  <div class="container center-align">
    <h3>Management</h3>
    <p><?php the_field('management_intro');?></p>
  </div>

  <?php if(get_field('management')): ?>
  <div class="mgmt-team row no-mrg">
    <?php while(has_sub_field('management')): ?>
      <div class="col s12 mgmt-single">
          <div class="col s12 m3">
          <img class="team-single-photo" src="<?php the_sub_field('photo'); ?>">
          </div>
          <div class="col s12 m9">
            <h3><?php the_sub_field('name'); ?></h3>
            <h4><?php the_sub_field('title'); ?></h4>
            <div class="divider" style="margin: 0;">

            </div>
              <p><?php the_sub_field('bio'); ?></p>
          </div>
        </div>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>

</section>









<?php get_footer(); ?>
