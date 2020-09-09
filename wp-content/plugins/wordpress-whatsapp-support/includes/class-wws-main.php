<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );


/**
 * WeCreativez main class for loading all the other files.
 * @package WeCreativez
 * @author WeCreativez
 * @since 1.2
 */
final class WWS_Main {


	public function init() {

		require_once WWS_ABSPATH . 'includes/helper/helper-wws-common.php';
		require_once WWS_ABSPATH . 'includes/class-wws-common.php';
		// load multiperson ajax
		require_once WWS_ABSPATH . 'includes/classes/class-wws-plugin-activation.php';
		require_once WWS_ABSPATH . 'includes/ajax/ajax-edit-multi-account.php';
		require_once WWS_ABSPATH . 'includes/ajax/ajax-add-multi-account.php';
		require_once WWS_ABSPATH . 'includes/ajax/ajax-analytics-deep-report.php';
		// Load analytics class
		require_once WWS_ABSPATH . 'includes/classes/class-wws-analytics.php';
		// Load GDPR Class
		require_once WWS_ABSPATH . 'includes/classes/class-wws-gdpr.php';
		// Load Product Query Class
		require_once WWS_ABSPATH . 'includes/classes/class-wws-product-query.php';

		require_once WWS_ABSPATH . 'includes/public/class-wws-public-shortcode.php';
		require_once WWS_ABSPATH . 'includes/public/class-wws-public-enqueue.php';
		require_once WWS_ABSPATH . 'includes/public/class-wws-public-popup.php';

		// Load visual composer support button generator.
		include_once(ABSPATH.'wp-admin/includes/plugin.php');
		if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {
		  require_once WWS_ABSPATH . 'includes/classes/class-wws-visual-composer.php';
		}
		
		// loading all the admin files
		if ( is_admin() ) {
			
			require_once WWS_ABSPATH . 'includes/admin/class-wws-admin-menu.php';
			require_once WWS_ABSPATH . 'includes/admin/class-wws-admin-enqueue.php';
			require_once WWS_ABSPATH . 'includes/admin/class-wws-admin-save-settings.php';
			require_once WWS_ABSPATH . 'includes/admin/class-wws-admin-developer.php';
			require_once WWS_ABSPATH . 'includes/admin/class-wws-admin-notification.php';

		}

	}




} // .WWS_Main


