<?php 
/**
 * Theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Educator_Academy_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/core/section-pro/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Educator_Academy_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Educator_Academy_Customize_Section_Pro( $manager,'educator_academy_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'Educator Academy Pro', 'educator-academy' ),
			'pro_text' => esc_html__( 'Upgrade Pro', 'educator-academy' ),
			'pro_url'  => esc_url('https://www.thealphablocks.com/themes/academy-wordpress-theme/'),
			'bundle_text' => esc_html__( 'Get All Our Themes', 'educator-academy' ),
			'bundle_url'  => esc_url('https://www.thealphablocks.com/themes/wordpress-theme-bundle/'),
		) )	);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_style( 'educator-academy-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Educator_Academy_Customize::get_instance();