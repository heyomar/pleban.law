<?php
/**
 * Template Name: Home
 */
?>

<!--END======================================================================-->
<?php get_header(); ?>


<!--
		HERO
------------------------------------------------------------------------------->
		<div class="ui-hero hero">
			<div class="inner">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="content">

						</div>
					</div>
				</div>
			</div>
		</div>
<!--
		PRACTICE AREAS
------------------------------------------------------------------------------->
<div class="center-text inner-space mxw-960">
	<div class="inner">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="content">
					<h1 class="title"><?php the_field('pa_title'); ?></h1>
					<div class="copy mxw-700">
						<?php the_field('pa_copy'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
		GRID - PRACTICE AREAS
------------------------------------------------------------------------------->
<div class="areas mxw-960">
	<div class="inner">
		<div class="row">

			<div class="col-xs-12 col-sm-6">
				<div class="content injury">
					<h3 class="title">Personal Injury</h3>
					<a class="link plus " href="#">&plus;</a>
					<div class="hover-content">
						<h3 class="title">Personal Injury</h3>
						<ul class="list">
							<li>False Arrest</li>
							<li>Excessive Force</li>
							<li>Wrongful Conviction</li>
							<li>Litigation</li>
							<li>Contracted Law</li>
							<li>Appeals</li>
							<li>Consumer Rights</li>
						</ul>
						<a class="link plus " href="#">&plus;</a>
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
										<a class="link plus" href="#">&plus;</a>
										<div class="hover-content">
											<h3 class="title">Employment</h3>
											<ul class="list">
												<li>Discrimination</li>
												<li>Harassment/Sexual Harassment</li>
												<li>Wrongful Discharge</li>
												<li>Whistleblower</li>
												<li>Administrative Preceedings</li>
												<li>Free Speech False Claims Act</li>
											</ul>
											<a class="link plus " href="#">&plus;</a>
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
															<a class="link plus small" href="#">&plus;</a>
															<div class="hover-content">
																<h4 class="title">Criminal &amp; DWI</h4>
																<br>
																<a class="link plus small" href="#">&plus;</a>
															</div>
														</div>
													</div>
													<div class="col-xs-12 col-sm-6">
														<div class="content civil hover-effects">
															<h4 class="title">Other Civil <br> Litigation</h4>
															<a class="link plus small" href="#">&plus;</a>
															<div class="hover-content">
																<h4 class="title">Other Civil <br> Litigation</h4>
																<ul class="list">
																	<li>False Arrest</li>
																	<li>Excessive Force</li>
																	<li>Wrongful Conviction</li>
																	<li>Litigation</li>
																	<li>Contracted Law</li>
																	<li>Appeals</li>
																	<li>Consumer Rights</li>
																</ul>
																<a class="link plus small" href="#">&plus;</a>
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
<!--
		CASE RESULTS
------------------------------------------------------------------------------->
<div class="case-results">
	<div class="inner mxw-960">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<div class="content">
					<h1>Case Results</h1>
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>

			<div class="col-xs-12 col-sm-4 col-md-3">
				<div class="content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
	</div>
</div>
<!--
		NEWS
------------------------------------------------------------------------------->
<?php

	$args = array(
		'orderby' => 'date',
		'posts_per_page' 	=> '3',
		'order'						=> 'DESC',
		'post_type'				=> 'post',
		'post_status'			=> 'publish',
		'category_name'  => 'uncategorized'

	);
	$the_query = new WP_Query( $args );?>


<div class="news mxw-960">
	<div class="inner">
		<h1 class="title center-text">News</h1>
		<div class="row">

		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<div class="col-xs-12 col-sm-4 col-md-4">
				<div class="content">
					<img class="thumbnail" src="<?php the_post_thumbnail_url(); ?>" alt="">
					<span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span>
					<h3 class="title"><a href="<?php the_permalink();?>"><?php the_title() ;?></a></h3>
					<a href="<?php the_permalink();?>" class="readmore">Read More</a>
				</div>
			</div>

		<?php endwhile; ?>

		<?php endif;?>
		</div>
	</div>
</div>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>
<!--END======================================================================-->
