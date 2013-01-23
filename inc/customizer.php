<?php
/**
 * blm_basic Theme Customizer
 *
 * @package blm_basic
 * @link http://ottopress.com/tag/customizer/
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 */
function blm_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'blm_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since _s 1.2
 */
function blm_customize_preview_js() {
	wp_enqueue_script( 'blm_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'blm_customize_preview_js' );

add_action ('admin_menu', 'blm_admin');
function blm_admin() {

	// add the Customize link to the admin menu
	add_theme_page( 'Customize', 'Customize', 'edit_theme_options', 'customize.php' ); 

}


// add settings to create various social media text areas.

add_action('customize_register', 'blm_customize');
function blm_customize($wp_customize) {

	$wp_customize->add_section( 'blm_socmed_settings', array(
		'title'          => 'Social Media Settings',
		'priority'       => 35,
	) );

	$wp_customize->add_setting( 'twitter', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'twitter', array(
		'label'   => __( 'Twitter url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'facebook', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'facebook', array(
		'label'   => __( 'Facebook url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'googleplus', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'googleplus', array(
		'label'   => __( 'Google + url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'linkedin', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'linkedin', array(
		'label'   => __( 'LinkedIn url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'flickr', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'flickr', array(
		'label'   => __( 'Flickr url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'pinterest', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'pinterest', array(
		'label'   => __( 'Pinterest url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'youtube', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'youtube', array(
		'label'   => __( 'YouTube url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'vimeo', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'vimeo', array(
		'label'   => __( 'Vimeo url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'delicious', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'delicious', array(
		'label'   => __( 'Delcious url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'dribble', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'dribble', array(
		'label'   => __( 'Dribble url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	$wp_customize->add_setting( 'github', array(
		'default'        => '',
	) );

	$wp_customize->add_control( 'github', array(
		'label'   => __( 'Github url:', 'blm_basic' ),
		'section' => 'blm_socmed_settings',
		'type'    => 'text',
	) );
	
	
}
