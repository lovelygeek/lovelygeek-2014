			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<div class="m-all t-1of3 d-1of3">
					<h3>What I'm Working On</h3>
					<p><img src="https://d13yacurqjgara.cloudfront.net/users/71958/screenshots/2362429/eyefinity.png" height="250" width="350" /><br />
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/dribbble.svg" alt="LovelyGeek on dribbble" class="middle" />
					<a href="https://dribbble.com/LovelyGeek">LovelyGeek on dribbble</a>
					</div>
					
					<div class="m-all t-1of3 d-1of3">
					<h3>In 140 Characters</h3>
					<?php dynamic_sidebar( 'twitter' ); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/twitter.svg" alt="LovelyGeek on twitter" class="middle" />
					<a href="https://twitter.com/LovelyGeek">LovelyGeek on Twitter</a>
					</div>
					
					<div class="m-all t-1of3 d-1of3">
					<h3>Lovely Grams</h3>
					<?php dynamic_sidebar( 'instagram' ); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/instagram.svg" alt="lovely_geek on Instagram" class="middle" />
					<a href="http://instagram.com/thelovelygeek">thelovelygeek on Instagram</a>
					</div>

				</div>

					<div class="wrap cf">
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?>. All rights reserved. <a href="http://www.lovelygeek.net/humans.txt">Crafted with &hearts; in California</a>.</p>
					</div>
			</footer>

		</div><!--container-->

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
