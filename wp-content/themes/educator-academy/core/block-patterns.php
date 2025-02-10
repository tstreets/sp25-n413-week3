<?php
/**
 * Educator Academy: Block Patterns
 *
 * @since Educator Academy 1.0
 */

function educator_academy_register_block_patterns() {

	$patterns = array();

	$block_pattern_categories = array(
		'educator-academy' => array( 'label' => __( 'Educator Academy', 'educator-academy' ) )
	);
	$block_pattern_categories = apply_filters( 'educator_academy_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'educator_academy_register_block_patterns', 9 );