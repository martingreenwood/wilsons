<?php
/**
 * Template part for displaying car info.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wilsons
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		
		<div class="vehicle-intro container">
			
			<div class="description">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				<hr>
				<?php the_content(); ?>
			</div>
			
			<div class="spec">
				<h2>Price  <span>£<?php the_field('price'); ?></span></h2>
				<hr>
				<dl>
					<dt>Paint Colour</dt><dd><?php the_field('paint_colour'); ?></dd>
					<dt>Main Hide Colour</dt><dd><?php the_field('main_hide_colour'); ?></dd>
					<dt>Veneer</dt><dd><?php the_field('veneer'); ?></dd>
					<dt>Registration Date</dt><dd><?php the_field('registration_date'); ?></dd>
					<dt>Mileage</dt><dd><?php the_field('mileage'); ?></dd>
				</dl>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

<div class="car-details">

	<section id="left-section">
			
			<div class="gallery">
				<img src="http://placehold.it/780x780">
			</div>
			
			<div class="secondary-images">
				
				<div class="enquiry column table">
					<div class="cell middle">
						<ul>
							<li><a class="download icon" href="#">vehicle spec (pdf)</a></li>
							<li><a class="email icon" href="#">email to friend</a></li>
							<li><a class="enquire icon" href="#">make enquiry</a></li>
						</ul>
					</div>
				</div>
			
				<div class="secondary-img column"><img src="http://placehold.it/390x390"></div>

			</div>
	</section>

	<section id="right-section">
			<div class="tertiary-img"><img src="http://placehold.it/390x390"></div>
			<div class="vehicle-details">
				<h2>Vehicle Details</h2>
				<p><?php the_field('synopsis'); ?></p>
				<dl>
					<dt>Body Style</dt><dd><?php the_field('body_style'); ?></dd>
					<dt>Paint Colour</dt><dd><?php the_field('paint_colour'); ?></dd>
					<dt>Main Hide Colour</dt><dd><?php the_field('main_hide_colour'); ?></dd>
					<dt>Secondary Hide Colour</dt><dd><?php the_field('secondary_hide_colour'); ?></dd>
					<dt>Veneer</dt><dd><?php the_field('veneer'); ?></dd>
					<dt>Mileage</dt><dd><?php the_field('mileage'); ?></dd>
					<dt>Registration Date</dt><dd><?php the_field('registration_date'); ?></dd>
					<dt>Engine</dt><dd><?php the_field('engine'); ?></dd>
					<dt>Transmission</dt><dd><?php the_field('transmission'); ?></dd>
					<dt>Power</dt><dd><?php the_field('power'); ?></dd>
					<dt>Torque</dt><dd><?php the_field('torque'); ?></dd>
					<dt>Acceleration</dt><dd><?php the_field('acceleration'); ?></dd>
					<dt>Maximum Speed</dt><dd><?php the_field('maximum_speed'); ?></dd>
					<dt>Hand Of Drive</dt><dd><?php the_field('hand_of_drive'); ?></dd>
				</dl>
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-right.png" width="21" height="20">enquire about this vehicle</a>
			</div>
	</section>

</div>
