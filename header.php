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

		<!-- TITLE -->
		<!-- <title><?php wp_title(); ?></title> -->

		<!-- CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/styles/bundle.css" rel="stylesheet">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<nav role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-navigation' ) ); ?>
		</nav>
	<main>
