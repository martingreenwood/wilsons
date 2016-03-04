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
	<header class="entry-header">
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<div class="results">
			<?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
				$args = array( 'post_type' => 'cars', 'posts_per_page' => 6, 'paged' => $paged);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				  echo '<div class="vehicle">';
						  the_post_thumbnail();
						  echo '<div class="entry-title">';
							  the_title('<h2>','</h2>');
							 echo '<div class="price">';
							  	echo 'Price £'; the_field('price');
							 echo '</div>';
							echo '<hr>';
						  echo '</div>';
						  echo '<div class="entry-content">';
						  	the_content();
						  echo '</div>';
						  echo '<a href="';
						  	the_permalink();
						  echo '">View Details</a>';
				  echo '</div>';
				endwhile; ?>
		</div>
		<div class="pagination">
			<?php if ($loop->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
					<nav class="prev-next-posts container">
					<div class="prev-posts-link">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-left.png" width="21" height="20">
  					<?php echo get_next_posts_link( 'Previous', $loop->max_num_pages); // display older posts link ?>
					</div>
					<div class="next-posts-link">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-right.png" width="21" height="20">
  					<?php echo get_previous_posts_link( 'Next' ); // display newer posts link ?>
					</div>
					</nav>
			<?php } ?>
		</div>

			<?php wp_reset_query(); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

	<div class="cta">
		<div class="cta-text">
			<h1>can't find what you're looking for?</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
			<p><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-white.png" width="21" height="20">make an enquiry</a></p>
		</div>
	</div>

