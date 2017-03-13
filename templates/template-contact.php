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
							<div class="contact-details">
								<div class="inner">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="content">
												<strong>PHONE</strong><br>
												314.645.6666
											</div>
										</div>

										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="content">
												<strong>EMAIL</strong><br>
												<a class="" href="#">info@plebanlaw.com</a>
											</div>
										</div>

										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="content">
												<strong>FAX</strong><br>
												314.645.7376
											</div>
										</div>

										<div class="col-xs-12 col-sm-6 col-md-6">
											<div class="content">
												<strong>ADDRESS</strong>
												<address class="">
													2010 S. Big Bend Blvd
													St.Louis, MO 63117
												</address>
											</div>
										</div>

										<div class="col-xs-12">
											<div class="content">
												<div class="linkedin">
													<span></span>
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
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; ?>
	<?php endif ?>
<?php get_footer(); ?>
