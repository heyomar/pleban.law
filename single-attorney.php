

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="ui-hero hero">
		<div class="inner">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="content">
						<h1 class="header">Our Attorneys</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="single-attorney mxw-960 room-sides">
		<div class="inner">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="content">


						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<img class="profile-image" src="<?php the_field('profile_image'); ?>" alt="">
								<a class="message-btn" href="">Send Message</a>
							</div>
							<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
								<h3><?php the_title(); ?></h3>
								<h5><?php the_field("position"); ?></h5>

								<?php if( have_rows('quick_bio') ):
									    while ( have_rows('quick_bio') ) : the_row(); ?>


													<ul>
														<li><?php the_sub_field('fact'); ?></li>
													</ul>

									    <?php endwhile; ?>

									<?php else : endif; ?>
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
