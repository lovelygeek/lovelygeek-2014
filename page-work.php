<?php
/*
 Template Name: Portfolio Page
 *
*/
?>
<?php get_header(); ?>

	<div id="content" class="pad100">
	
		<div id="inner-content" class="wrap cf">
	
			<h1 class="text-center">My <?php the_title(); ?></h1>
			
			<div id="effect-1" class="effects clearfix">
			
		<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 12 ) ); ?>
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
		
		</div><!--effect-1-->
		
		</div><!-- inner-content -->
	
	</div><!-- #content-->

<?php get_footer(); ?>