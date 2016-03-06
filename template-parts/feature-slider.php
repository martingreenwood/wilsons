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
</section>