<?php
/**
 * Healthy Food Blogger functions and definitions
 *
 * @package healthy_food_blogger
 * @since 1.0
 */

if ( ! function_exists( 'healthy_food_blogger_support' ) ) :
	function healthy_food_blogger_support() {

		load_theme_textdomain( 'healthy-food-blogger', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'healthy_food_blogger_support' );

if ( ! function_exists( 'healthy_food_blogger_styles' ) ) :
	function healthy_food_blogger_styles() {
		// Register theme stylesheet.
		$healthy_food_blogger_theme_version = wp_get_theme()->get( 'Version' );

		$healthy_food_blogger_version_string = is_string( $healthy_food_blogger_theme_version ) ? $healthy_food_blogger_theme_version : false;
		wp_enqueue_style(
			'healthy-food-blogger-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$healthy_food_blogger_version_string
		);

		wp_enqueue_style( 'dashicons' );

		//font-awesome
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
			, array(), '6.7.0' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'healthy_food_blogger_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// TGM Plugin
require get_template_directory() . '/inc/tgm/tgm.php';