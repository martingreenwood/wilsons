<?php
/**
 * The template for displaying the Our Vehicles page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wilsons
 */

get_header(); ?>


	<?php get_template_part( 'template-parts/feature', 'image' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="pagination-top"><?php the_post_navigation(); ?></div>
			
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'vehicles' );


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
