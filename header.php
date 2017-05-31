<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
		<script>
			var templateDir = "<?php echo get_template_directory_uri(); ?>";
		</script>
	</head>
	<body <?php body_class(); ?>>
			<!-- header -->
			<header class="header clear scroll" role="banner">
				<div class="header-inner row">
							<!-- logo -->
									<div class="logo col s2">
										<a href="<?php echo home_url(); ?>">
											<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
										</a>
									</div>
									<!-- /logo -->
									<!-- nav -->
									<nav class="col nav s10 right-align" role="navigation">
										<?php html5blank_nav(); ?>
									</nav>
									<!-- /nav -->
				</div>
				<button class="c-hamburger c-hamburger--rot hide-on-med-and-up">
					<span>toggle menu</span>
				</button>
			</header>
			<main>
			<!-- /header -->
