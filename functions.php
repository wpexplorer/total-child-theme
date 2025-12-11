<?php

defined( 'ABSPATH' ) || exit;

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
