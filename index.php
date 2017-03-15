<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php
		$args = array(
			'posts_per_page' => -1,
			'orderby'        => 'date',
			'order'          => 'DESC',
			'post_type'      => 'post',
			'post_status'    => 'publish'

		);
		$lastposts = get_posts( $args );
		foreach ( $lastposts as $post ) :
		  setup_postdata( $post ); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt() ?>
		<?php endforeach;
		wp_reset_postdata(); ?>

<?php wp_reset_postdata(); ?>
  <?php endwhile; ?>
	<?php endif ?>
<?php get_footer(); ?>
