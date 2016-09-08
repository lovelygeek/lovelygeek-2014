<?php
/*
 * CUSTOM POST TYPE TEMPLATE
 *
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 *
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<div id="content" class="pad100">

				<div id="inner-content" class="wrap cf">
				
					<h1 class="single-title custom-post-type-title text-center"><?php the_title(); ?></h1>

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">


								<section class="entry-content cf">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section> <!-- end article section -->



							</article>

							<?php endwhile; ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

						<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">
						
							<div class="worknav cf">
								<?php previous_post(' %', '<img src="/wp-content/themes/Lovely-Geek-2014/library/images/arrow-left.svg" alt="Previous Project" class="arrow" />', 'no'); ?>
								<a href="http://www.lovelygeek.net/work/" title="View Portfolio"><img src="<?php echo get_template_directory_uri(); ?>/library/images/grid.svg" alt="View Portfolio" class="grid" /></a>
								<?php next_post(' %', '<img src="/wp-content/themes/Lovely-Geek-2014/library/images/arrow-right.svg" alt="Next Project" class="arrow" />', 'no'); ?>
							</div>
							
							<h3>About the Project</h3>
							<?php the_field('about_the_project'); ?>
							
							<?php
							
							if(get_field('recognition'))
							{
							echo '<h3>Recognition</h3><p>' . get_field('recognition') . '</p>';
							}
							
							?>

							
							<p class="pad50"><a href="<?php the_field('live_site_url'); ?>" class="yellow-btn" target="_blank">View Live Site</a></p>
							
						</div><!--#sidebar1-->

				</div>

			</div>

<?php get_footer(); ?>
