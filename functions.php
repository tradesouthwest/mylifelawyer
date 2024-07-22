<?php
/**
 * Enqueue needed dependency scripts to child theme
 * 
 * @param string $parent   Parent theme styles
 * @return wp core enqueue Example for Astra theme but works on most all themes.
 */
add_action( 'wp_enqueue_scripts', 'astra_child_theme_enqueue_styles' );

function astra_child_theme_enqueue_styles() {
	$parenthandle = 'artech'; // This is parent theme.
	$theme        = wp_get_theme();
	wp_enqueue_style( $parenthandle,
		get_template_directory_uri() . '/style.css',
		array('artech-style'),  // If parent theme has deeper dependency than root stylesheet
		$theme->parent()->get( 'Version' )
	);
	wp_enqueue_style( 'artech-child',
		get_stylesheet_uri(),
		array( $parenthandle ),
		$theme->get( 'Version' ) // If you have Version defined in the style header.
	);
	if ( is_page( '3796' ) ) {
        wp_enqueue_style( 'pt-min', get_stylesheet_directory_uri() . '/pt-min.css' );
    }
} 