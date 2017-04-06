<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>

<div class="ui-hero hero">
	<div class="inner">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="content">
					<h1 class="header">Search</h1>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="results mxw-960">
	<div class="inner">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="content">
					<?php if (have_posts()) : ?>

						<h1 class="page-title"><?php printf(__('Results for: %s'), '<span>"' . get_search_query() . '"</span>'); ?></h1>

						<?php while (have_posts()) : the_post(); ?>
							<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							<?php the_excerpt(); ?>
							<hr>
						<?php endwhile; ?>
					<?php else : ?>
						<div class="noresults">
							<h2>Sorry, couldnt find matches for <?php printf('<span>"' . get_search_query() . '"</span>'); ?></h2>
							<a class="btn" href="/">Go Home</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer();
