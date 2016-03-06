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
	</div><!-- .entry-content -->

</article><!-- #post-## -->


<?php $feature_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full'); ?>

<section id="featured-video" <?php if ($feature_img): ?> style="background-image: url('<?php echo $feature_img[0]; ?>')" <?php endif; ?>>
	<div class="table">
		<div class="cell middle center">
			<h2><?php the_post_thumbnail_title() ?></h2>
			<p><?php the_post_thumbnail_caption() ?></p>
			<a class="popup fancybox.iframe" href="<?php the_field('feature_vid_url'); ?>">Play</a>
		</div>
	</div>
</section>

<section id="section_one">
	<div class="container">	

		<div class="left-column">
			<div class="secondary-text column">
				<div class="table">
					<div class="cell middle">
						<?php the_field('middle_text_section'); ?>
						<a class="more" href="<?php the_field('middle_section_link'); ?>">read more</a>
					</div>
				</div>
			</div>

			<div class="secondary-images column bleed-right">
				<?php $fcoImage = get_field('fco_image'); ?>
				<?php $fcolink = get_field('fco_link'); ?>
				<?php $fcoLinktext = get_field('fco_link_text'); ?>
				<div class="img" style="background-image: url(<?php echo $fcoImage; ?>);">
					<div class="table">
						<div class="cell bottom">
							<a class="more" href="<?php echo $fcoLink; ?>"><?php echo $fcoLinktext; ?></a>
						</div>
					</div>
				</div>

				<?php $fctImage = get_field('fct_image'); ?>
				<?php $fctlink = get_field('fct_link'); ?>
				<?php $fctLinktext = get_field('fct_link_text'); ?>
				<div class="img" style="background-image: url(<?php echo $fctImage; ?>);">
					<div class="table">
						<div class="cell bottom">
							<a class="more" href="<?php echo $fctlink; ?>"><?php echo $fctLinktext; ?></a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	
	</div>
</section>

<section id="section_two">
	<div class="container">	

		<div class="right-column">

			<?php $lfcImage = get_field('lfc_image'); ?>
			<?php $lfcTitle = get_field('lfc_title'); ?>
			<?php $lfclink = get_field('lfc_link'); ?>
			<?php $lfcLinktext = get_field('lfc_link_text'); ?>
			<div class="tertiary-img column bleed-left" style="background-image: url(<?php echo $lfcImage; ?>);">
				<div class="table">
					<div class="cell middle center">
						<div class="caption">
							<h3><?php echo $lfcTitle; ?></h3>
							<a class="more" href="<?php echo $lfclink; ?>"><?php echo $lfcLinktext; ?></a>
						</div>
					</div>
				</div>
			</div>

			<div class="tertiary-text column">
				<div class="table">
					<div class="cell middle">
						<?php the_field('bottom_text_section'); ?>
						<a class="more" href="<?php the_field('bottom_section_link'); ?>">Read More</a>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>

	</div>
</section>