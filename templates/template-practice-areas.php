<?php
/**
 * Template Name: Practice Areas
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

		<div class="mxw-960 inner-space">
			<div class="inner">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="content">
							<h1 class="title">Practice Areas</h1>
							<div class="copy">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="areas mxw-960">
			<div class="inner">
				<div class="row">

					<div class="col-xs-12 col-sm-6">
						<div class="content injury">
							<h3 class="title">Personal Injury</h3>
							<a class="link plus " href="#">&plus;</a>
							<div class="hover-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="content">

							<div class="employ">
								<div class="inner">
									<div class="row">

										<div class="col-xs-12 col-sm-12">
											<div class="content employment">
												<h3 class="title">Employment</h3>
												<a class="link plus " href="#">&plus;</a>
												<div class="hover-content">
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
												</div>
											</div>
										</div>

										<div class="col-xs-12 col-md-12">
											<div class="content">

												<div class="inner-half">
													<div class="inner">
														<div class="row">
															<div class="col-xs-12 col-sm-6">
																<div class="content criminal">
																	<h4 class="title">Criminal &amp; DWI</h4>
																	<a class="link plus " href="#">&plus;</a>
																	<div class="hover-content">
																		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
																	</div>
																</div>
															</div>
															<div class="col-xs-12 col-sm-6">
																<div class="content civil">
																	<h4 class="title">Other Civil <br> Litigation</h4>
																	<a class="link plus " href="#">&plus;</a>
																	<div class="hover-content">
																		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
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
