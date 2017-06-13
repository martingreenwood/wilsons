<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wilsons
 */

?>

<?php if (get_field('enable_prefooter_cta') && !is_page('about')): ?>
<div class="cta">
	<div class="table">
		<div class="cell middle center cta-text">
			<h3><?php the_field('cta_title', 'option'); ?></h3>
			<p><?php the_field('cta_text', 'option'); ?></p>
			<a class="more" href="<?php the_field('cta_link', 'option'); ?>"><?php the_field('cta_link_text', 'option'); ?></a>
		</div>
	</div>
</div>
<?php endif; ?>

	</div><!-- #content -->
</div><!-- #page -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			
			<div class="contact-details">
				<p><?php the_field('address', 'options'); ?></p>
				<p>Tel. <?php the_field('phone', 'options'); ?>
				<br>
				Email. <?php the_field('email', 'options'); ?></p>
			</div>
				
			<div class="footer-menus">

				<nav id="footer-navigation" class="footer-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'top-footer-menu' ) ); ?>
				</nav><!-- #site-navigation -->

				<aside id="social">
					<ul>
						<li><a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php the_field('instagram', 'option'); ?>"><i class="fa fa-instagram"></i></a></li>
						<li><a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php the_field('google', 'option'); ?>"><i class="fa fa-google"></i></a></li>
					</ul>
				</aside>

				<nav id="footer-bottom-navigation" class="footer-bottom-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'bottom-footer-menu' ) );?>
				<p>© Wilsons Leisure Vehicles Ltd <?php echo date('Y'); ?>.</p>
				</nav><!-- #site-navigation -->

			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
