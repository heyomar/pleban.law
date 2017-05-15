<?php get_header(); ?>


<!--
		HERO
------------------------------------------------------------------------------->
<div class="ui-hero hero">
	<div class="inner">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="content">
					<h1 class="header">Case Results &amp; News</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part('template-parts/signup') ?>

<div class="room-sides mxw-960 case-and-news">
	<?php
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

		$args = array(
			'orderby' => 'date',
			'posts_per_page' 	=> '4',
			'order'						=> 'DESC',
			'post_type'				=> 'post',
			'post_status'			=> 'publish',
			'paged' => $paged

		);
		$the_query = new WP_Query( $args );?>

	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php if (has_category('Case Results')): ?>

			<div class="post-item">
				<div class="settlement">
					<object class="icon" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/blog__icon-gavel.svg"></object>
					<span class="copy">Settlement</span>
					<div class="type"><?php the_field('settlement_type') ?></div>
				</div>
				<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h3>
				<?php the_excerpt(); ?>

				<a href="<?php the_permalink();?>" class="readmore">Read More</a>
				</div>
				<hr>
		<?php else: ?>

			<div class="post-item">
				<div class="row">

					<?php if (has_post_thumbnail(get_the_id())) { ?>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="content">
								<div class="date"><?php the_time( get_option( 'date_format' ) ); ?></div>
								<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h3>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink();?>" class="readmore">Read More</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 hide-mobile show-tablet ">
							<div class="content">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
					<?php } else {?>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="content">
								<div class="date"><?php the_time( get_option( 'date_format' ) ); ?></div>
								<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h3>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink();?>" class="readmore">Read More</a>
							</div>
						</div>
					<?php } ?>
				</div>

			</div>
			<hr>
		<?php endif; ?>

	<?php endwhile; ?>

	<?php else: ?>
		<p>Sorry, there are no posts to display</p>

	<?php endif;?>
	<div class="pagination">
		<?php
			$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $the_query->max_num_pages
			) );
		?>
	</div>
	<?php wp_reset_query(); ?>
</div>

<?php get_footer(); ?>
