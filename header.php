<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UCalgary_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/79631a2c80.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.typekit.net/hyh4qgq.css">

</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'ucalgary'); ?></a>

		<header id="masthead" class="site-header">
			<div class="logo-branding">
				<div class="container">
					<div class="row reverse">
						<div class="col center-xs center-sm end-lg">
							<?php the_custom_logo(); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="main-navigation-band">
				<div class="container">
					<div class="row">
						<div class="col">
							<span class="menu-toggle" id="js-navbar-toggle" aria-controls="primary-menu" aria-expanded="false">
								<i class="fas fa-bars"></i>
							</span>
						</div>
						<div class="col col-lg-12">
							<div class="site-branding">
								<?php

								if (is_front_page() && is_home()) :
								?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
								<?php
								else :
								?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>

								<?php endif; ?>
							</div><!-- .site-branding -->
						</div>

					</div>
					<div class="row">
						<div class="col col-lg-12">
							<nav id="site-navigation" class="main-navigation">
								<?php
								wp_nav_menu(array(
									'theme_location'	=> 'menu-1',
									'menu_id'       	=> 'primary-menu',
									'menu_class'    	=> 'main-nav',
									'depth'         	=> 3,
									'fallback_cb'   	=> false,
									'container'     	=> false,
									'add_li_class'  	=> 'nav-links'
								));
								?>
							</nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">