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
		<div class="entry-content column">
			<header class="entry-header">
				<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					}

				if ( 'post' === get_post_type() ) : ?>
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<?php the_excerpt();?>
		</div><!-- .entry-content -->

		<div class="entry-image column"><?php the_post_thumbnail('post'); ?></div>

		<div class="read-more column"><img src="http://placehold.it/274x223"></div>

		<footer class="entry-footer"></footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
