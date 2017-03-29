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
							<h1 class="header">Case Results &amp; News</h1>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="post room-sides mxw-960">
			<div class="inner">
				<div class="date"><?php the_time( get_option( 'date_format' ) ); ?></div>
				<h2 class="title"><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h2>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="content">
							<?php the_content(); ?>

						</div>
					</div>
				</div>
			</div>
			<div class="center-text"><a class="btn" href="/case-results-news">View More Case Results &amp; News</a></div>
		</div>
	<?php endwhile; ?>
	<?php endif ?>
<?php get_footer(); ?>
