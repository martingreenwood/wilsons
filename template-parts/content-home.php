<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wilsons
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="intro-text">
			<?php the_content(); ?>
		</div>		
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<div id="featured-video"><img src="http://placehold.it/1276x450"></div>

<section id="section_one">
	<div class="container">	

		<div class="left-column">
			<div class="secondary-text column">
				<h2>Lorem ipsum Ectetur</h2>
				<hr>
				<?php the_field('middle_text_section'); ?>
				<a href="#">read more<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-right.png" width="21" height="20"></a>
			</div>
			<div class="secondary-images column bleed-right">
				<div class="img">
					<img src="http://placehold.it/390x390">
				</div>
				<div class="img">
					<img src="http://placehold.it/390x390">
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	
	</div>
</section>

<section id="section_two">
	<div class="container">	

		<div class="right-column">
			<div class="tertiary-img column bleed-left">
				<img src="http://placehold.it/780x450">
			</div>
			<div class="tertiary-text column">
				<h2>Lorem ipsum Ectetur</h2>
				<?php the_field('bottom_text_section'); ?>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
</section>