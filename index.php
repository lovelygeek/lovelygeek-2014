<?php get_header(); ?>

	<div class="hero-container cf">
		<div class="intro">
			<h1>Hello, I’m Cristina</h1>
			<h2>I’m a web designer and front-end developer with a<br /> passion for making the web a lovely and user-friendly place.</h2>
			<p class="pad50"><a class="yellow-btn" href="/about/">Learn More</a></p>
		</div><!--intro-->	
	</div><!--hero-->	
	
	<div class="recent-projects wrap cf">
	
	<h3>Featured Projects</h3>
	
		<div id="effect-1" class="effects clearfix">
		
		<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 4, 'portfolio_category' => 'featured', 'orderby' => 'title', 'order' => 'ASC' ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
		<article class="m-all t-1of4 d-1of4 screenshot">
			<div class="img">
												
			<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('feat-365'); ?>
			</a>
			<?php endif; ?>

			<div class="overlay">
	            <a href="<?php the_permalink(); ?>" class="expand"><?php the_title_attribute(); ?></a>
	            <a class="close-overlay hidden">x</a>
	        </div>			
			
			</div><!--img-->
		</article>								 			
		<?php endwhile; wp_reset_query(); ?>
		
		</div><!--#effect-1-->	
		
		
		<div class="cf wrap"><p class="pad50"><a class="yellow-btn" href="/work">View More</a></p></div>
	</div><!--projects -->
	
	
	<div class="testimonials cf">

		<div class="wrap">
		<div class="quote">&#8220;</div>
			<div class="flexslider"><ul class="slides">	
		<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => -1, 'orderby' => 'rand') ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
			<li><?php the_content(); ?>
			<strong><?php the_title(); ?></strong></li>
		
		<?php endwhile; wp_reset_query(); ?>
			</ul></div>
		</div><!--wrap-->
	</div><!--testimonies-->  

<?php get_footer(); ?>
                                                  