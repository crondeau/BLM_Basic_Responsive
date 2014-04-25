<?php
/**
 * blm_basic functions and definitions
 *
 * @package blm_basic
 */


add_action( 'after_setup_theme', 'blm_theme_setup' );
function blm_theme_setup() {

	global $content_width;
	/* Set the $content_width for things such as video embeds. */
	if ( !isset( $content_width ) )
	$content_width = 640;

	// Add theme support for automatic feed links. 
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for post thumbnails (featured images). 
	add_theme_support( 'post-thumbnails' );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
	
}

/* Add your nav menus function to the 'init' action hook. */
   add_action( 'init', 'blm_register_menus' );

/* Add custom actions. */
   add_action( 'widgets_init', 'blm_register_sidebars' );


// Add menu features 
function blm_register_menus() {
	register_nav_menus(array('primary'=>__( 'Primary Menu' ), ));
}

// Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
function blm_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'blm_page_menu_args' );

function blm_register_sidebars() {
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar', 'blm_basic' ),
			'description' => __( 'The following widgets will appear in the main sidebar div.', 'blm_basic' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
}

/**
 * Enqueue scripts and styles
 */
function blm_basic_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_enqueue_style('googleFonts', 'http://fonts.googleapis.com/css?family=Droid+Serif' );

	wp_enqueue_script( 'blm_navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'blm-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'blm_basic_scripts' );

//Set up title if SEO plugin is not used.

function blm_basic_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'blm_basic' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'blm_basic_wp_title', 10, 2 );


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);	
