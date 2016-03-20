<?php
/**
 * Template part for feature images.
 *
 *
 * @package wilsons
 */

?>

<section id="feature_slider">
	<div class="row">
		<div class="slick">

			<?php if( have_rows('slider') ): while ( have_rows('slider') ) : the_row(); ?>

			<div style="background-image: url(<?php the_sub_field('image'); ?>);">
				<div class="table">
					<div class="cell middle">
						<div class="caption">
							<h2><?php the_sub_field('title'); ?></h2>
							<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>
						</div>
					</div>
				</div>
			</div>

			<?php endwhile; endif; ?>

		</div>
	</div>

	<div id="car_search">
		<div class="search-box">
			<p>What are you looking for?</p>
			<select id="vehicle_types" name="vechicle-type">
			<option value="">Select type...</option>
				<?php
				$taxonomy = 'vehicle_type';
				$tax_terms = get_terms($taxonomy);
				foreach ($tax_terms as $tax_term):
				?>
				<option value="<?php echo strtolower($tax_term->name); ?>"><?php echo $tax_term->name; ?></option>
				<?php endforeach; ?>
			</select>
			<select id="vehicle_makes" name="vechicle-make">
				<option value="">Select make...</option>
			</select>
			<input type="buttom" id="search_cars" value="Search">
			<div id="loading"></div>
		</div>
	</div>

</section>