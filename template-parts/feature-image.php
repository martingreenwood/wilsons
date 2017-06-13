<?php
/**
 * Template part for feature images.
 *
 *
 * @package wilsons
 */

$page_for_posts = get_option( 'page_for_posts' );

if (is_home()) {
	$pID = $page_for_posts;
} else {
	$pID = $post->ID;
}
$feature_img = wp_get_attachment_image_src( get_post_thumbnail_id( $pID ), 'full');

?>

<section id="feature_img" <?php if ($feature_img): ?> style="background-image: url('<?php echo $feature_img[0]; ?>')" <?php endif; ?>>
	<div class="row">
		<div class="table">
			<div class="cell middle">
				<h1><?php the_field('custom_heading', $pID) ?></h1>
			</div>
		</div>
	</div>
</section>