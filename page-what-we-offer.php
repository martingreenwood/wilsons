<?php
/**
 * The template for displaying the What We Offer page.
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
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<section id="section_one">
		<div class="row">

			<div class="left_section column">
				<div class="table">
					<div class="cell middle text">
						<?php the_field('bottom_text'); ?>
						<a class="more" href="<?php the_field('read_more_link_left'); ?>">read more</a>
					</div>
				</div>
			</div>
			<div class="right_section column">
				<div class="img" style="background-image: url(<?php the_field('additional_image_one'); ?>)"></div>
				<div class="img" style="background-image: url(<?php the_field('additional_image_two'); ?>)"></div>
			</div>
			<div class="clearfix"></div>

		</div>
	</section>

	<section id="section_two">
		<div class="row">

			<div class="right_section column">
				<div class="table">
					<div class="cell middle text">
						<?php the_field('bottom_text_right'); ?>
						<a class="more" href="<?php the_field('read_more_link_left'); ?>">read more</a>
					</div>
				</div>
			</div>
			<div class="left_section column">
				<div class="img blank"></div>
				<div class="img" style="background-image: url(<?php the_field('additional_image_three'); ?>)"></div>
			</div>
			<div class="clearfix"></div>

		</div>
	</section>

<?php
get_footer();
