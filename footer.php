
	<footer>
		<div class="contact-footer mxw-960">
			<div class="inner">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="content">
							<div class="title">Need a Lawyer?<br>Contact Us.</div>

						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="content">
							<div class="contact">
								<a class="link no-border" href="">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/footer__icon-phone.svg" alt="">
									314.645.6666
								</a>
								<a class="link no-border" href="">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/footer__icon-fax.svg" alt="">
									314.645.7376
								</a>
								<a class="link no-border" href="#">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/footer__icon-email.svg" alt="">
									info@plebanlaw.com
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="secondary mxw-960">
			<div class="inner">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3">
						<div class="content">
							<div class="footernav">
								<?php wp_nav_menu( array( 'theme_location' => 'secondary-navigation' ) ); ?>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="content">
							<div class="signup">
								<h6 class="footer-section">Newsletter Sign&#8209;Up</h6>

									<form action="https://leverage.createsend.com/t/r/s/urldsh/" method="post" id="subForm">
									  <label for="fieldEmail">Email</label>
									  <input id="fieldEmail" name="cm-urldsh-urldsh" type="email" required />
									  <button type="submit">Submit</button>
									</form>

								<span>Connect&nbsp;With&nbsp;Us&nbsp;on <a href="#">LinkedIn</a></span>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-3 col-md-3">
						<div class="content">
							<div class="location">
								<h6 class="footer-section">Location</h6>
								<address class="">
									2010&nbsp;S&nbsp;Big&nbsp;Bend&nbsp;Blvd<br>
									St.louis MO, 63117
								</address>
								<a href="#">Get Directions</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="legal mxw-960">
			<div class="inner">
				<div class="row">
					<div class="col-xs-12">
						<div class="content">
							<small>
								&copy; 2016 Pleban &amp; Petruska Law. All Rights Reserved. <br><br>
								The information you obtain at this site is not advertising or legal advice. The choice of a lawyer is an important decision and should not be based solely upon advertisements. Consult an attorney for individual advice regarding your own situation. Past results afford no guarantee of future results. Every case is different and must be judged on its own merits.
							</small>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
</main>
<?php wp_footer(); ?>
<script defer src="<?php echo get_stylesheet_directory_uri(); ?>/build/bundle.js" type="text/javascript"></script>

</body>
</html>
