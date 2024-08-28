<?php
/**
 * Enqueue needed dependency scripts to child theme
 * 
 * @param string $parent   Parent theme styles
 * @return wp core enqueue Example for Astra theme but works on most all themes.
 */
add_action( 'wp_enqueue_scripts', 'artech_child_theme_enqueue_styles', 99 );

function artech_child_theme_enqueue_styles() {
	if ( is_page( '3796' ) || is_page( '2696' ) ){
        wp_enqueue_style( 'pt-min', get_stylesheet_directory_uri() . '/pt-min.css' );
    }
	return false;
}
