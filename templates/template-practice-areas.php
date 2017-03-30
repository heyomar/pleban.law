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
							<h1 class="title"><?php the_field('title'); ?></h1>
							<div class="copy">
								<?php the_field('body_copy'); ?>
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
							<a class="link plus " href="/personal-injury">&plus;</a>
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
								<a class="link plus " href="/personal-injury">&plus;</a>
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
												<a class="link plus" href="/employment">&plus;</a>
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
													<a class="link plus " href="/employment">&plus;</a>
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
																	<a class="link plus small" href="/criminal-&amp;-dwi">&plus;</a>
																	<div class="hover-content">
																		<h4 class="title">Criminal &amp; DWI</h4>
																		<br>
																		<a class="link plus small" href="/criminal-&amp;-dwi">&plus;</a>
																	</div>
																</div>
															</div>
															<div class="col-xs-12 col-sm-6">
																<div class="content civil hover-effects">
																	<h4 class="title">Other Civil <br> Litigation</h4>
																	<a class="link plus small" href="/other-civil-litigation">&plus;</a>
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
																		<a class="link plus small" href="/other-civil-litigation">&plus;</a>
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
