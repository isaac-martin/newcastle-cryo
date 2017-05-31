<?php get_header(); ?>

	<main class="container no-header-img" role="main">
		<div class="row">
<div class="col s12 l8">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<p><?php the_category(' / ') ?></p>


		<div class="row">
			<div class="col s12">
				<h1 class="single-post-title"><?php the_title(); ?></h1>
			</div>
			<div class="col s12">
				<span class="date"><?php the_time('F j, Y'); ?></span>
			</div>
		</div>


			<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<?php the_content(); // Dynamic Content ?>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>



		<?php endwhile; ?>

		<?php endif; ?>

</div>

	<div class="col s3 offset-s1 hide-on-med-and-down">
		<?php get_sidebar(); ?>
	</div>
	</div>
	<div class="related-container row">
<div class="col s12">
	<h2>Related Posts</h2>
	<div class="dotted-line">&nbsp;</div>
</div>

		<?php
// Default arguments
$args = array(
	'posts_per_page' => 2, // How many items to display
	'post__not_in'   => array( get_the_ID() ), // Exclude current post
	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

// Check for current post category and add tax_query to the query arguments
$cats = wp_get_post_terms( get_the_ID(), 'category' );
$cats_ids = array();
foreach( $cats as $wpex_related_cat ) {
	$cats_ids[] = $wpex_related_cat->term_id;
}
if ( ! empty( $cats_ids ) ) {
	$args['category__in'] = $cats_ids;
}

// Query posts
$wpex_query = new wp_query( $args );

// Loop through posts
foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>

<article class="col s6" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- post thumbnail -->
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div class="single-hero featured-img-cont" style="background-image:url('<?php echo $thumb['0'];?>')">
			</div>
		</a>

		<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' / '; } ?>

	<!-- /post thumbnail -->

	<!-- post title -->
	<div class="row">
	<h4 class="col s8 no-mrg">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</h4>
	<!-- /post title -->

	<!-- post details -->
	<p class="date right-align col s4 no-mrg"><?php the_time('F j, Y'); ?></p>

	</div>
<!-- /post details -->
<div class="row">
	<div class="col s12">
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
	</div>
</div>
</article>

<?php
// End loop
endforeach;

// Reset post data
wp_reset_postdata(); ?>
	</div>
	</main>


<?php get_footer(); ?>
