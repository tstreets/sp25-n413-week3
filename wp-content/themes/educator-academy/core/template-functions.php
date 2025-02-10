<?php
/**
 * @package Educator Academy
 */

function educator_academy_customizer_add_defaults( $default_options) {
	$defaults = array(
		'educator_academy_excerpt_length'    => 30,
	);
	$updated_defaults = wp_parse_args( $defaults, $default_options );

	return $updated_defaults;
}
add_filter( 'educator_academy_customizer_defaults', 'educator_academy_customizer_add_defaults' );

function educator_academy_gtm( $option ) {
	$defaults = apply_filters( 'educator_academy_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

if ( ! function_exists( 'educator_academy_excerpt_length' ) ) :
	function educator_academy_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		$length	= educator_academy_gtm( 'educator_academy_excerpt_length' );

		return absint( $length );
	} 
endif;
add_filter( 'excerpt_length', 'educator_academy_excerpt_length', 999 );