<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wilsons
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class($pagename); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		
		<div class="container">

			<div class="row">
			
				<div class="site-branding">
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.svg" width="130" height="130">
						</a>
					</h1>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->

				<div class="contact-info">
					<aside id="social">
						<ul>
							<li><a href="<?php the_field('facebook', 'option'); ?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php the_field('instagram', 'option'); ?>"><i class="fa fa-instagram"></i></a></li>
							<li><a href="<?php the_field('twitter', 'option'); ?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php the_field('google', 'option'); ?>"><i class="fa fa-google"></i></a></li>
						</ul>
						<p><?php the_field('hashtag', 'options'); ?></p>
					</aside>

					<div id="phone">
						<p>Call today on <?php the_field('phone', 'options'); ?></p>
					</div>
				</div>

			</div>
				
		</div>
			
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
