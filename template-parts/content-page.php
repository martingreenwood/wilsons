<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wilsons
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
		<div class="intro-text">
			<?php the_content(); ?>
		</div>
		
		<?php if (get_field('enable_two_column_layout')): ?>
		<div class="columns">
			<div class="column"><?php the_field('left_column'); ?></div>
			<div class="column"><?php the_field('right_column'); ?></div>
		</div>
		<?php endif; ?>

		<?php if (get_field('enable_three_column_layout')): ?>
		<div class="trio">
			<div class="column"><h2><?php the_field('first_column_title'); ?></h2><hr><?php the_field('first_column'); ?></div>
			<div class="column"><h2><?php the_field('second_column_title'); ?></h2><hr><?php the_field('second_column'); ?></div>
			<div class="column"><h2><?php the_field('third_column_title'); ?></h2><hr><?php the_field('third_column'); ?></div>
		</div>
		<?php endif; ?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer"></footer><!-- .entry-footer -->
</article><!-- #post-## -->
