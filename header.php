<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section, header and top navigation areas
 *
 * @package _s
 * @since _s 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<div id="wrap">
	
	<header id="branding">
		<hgroup>
			<h1 id="logo"><a href="<?php echo home_url() ?>/"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="tagline"><?php bloginfo( 'description' ); ?></h2>
		<?php get_template_part( 'inc/socmed' ); ?>

	<!-- if there's a header image, let's display it here 
		 if you don't want to use the header image, just delete lines 37 to 44-->
	<?php $header_image = get_header_image();
	if ( ! empty( $header_image ) ) { ?>

		<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />

	<?php } ?>
	</header>
	
	<nav id="top-nav" role="navigation" class="site-navigation">		
		<h1 class="assistive-text"><?php _e( 'Menu', 'blm_basic' ); ?></h1>
		<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'blm_basic' ); ?>"><?php _e( 'Skip to content', 'blm_basic' ); ?></a></div>
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	</nav>