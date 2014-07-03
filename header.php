<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section, header and top navigation areas
 *
 * @package blm_basic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
<!-- Setting favicon, Microsoft and Apple Touch Icon 
	Replace the icons using - http://realfavicongenerator.net/
-->	
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-57x57.png" /><link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-114x114.png" /><link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-72x72.png" /><link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-144x144.png" /><link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-60x60.png" /><link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-120x120.png" /><link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-76x76.png" /><link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-152x152.png" /><link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-16x16.png" sizes="16x16" /><link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-32x32.png" sizes="32x32" /><link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-96x96.png" sizes="96x96" /><link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon-160x160.png" sizes="160x160" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/icons/mstile-144x144.png" /><meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/images/icons/mstile-70x70.png" /><meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/images/icons/mstile-150x150.png" /><meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/images/icons/mstile-310x150.png" /><meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/images/icons/mstile-310x310.png" />	
	
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<div id="wrap">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'blm_basic' ); ?></a>
	
	<header id="branding" class="site-header" role="banner">
			<h1 id="logo"><a href="<?php echo home_url() ?>/"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="tagline"><?php bloginfo( 'description' ); ?></h2>

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<h1 class="menu-toggle"><?php _e( 'Menu', 'blm_basic' ); ?></h1>

		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) ); ?>
	</nav><!-- #site-navigation -->
		
	</header>	
		