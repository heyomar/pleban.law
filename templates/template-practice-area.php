<?php
/**
 * Template Name: Practice Area
 */
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="ui-hero hero">
			<div class="inner">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="content">
							<a class="boxlink" href="<?php echo get_site_url(); ?>/practice-areas"><h1 class="header">Practice Areas</h1></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="practice-area mxw-960">
			<div class="inner">
				<h3><?php the_title(); ?></h3>
				<div class="intro-copy">
					<?php the_field('intro_copy'); ?>
				</div>
				<div class="row">
					<?php if( have_rows('section') ):
						while ( have_rows('section') ) : the_row(); ?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

							<div class="content">
								<h5><?php the_sub_field('section_title'); ?></h5>
								<?php the_sub_field('section_copy'); ?><br>
							</div>
						</div>

					<?php endwhile; ?>
					<?php else : endif; ?>

				</div>
			</div>
		</div>

	<?php endwhile; ?>
	<?php endif ?>
<?php get_footer();
