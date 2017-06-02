<?php get_header(); ?>

	<main class="container no-header-img" id="content">
		<div class="row">
		</div>
		<div class="row">
			<div class="col s12 l8">
				<?php
				query_posts('posts_per_page=1');
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!-- post thumbnail -->
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
								<div class="single-hero featured-img-cont" style="background-image:url('<?php echo $thumb['0'];?>')">
								</div>
							</a>

							<p><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?><?php the_time('F j, Y'); ?></p>

						<!-- /post thumbnail -->

						<!-- post title -->
						<div class="row">
						<h2 class="col s12 no-mrg">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<!-- /post title -->

						<!-- post details -->


						</div>
					<!-- /post details -->
					<div class="row">
						<div class="col s12">
							<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
						</div>
					</div>
					</article>
					<!-- /article -->


				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->

				<?php endif;


wp_reset_query(); ?>

			</div>
			<div class="col offset-s1 s3 hide-on-med-and-down">
				<?php get_sidebar(); ?>
			</div>
		</div>

		<section>
			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
