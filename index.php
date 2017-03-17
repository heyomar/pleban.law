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

<div class="room-sides mxw-960">
	<?php
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

		$args = array(
			'orderby' => 'date',
			'posts_per_page' => '4',
			'order'          => 'DESC',
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'paged' => $paged

		);
		$the_query = new WP_Query( $args );

	?>

	<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="post"><div class="date"><?php the_time( get_option( 'date_format' ) ); ?></div>
		<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h3>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink();?>" class="readmore">Read More</a>
		</div>
		<hr>
	<?php endwhile; ?>

	<?php else: ?>
		<p>Sorry, there are no posts to display</p>

	<?php endif;
		$big = 999999999; // need an unlikely integer ?>
	<div class="pagination"><?php
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $the_query->max_num_pages
		) );
	?></div>
</div>



<?php get_footer(); ?>
