<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<p>
			You've Landed on Index.php, go
			<a href="/">Home!</a>
		</p>
  <?php endwhile; ?>
	<?php endif ?>
<?php get_footer(); ?>
