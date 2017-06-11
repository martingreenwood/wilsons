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
				<h2>Price  <span>£<?php the_field('vehicle_price'); ?></span></h2>
				<hr>
				<dl>
					<?php 
					$vehicle_spec = get_field('vehicle_spec'); 
					$first_five_spec = array_slice($vehicle_spec, 0, 5, true);
					foreach ($first_five_spec as $first_five_item): ?>
					<dt><?php echo $first_five_item['feature']; ?></dt><dd><?php echo $first_five_item['value']; ?></dd>
					<?php endforeach; ?>
				</dl>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

<div class="car-details">

	<div class="row">

		<section id="left-section" class="bleed-left">
				
				<div class="gallery">
					<div class="slick">

						<?php $vehicle_gallery = get_field('vehicle_gallery'); if ($vehicle_gallery): ?>
						<?php foreach( $vehicle_gallery as $image ): ?>

						<div>
							<img src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
						</div>

						<?php endforeach; endif; ?>

					</div>
				</div>
				
				<div class="secondary-images">
					
					<div class="enquiry column table">
						<div class="cell middle">
							<ul>
								<li><a class="download icon" href="<?php the_field('vehicle_pdf'); ?>">vehicle spec (pdf)</a></li>
								<li><a class="email icon" href="mailto:?subject=Check out this <?php the_title();?> on Wilsons LV&amp;body=Check out this <?php the_title();?> I thought you would like. <?php the_permalink(); ?>">email to friend</a></li>
								<li><a class="enquire icon" href="#">make enquiry</a></li>
							</ul>
						</div>
					</div>
				
					<div class="secondary-img feature_thumb column" style="background-image: url(<?php the_field('feature_thumnail_one'); ?>);"></div>

				</div>
		</section>

		<section id="right-section">
				<div class="tertiary-img feature_thumb" style="background-image: url(<?php the_field('feature_thumnail_two'); ?>);"></div>
				<div class="vehicle-details">
					<h2>Vehicle Details</h2>
					<hr>
					<p><?php the_field('synopsis'); ?></p>
					<dl>
					<?php 
					$vehicle_spec = get_field('vehicle_spec'); 
					$first_five_spec = array_slice($vehicle_spec, 5, 1000, true);
					foreach ($first_five_spec as $first_five_item): ?>
					<dt><?php echo $first_five_item['feature']; ?></dt><dd><?php echo $first_five_item['value']; ?></dd>
					<?php endforeach; ?>
					</dl>
					<a class="more" href="#">enquire about this vehicle</a>
				</div>
		</section>

	</div>

</div>