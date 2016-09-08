<?php
/*
 Template Name: About Page
 *
*/
?>
<?php get_header(); ?>

			<div id="content" class="pad100">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-all d-all cf" role="main">
						
							<h1 class="text-center"><?php the_title(); ?></h1>
														
								<div class="m-all t-1of3 d-2of7 sidebar cf">
									<?php the_post_thumbnail( 'feat-640' ); ?>

								</div>
								
								<div class="m-all t-2of3 d-5of7 last-col entry-content cf">
									<?php the_content(); ?>
								</div>	
							
						</div><!--#main-->

				</div><!--#inner-content-->

			</div><!--#content-->
			
			<div class="hobbies cf">			
				<div class="wrap">
				<div class="m-all t-1of4 d-1of4">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/house.svg" alt="CristinaRobinson.net" />
					<p>I keep a blog at <a href="http://www.cristinarobinson.net">CristinaRobinson.net</a> which is updated occasionally on my domestic and life adventures.</p> 
				</div>
				<div class="m-all t-1of4 d-1of4">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/starwars.svg" alt="Star Wars" />
					<p>I’ve been in a relationship with Star Wars for over 20 years. <a href="http://www.cristinarobinson.net/life/met-george-lucas/">Meeting George Lucas</a> is on my list of bragging rights.</p>
				</div>
				<div class="m-all t-1of4 d-1of4">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/tv.svg" alt="tv and movies" />
					<p>I’m an avid cinema and TV lover. I keep track of my movies via a film diary on <a href="http://letterboxd.com/lovelygeek/">Letterboxd</a> and TV shows on <a href="http://tvtag.com/darthcena">tvtag</a>.</p>
				</div>
				<div class="m-all t-1of4 d-1of4 last-col">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/flute.svg" alt="flute" />
					<p>I like to pretend I am in an orchestra by playing the flute along to the music of my favorite movie scores.</p>
				</div>
			</div>
			</div><!-- .hobbies -->
			
<?php get_footer(); ?>
