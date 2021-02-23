<?php

use Elementor\Plugin as ElementorPlugin;
/**
 * Improve Elementor Compatibility.
*/
class Elementor {

    function __construct() {
        $this->hooks();
    }
    
	/**
     * Integration hooks.
	*/
    protected function hooks() {
        // Skip if Elementor is not available.
		if ( ! class_exists( '\Elementor\Plugin' ) ) {
            return;
		}
        
		add_action( 'elementor/frontend/after_enqueue_scripts', [ $this, 'preview_assets' ] );
		add_action( 'elementor/editor/after_enqueue_styles', [ $this, 'editor_assets' ] );
		add_action( 'elementor/widgets/widgets_registered', array( $this, 'register_widget' ) );

		// add_action( 'wp_ajax_wpforms_admin_get_form_selector_options', [ $this, 'ajax_get_form_selector_options' ] );
	}

	/**
	 * Load assets in the preview panel.
	 */
	public function preview_assets() {

		if ( ! ElementorPlugin::$instance->preview->is_preview_mode() ) {
			return;
		}

		wp_enqueue_style(
			'pieregister-integrations',
			PIEREG_PLUGIN_URL . "assets/css/elementor-integration.css"
		);

		wp_enqueue_script(
			'pieregister-elementor',
			PIEREG_PLUGIN_URL . "assets/js/elementor-integration.js",
			[ 'elementor-frontend', 'jquery', 'wp-util' ]
		);
	}

	/**
	 * Load an integration css in the elementor document.
	 */
	public function editor_assets() {

		if ( empty( $_GET['action'] ) || $_GET['action'] !== 'elementor' ) {
			return;
		}

		wp_enqueue_style(
			'pieregister-integrations',
			PIEREG_PLUGIN_URL . "assets/css/elementor-integration.css"
		);

		wp_enqueue_script(
			'pieregister-elementor',
			PIEREG_PLUGIN_URL . "assets/js/elementor-integration.js"
		);
	}

	/**
	 * Register WPForms Widget.
	 *
	 * @since 1.6.2
	 */
	public function register_widget() {
        if( file_exists(plugin_dir_path(__FILE__)."elementorWidget.php") )
            require_once(plugin_dir_path(__FILE__)."elementorWidget.php");

		ElementorPlugin::instance()->widgets_manager->register_widget_type( new elementorWidget() );
	}

}

add_action( 'pieregister_elementor', 'initialize_elementorwidget');
function initialize_elementorwidget(){
	$Elementor_widget = new Elementor();
}