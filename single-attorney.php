

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

							<div class="col-xs-12 col-sm-3">
								<img class="profile-image" src="<?php the_field('profile_image'); ?>" alt="">
								<a class="message-btn" href="mailto:<?php the_field('email_address') ?>">Send Message</a>
							</div>

							<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
								<div class="right-column">
									<h3><?php the_title(); ?></h3>
									<h5><?php the_field("position"); ?></h5>

									<div class="quick-bio bottom-space">
										<ul class="list">
											<?php if( have_rows('quick_bio') ):
												    while ( have_rows('quick_bio') ) : the_row(); ?>

																	<li class="list-item"><?php the_sub_field('fact'); ?></li>

													<?php endwhile; ?>
											<?php else : endif; ?>
										</ul>
									</div>


									<div class="bar-admissions bottom-space">
										<h5 class="title">Bar Admissions</h5>
											<?php if( have_rows('bar_dates') ):
												    while ( have_rows('bar_dates') ) : the_row(); ?>

														<div class="row">
															<div class="col-xs-2">
																<div class="content">
																	<strong><?php the_sub_field('year'); ?></strong>
																	<br>
																</div>
															</div>

															<div class="col-xs">
																<div class="content">
																	<?php the_sub_field('info'); ?>
																	<br>
																</div>
															</div>
														</div>
													<?php endwhile; ?>
											<?php else : endif; ?>
									</div>


									<div class="pro-memberships bottom-space">
										<h5 class="title">Proffesional Memberships &amp; Associations</h5>
											<div class="row">
												<div class="col-xs-12">
													<div class="content">
														<?php if( have_rows('organizations') ):
															while ( have_rows('organizations') ) : the_row(); ?>
																<?php the_sub_field('organization'); ?><br>
														<?php endwhile; ?>
														<?php else : endif; ?>
													</div>
												</div>
											</div>
									</div>


									<div class="other-experience bottom-space">
										<h5 class="title">Other Experience &amp; Awards</h5>
										<?php if( have_rows('awards') ):
											    while ( have_rows('awards') ) : the_row(); ?>

													<div class="row">
														<div class="col-xs-3">
															<div class="content">
																<strong><?php the_sub_field('years'); ?></strong>
																<br>
															</div>
														</div>

														<div class="col-xs">
															<div class="content">
																<?php the_sub_field('description'); ?>
																<br>
															</div>
														</div>
													</div>

												<?php endwhile; ?>
										<?php else : endif; ?>
									</div>


								</div>
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
