/**
 * Handles toggling the main navigation menu for small screens.
 */
jQuery( document ).ready( function( $ ) {
	var $branding = $( '#branding' ),
	    timeout = false;

	$.fn.smallMenu = function() {
		$branding.find( '.site-navigation' ).removeClass( 'main-navigation' ).addClass( 'main-small-navigation' );
		$branding.find( '.site-navigation h1' ).removeClass( 'assistive-text' ).addClass( 'menu-toggle' );

		$( '.menu-toggle' ).unbind( 'click' ).click( function() {
			$branding.find( '.menu' ).toggle();
			$( this ).toggleClass( 'toggled-on' );
		} );
	};

	// Check viewport width on first load.
	if ( $( window ).width() < 600 )
		$.fn.smallMenu();

	// Check viewport width when user resizes the browser window.
	$( window ).resize( function() {
		var browserWidth = $( window ).width();

		if ( false !== timeout )
			clearTimeout( timeout );

		timeout = setTimeout( function() {
			if ( browserWidth < 600 ) {
				$.fn.smallMenu();
			} else {
				$branding.find( '.site-navigation' ).removeClass( 'main-small-navigation' ).addClass( 'main-navigation' );
				$branding.find( '.site-navigation h1' ).removeClass( 'menu-toggle' ).addClass( 'assistive-text' );
				$branding.find( '.menu' ).removeAttr( 'style' );
			}
		}, 200 );
	} );
} );