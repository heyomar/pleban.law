<?php
/**
 * Thank you page for form submissions
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


		<div class="thank-you-body mxw-960 room-sides parent">

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="content">
            <h1 class="title">Submitted Successfully!</h1>
            <p>Thank you for contacting Pleban Law.  We look forward to reviewing your message, and if appropriate, following up a phone call or message to set up a meeting.
            In the meantime, we encourage you to continue to explore <a href="/practice-areas">our services</a> and some of our <a href="/news">case results.</a></p>
					</div>
				</div>
			</div>

		</div>

	<?php endwhile; ?>
	<?php endif ?>
<?php get_footer();
