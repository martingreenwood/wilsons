<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wilsons
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container">
		<div class="row">

			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' );
					
				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php wilsons_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

			<div class="vehicle-gallery">

				<div class="slick">

					<?php $vehicle_gallery = get_field('vehicle_gallery'); if ($vehicle_gallery): ?>
					<?php foreach( $vehicle_gallery as $image ): ?>

					<div>
						<img src="<?php echo $image['sizes']['gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>

					<?php endforeach; endif; ?>

				</div>

			</div>

		</div>
	</div>

</article><!-- #post-## -->
