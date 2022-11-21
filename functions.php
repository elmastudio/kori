<?php
/**
 * Kori functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kori
 * @since Kori 1.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );

if ( ! function_exists( 'kori_support' ) ) :

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since Kori 1.0
 *
 * @return void
 */
function kori_support() {


	// Enqueue editor styles.
	add_editor_style( 'assets/build/css/editor.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );

}
endif; // kori_support
add_action( 'after_setup_theme', 'kori_support' );


/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function kori_styles() {

	wp_enqueue_style(
		'kori-style',
		get_template_directory_uri() . '/assets/build/css/main.css',
		[],
		THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'kori_styles' );

/**
 * Registers pattern categories.
 *
 * @since Kori 1.0
 */
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Register block styles.
 *
 * @since Kori 1.0
 */
require get_template_directory() . '/inc/block-styles.php';

/**
 * TGMPA plugin activation.
 */
require_once get_template_directory() . '/inc/classes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'kori_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function kori_register_required_plugins() {

	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 */
	$plugins = array(

		array(
			'name'      => 'Aino Blocks - Creative Block Collection',
			'slug'      => 'aino-blocks',
			'required'  => false,
		),
		array(
			'name'      => 'Safe SVG',
			'slug'      => 'safe-svg',
			'required'  => false,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 */
	$config = array(
		'id'           => 'kori',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
