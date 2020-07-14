<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

    // load angular styles 
    function include_angular_styles( $dist_path ) {
        $styles = glob($dist_path . '/*.css');
    
        echo "<app-root></app-root>";
        foreach ($styles as $style) {
            echo "<link href='$style' rel='stylesheet' />";
        }
    }
    
    if ( USEANGULAR ) {
        include_angular_styles('wp-angular/dist');
    }

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
