<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="hero">
			<div class="inner">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="content">

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="practice-areas mxw-960">
			<div class="inner">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="content">
							<h1 class="title">Practive Areas</h1>
							<p class="copy">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="case-results mxw-960">
			<div class="inner">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
						<div class="content">
							<h1>Case Studies</h1>
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

		<div class="news mxw-960">
			<div class="inner">
				<h1>News</h1>
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="content">
							<img src="" alt="">
							<span class="date">October 5, 2040</span>
							<h3 class="title">Article Title</h3>
							<a href="" class="readmore">Read More</a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="content">
							<img src="" alt="">
							<span class="date">October 5, 2040</span>
							<h3 class="title">Article Title</h3>
							<a href="" class="readmore">Read More</a>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="content">
							<img src="" alt="">
							<span class="date">October 5, 2040</span>
							<h3 class="title">Article Title</h3>
							<a href="" class="readmore">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
  <?php endwhile; ?>
	<?php endif ?>
<?php get_footer(); ?>
