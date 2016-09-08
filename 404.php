<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						<!-- <article id="post-not-found" class="hentry cf"> -->

							<header class="article-header">

								<h1>404 - Page Not Found</h1>

							</header>

							<section class="entry-content">

								<p>Sorry, but the page you requested has not been found.</p>

								<p>I'm not blaming you, but have you checked your address bar? There might be a typo in the URL.</p>
								
								<p>If there isn't, you can go to my <a href="http://www.lovelygeek.net">home page</a> or view my site map:
								<?php echo do_shortcode("[pagelist]"); ?>
								My colophon can be found via <a href="http://www.lovelygeek.net/humans.txt">humans.txt</a>.</p>
								
								<p>All of my blog posts have either been moved to my site <a href="http://www.cristinarobinson.net">CristinaRobinson.net</a> or privately archived.</p>
								
								<p>One last thing, if you're feeling so kind, please <a href="http://www.lovelygeek.net/contact/">tell me</a> about this error, so that I can fix it. Thanks!</p>

							</section>

						<!-- </article> -->

					</div>
					
					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
