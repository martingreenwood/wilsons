<?php
/**
 * Template part for feature images.
 *
 *
 * @package wilsons
 */

$feature_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');

?>

<section id="feature_img" <?php if ($feature_img): ?> style="background-image: url('<?php echo $feature_img[0]; ?>')" <?php endif; ?>>
	<div class="row">
		<div class="table">
			<div class="cell middle">
				<h1><?php the_field('custom_heading') ?></h1>
			</div>
		</div>
	</div>
</section>