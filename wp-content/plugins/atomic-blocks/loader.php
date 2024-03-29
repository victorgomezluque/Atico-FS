<?php
/**
 * Bootstraps the Atomic Blocks plugin.
 *
 * @package AtomicBlocks
 */

/**
 * Initialize the blocks
 */
function atomic_blocks_loader() {

	$atomic_blocks_includes_dir = plugin_dir_path( __FILE__ ) . 'includes/';
	$atomic_blocks_src_dir      = plugin_dir_path( __FILE__ ) . 'src/';
	$atomic_blocks_dist_dir     = plugin_dir_path( __FILE__ ) . 'dist/';

	/**
	 * Load the migration notice functionality.
	 */
	require_once plugin_dir_path( __FILE__ ) . 'dist/migration/class-notice.php';
	new Atomic_Blocks\Admin\Migration\Notice();

	/**
	 * Load the blocks functionality
	 */
	require_once plugin_dir_path( __FILE__ ) . 'dist/init.php';

	/**
	 * Load Getting Started page
	 */
	require_once plugin_dir_path( __FILE__ ) . 'dist/getting-started/getting-started.php';

	/**
	 * Load Migrate page
	 */
	require_once plugin_dir_path( __FILE__ ) . 'dist/migration/migrate-page/migrate-page.php';

	/**
	 * Enable API Endpoint for installing Genesis Blocks.
	 */
	require_once plugin_dir_path( __FILE__ ) . 'dist/migration/class-install-genesis-blocks-api.php';
	new AtomicBlocks\Admin\Migration\Install_Genesis_Blocks_Api();

	/**
	 * Load Container Block PHP
	 */
	require_once plugin_dir_path( __FILE__ ) . 'src/blocks/block-container/index.php';

	/**
	 * Load Social Block PHP
	 */
	require_once plugin_dir_path( __FILE__ ) . 'src/blocks/block-sharing/index.php';

	/**
	 * Load Post Grid PHP
	 */
	require_once plugin_dir_path( __FILE__ ) . 'src/blocks/block-post-grid/index.php';

	/**
	 * Load the newsletter block and related dependencies.
	 */
	if ( PHP_VERSION_ID >= 50600 ) {
		if ( ! class_exists( '\DrewM\MailChimp\MailChimp' ) ) {
			require_once $atomic_blocks_includes_dir . 'libraries/drewm/mailchimp-api/MailChimp.php';
		}

		require_once $atomic_blocks_includes_dir . 'exceptions/class-api-error-exception.php';
		require_once $atomic_blocks_includes_dir . 'exceptions/class-mailchimp-api-error-exception.php';
		require_once $atomic_blocks_includes_dir . 'interfaces/newsletter-provider-interface.php';
		require_once $atomic_blocks_includes_dir . 'classes/class-mailchimp.php';
		require_once $atomic_blocks_includes_dir . 'newsletter/newsletter-functions.php';
		require_once $atomic_blocks_src_dir . 'blocks/block-newsletter/index.php';
	}

	/**
	 * Layout Component Registry.
	 */
	if ( PHP_VERSION_ID >= 50600 ) {
		require_once $atomic_blocks_includes_dir . 'layout/layout-functions.php';
		require_once $atomic_blocks_includes_dir . 'layout/class-component-registry.php';
		require_once $atomic_blocks_includes_dir . 'layout/register-layout-components.php';

		/**
		 * REST API Endpoints for Layouts.
		 */
		require_once $atomic_blocks_includes_dir . 'layout/layout-endpoints.php';
	}

	/**
	 * SVG Icon class and helper functions.
	 */
	if ( PHP_VERSION_ID >= 50600 ) {
		require_once $atomic_blocks_includes_dir . 'classes/class-atomicblocks-svg-icons.php';
		require_once $atomic_blocks_includes_dir . 'helpers/svg-icons.php';
	}

	/**
	 * Compatibility functionality.
	 */
	require_once $atomic_blocks_includes_dir . 'compat.php';
}
add_action( 'plugins_loaded', 'atomic_blocks_loader' );


/**
 * Load the plugin textdomain
 */
function atomic_blocks_init() {
	load_plugin_textdomain( 'atomic-blocks', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'init', 'atomic_blocks_init' );


/**
 * Adds a redirect option during plugin activation on non-multisite installs.
 *
 * @param bool $network_wide Whether or not the plugin is being network activated.
 */
function atomic_blocks_activate( $network_wide = false ) {
	// phpcs:ignore WordPress.Security.NonceVerification.Recommended -- Only used to do a redirect. False positive.
	if ( ! $network_wide && ! isset( $_GET['activate-multi'] ) ) {
		add_option( 'atomic_blocks_do_activation_redirect', true );
	}
}
register_activation_hook( __FILE__, 'atomic_blocks_activate' );


/**
 * Redirect to the Atomic Blocks Getting Started page on single plugin activation.
 */
function atomic_blocks_redirect() {
	if ( get_option( 'atomic_blocks_do_activation_redirect', false ) ) {
		delete_option( 'atomic_blocks_do_activation_redirect' );
		wp_safe_redirect( esc_url( admin_url( 'admin.php?page=atomic-blocks' ) ) );
		exit;
	}
}
add_action( 'admin_init', 'atomic_blocks_redirect' );


/**
 * Add image sizes
 */
function atomic_blocks_image_sizes() {
	// Post Grid Block.
	add_image_size( 'ab-block-post-grid-landscape', 600, 400, true );
	add_image_size( 'ab-block-post-grid-square', 600, 600, true );
}
add_action( 'after_setup_theme', 'atomic_blocks_image_sizes' );

/**
 * Check for Pro version.
 */
function atomic_blocks_is_pro() {
	return function_exists( 'AtomicBlocksPro\atomic_blocks_pro_main_plugin_file' ) || function_exists( 'Genesis\PageBuilder\main_plugin_file' );
}
