<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: wpex
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function total_child_enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'total_child_enqueue_parent_theme_style' );

/**
 * Load translations from your child theme
 * Add your .po/.mo files into a "languages" folder in your child theme then uncomment this function
 *
 * @link http://codex.wordpress.org/Function_Reference/load_child_theme_textdomain
 * @return url
 */
/*
function my_child_theme_setup() {
    load_child_theme_textdomain( 'my_child_theme', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_setup' );
*/
