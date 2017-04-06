<?php
/**
 * Template Name: Contact
 */
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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

		<div class="contact-us mxw-960 room-sides">
			<div class="inner">
				<h1 class="title">Contact Us</h1>
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="content">
							<div class="copy">
								<?php the_field('body_copy'); ?>
							</div>
							<div class="contact-details">
								<div class="inner">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="content">
												<strong>PHONE</strong><br>
												<?php the_field("phone") ?>
											</div>
										</div>

										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="content">
												<strong>EMAIL</strong><br>
												<a class="" href="#"><?php the_field("email"); ?></a>
											</div>
										</div>

										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="content">
												<strong>FAX</strong><br>
												<?php the_field("fax"); ?>
											</div>
										</div>

										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="content">
												<strong>ADDRESS</strong>
												<address class="">
													<?php the_field("address"); ?>
												</address>
											</div>
										</div>

										<div class="col-xs-12">
											<div class="content">
												<div class="linkedin">
													<object class="icon" type="image/svg+xml" data="<?php echo get_stylesheet_directory_uri(); ?>/assets/contact__icon-linkedin.svg">

													</object>
													Connect With Us on <a href="#">LinkedIn</a>
												</div>
											</div>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; ?>
	<?php endif ?>
<?php get_footer();
