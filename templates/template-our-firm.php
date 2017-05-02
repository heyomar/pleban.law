<?php
/**
 * Template Name: Our Firm
 */
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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


		<?php get_template_part('template-parts/signup') ?>

		<div class="ourfirm-body mxw-960 room-sides">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="content">
						<h1 class="title"><?php the_field('title'); ?></h1>
						<h5 class="subtitle"><?php the_field('intro_copy'); ?></h5>
					</div>
				</div>
			</div>

			<div class="ourfirm-copy">
				<div class="inner">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="content">
								<?php the_field('left_column_copy'); ?>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="content">
								<?php the_field('right_column_copy'); ?>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="content center-text">
								<br><br>
								<a class="btn" href="#">Meet Our Attorneys</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php endif ?>
<?php get_footer();
