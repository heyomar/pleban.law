<?php
/**
 * Template Name: Our Attorneys
 */
?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<!--
		HERO
------------------------------------------------------------------------------->
<div class="ui-hero hero">
	<div class="inner">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="content">
					<h1 class="header"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="inner-space mxw-960">
	<div class="inner">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="content">
					<h1 class="title">Lorem Ipsum</h1>
					<div class="copy">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="attorneys mxw-960">
	<div class="inner">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="content">
					<div class="attorney">
						<div class="name">
							<h5>Diadem Exhalted</h5>
							<a class="link plus " href="#"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="content">
					<div class="attorney">
						<div class="name">
							<h5>Diadem Exhalted</h5>
							<a class="link plus " href="#"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="content">
					<div class="attorney">
						<div class="name">
							<h5>Diadem Exhalted</h5>
							<a class="link plus" href="#"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="content">
					<div class="attorney">
						<div class="name">
							<h5>Diadem Exhalted</h5>
							<a class="link plus " href="#"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<?php endwhile; ?>
	<?php endif ?>
<?php get_footer(); ?>
