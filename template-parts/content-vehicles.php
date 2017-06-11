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
		<?php 
		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
		$args = array( 'post_type' => 'cars', 'posts_per_page' => 6, 'paged' => $paged);
		$loop = new WP_Query( $args );
		?>

		<?php require get_stylesheet_directory() . '/inc/pagination.php'; ?>
		
		<div class="results">
			<div class="container">
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				  
				<div class="vehicle">
					<?php the_post_thumbnail('news'); ?>
					<div class="entry-title">
						<?php the_title('<h2>','</h2>'); ?>
						<h3 class="price">Price <span>£<?php the_field('vehicle_price'); ?></span></h3>
						<hr>
					</div>
					<div class="entry-content">
						<?php the_content(); ?>
						<a class="more" href="<?php the_permalink(); ?>">View Details</a>
					</div>
				</div>

			<?php endwhile; ?>
			</div>
		</div>

		<?php require get_stylesheet_directory() . '/inc/pagination.php'; ?>

		<?php wp_reset_query(); wp_reset_postdata(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->

