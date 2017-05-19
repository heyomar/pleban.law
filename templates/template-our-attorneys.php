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

<?php # get_template_part('template-parts/signup') ?>

<div class="inner-space mxw-960 parent">
	<div class="inner">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="content">
					<h1 class="title"><?php the_field('title'); ?></h1>
					<div class="copy">
						<?php the_field('body_copy'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="attorneys mxw-960">
	<div class="inner">
		<div class="row">

			<?php

				$args = array(
					'orderby' => 'title',
					'order' => 'ASC',
					'posts_per_page' 	=> '-1',
					'post_type'				=> 'attorney',
					'post_status'			=> 'publish'

				);
				$the_query = new WP_Query( $args );?>

				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="content">

								<div class="attorney" style="background-image:url(<?php the_field('attorneys_landing_page_image') ?>);">
									<div class="name">
										<div class="thename"><?php the_title(); ?></div>
										<div class="position"><?php the_field('position'); ?></div>
										<a class="link arrow" href="<?php the_permalink(); ?>"></a>
									</div>
								</div>
							</div>
						</div>

				<?php endwhile; ?>

				<?php endif;?>


		</div>
	</div>
</div>
<?php wp_reset_query(); ?>
	<?php endwhile; ?>
	<?php endif ?>
<?php get_footer();
