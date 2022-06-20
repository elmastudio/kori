<?php
/**
 * Kori functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kori
 * @since Kori 1.0
 */

if ( ! function_exists( 'kori_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Kori 1.0
	 *
	 * @return void
	 */
	function kori_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'assets/build/css/editor.css' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
	endif; // kori_support
	add_action( 'after_setup_theme', 'kori_support' );


if ( ! function_exists( 'kori_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Kori 1.0
	 *
	 * @return void
	 */
	function kori_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'kori-style',
			get_template_directory_uri() . '//assets/build/css/main.css',
			array(),
			$version_string
		);

		// Add styles inline.
		wp_add_inline_style( 'kori-style', kori_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'kori-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'kori_styles' );

if ( ! function_exists( 'kori_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Kori 1.0
	 *
	 * @return void
	 */
	function kori_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', kori_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'kori_editor_styles' );

if ( ! function_exists( 'kori_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions kori_styles() and kori_inline_editor_styles() above.
	 *
	 * @since Kori 1.0
	 *
	 * @return string
	 */
	function kori_get_font_face_styles() {

		return "

		@font-face{
			font-family: 'Urbanist';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Urbanist.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Urbanist';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Urbanist-Italic.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Fraunces';
			font-weight: 200 900;
			font-style: italic;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Fraunces-Italic.woff2' ) . "') format('woff2');
		}
		";

	}

endif;

if ( ! function_exists( 'kori_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Kori 1.0
	 *
	 * @return void
	 */
	function kori_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/Urbanist.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'kori_preload_webfonts' );

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
