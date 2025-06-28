<?php
/**
 * Plugin Name: Team Widget for Elementor
 * Description: Custom Elementor extension which includes custom team widgets.
 * Plugin URI:  https://anahian.com/awesome-team-widget
 * Version:     1.0.0
 * Author:      Abdullah Nahian
 * Author URI:  https://anahian.com/
 * Text Domain: team-widget-for-elementor
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Team Widget For Elementor Main Class
 * Handles the initialization and setup of team display widgets
 */
final class Team_Widget_For_Elementor {

	const VERSION = '1.0.0';
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';
	const MINIMUM_PHP_VERSION = '7.0';

	private static $_instance = null;

	/**
	 * Singleton pattern implementation
	 * Returns the main instance of Team_Widget_For_Elementor
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * Plugin initialization
	 * Sets up hooks and actions for team widget functionality
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'i18n' ] );
		add_action( 'plugins_loaded', [ $this, 'init' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_bootstrap' ] );
	}

	/**
	 * Load external CSS and JS libraries
	 * Includes Bootstrap and FontAwesome for team widget styling
	 */
	public function enqueue_bootstrap() {
		wp_enqueue_style(
			'elementor-team-bootstrap-css',
			'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
			array(),
			'5.3.0'
		);

		wp_enqueue_style(
			'elementor-team-fontawesome-css',
			'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css',
			array(),
			'6.7.0'
		);

		wp_enqueue_script(
			'elementor-team-bootstrap-js',
			'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
			array(),
			'5.3.0',
			true
		);
	}

	/**
	 * Translation support setup
	 */
	public function i18n() {
		load_plugin_textdomain( 'team-widget-for-elementor', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Core plugin setup
	 * Validates dependencies and registers team widget components
	 */
	public function init() {
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}

		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}
		
		add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'widget_styles' ] );
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
		add_action( 'elementor/init', [ $this, 'elementor_team_category' ] );
	}

	/**
	 * Elementor dependency check notification
	 */
	public function admin_notice_missing_main_plugin() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'team-widget-for-elementor' ),
			'<strong>' . esc_html__( 'Team Widget for Elementor', 'team-widget-for-elementor' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'team-widget-for-elementor' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	/**
	 * Elementor version compatibility notification
	 */
	public function admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'team-widget-for-elementor' ),
			'<strong>' . esc_html__( 'Team Widget for Elementor', 'team-widget-for-elementor' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'team-widget-for-elementor' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	/**
	 * PHP version compatibility notification
	 */
	public function admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'team-widget-for-elementor' ),
			'<strong>' . esc_html__( 'Team Widget for Elementor', 'team-widget-for-elementor' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'team-widget-for-elementor' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	/**
	 * Register team widget components
	 */
	public function init_widgets() {
		require_once( __DIR__ . '/widgets/teams.php' );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor_Teams_Widget() );
	}

	/**
	 * Load custom styling for team widgets
	 */
	public function widget_styles() {
		wp_register_style( 'elementor-team-style', plugins_url( 'style.css', __FILE__ ) );
		wp_enqueue_style('elementor-team-style');
	}	

	/**
	 * Create dedicated category for team widgets in Elementor
	 */
	public function elementor_team_category () {
	   \Elementor\Plugin::$instance->elements_manager->add_category( 
	   	'elementor-team-cat',
	   	[
	   		'title' => __( 'Awesome Team Category', 'team-widget-for-elementor' ),
	   		'icon' => 'fa fa-plug',
	   	],
	   	2 
	   );
	}
}

Team_Widget_For_Elementor::instance();