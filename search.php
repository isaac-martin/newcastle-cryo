<?php get_header(); ?>

	<section class="container no-header-img">
		<div class="row">

			<h1>m<?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="col s12 l6" data-mh="single-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- post thumbnail -->
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				<div class="featured-img-cont" data-original="<?php echo $thumb['0'];?>" style="background-image:url('<?php echo $thumb['0'];?>')">
				</div>
			</a>

			<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?><?php the_time('F j, Y'); ?>

		<!-- /post thumbnail -->

		<!-- post title -->
		<div class="row">
		<h3 class="col s12 no-mrg" data-mh="h3">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h3>
		<!-- /post title -->

		<!-- post details -->
		<p class="date right-align col s4 no-mrg"></p>

		</div>
	<!-- /post details -->
	<div class="row">
		<div class="col s12">
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		</div>
	</div>
	</article>
	<!-- /article -->

	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

</div>
</section>

<?php get_footer(); ?>
