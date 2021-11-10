<?php
/**
 * Total Child theme functions.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 */

/**
 * Load the parent style.css file
 */
function total_child_enqueue_parent_theme_style() {
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'Total' )->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'total_child_enqueue_parent_theme_style' );
