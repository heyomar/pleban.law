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


		<div class="areas mxw-960">
			<div class="inner">
				<div class="row">

					<div class="col-xs-12 col-sm-6">
						<div class="content injury">
							<h3 class="title">Personal Injury</h3>
							<a class="link plus " href="#">&plus;</a>
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
																</div>
															</div>
															<div class="col-xs-12 col-sm-6">
																<div class="content civil">
																	<h4 class="title">Other Civil <br> Litigation</h4>
																	<a class="link plus " href="#">&plus;</a>
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
