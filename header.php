<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- META -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- FONTS -->
		<script src="https://use.typekit.net/xqo1dlx.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>


		<!-- CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/build/bundle.css" rel="stylesheet">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<nav role="navigation">

					<a class="site-logo" href="/">
						<img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/site__logo.svg" alt="">
					</a>

					<div class="hamburger">
						<img class="bars position" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/site__mobile-bars.svg" alt="">
						<img class="cross position" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/site__mobile-cross.svg" alt="">
					</div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary-navigation' ) ); ?>

		</nav>
	<main>
