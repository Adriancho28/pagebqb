<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );


if ( ! class_exists( 'WWS_Admin_Menu' ) ) :

	/**
	 * Add plugin menus
	 * @author WeCreativez
	 * @since 1.2
	 */
	class WWS_Admin_Menu extends WWS_Common {

		public function __construct() {

			add_action( 'admin_menu', array( $this, 'add_admin_menu' ) );
			
		}


		/**
		 * Add plugin setting menu on WordPress admin menu
		 * @since 1.2
		 */
		public function add_admin_menu() {

			if ( ! $this->is_plugin_active() ) {

				add_menu_page( 
					__('WhatsApp Support', 'wc-wws'), 
					__('WhatsApp Support', 'wc-wws'), 
					'manage_options', 
					'wc-whatsapp-support', 
					array( $this, 'admin_activate_plugin_page' ), 
					'dashicons-format-chat', 
					NULL );

					add_submenu_page( 
						'wc-whatsapp-support',
						__('Plugin Support', 'wc-wws'), 
						__('Plugin Support', 'wc-wws'), 
						'manage_options', 
						'wc-whatsapp-support-support-page', 
						array( $this, 'admin_plugin_support_page' ) );

			} else {

				add_menu_page( 
					__('WhatsApp Support', 'wc-wws'), 
					__('WhatsApp Support', 'wc-wws'), 
					'manage_options', 
					'wc-whatsapp-support', 
					array( $this, 'admin_plugin_setting_page' ), 
					'dashicons-format-chat', 
					NULL );

				/**
				 * @since 1.4
				 */
				add_submenu_page( 
					'wc-whatsapp-support',
					__('Analytics', 'wc-wws'), 
					__('Analytics', 'wc-wws'), 
					'manage_options', 
					'wc-whatsapp-support-analytics', 
					array( $this, 'admin_analytics_page' ) );

				add_submenu_page( 
					'wc-whatsapp-support',
					__('GDPR Settings', 'wc-wws'), 
					__('GDPR Settings', 'wc-wws'), 
					'manage_options', 
					'wc-whatsapp-gdpr', 
					array( $this, 'admin_gdpr_page' ) );

				add_submenu_page( 
					'wc-whatsapp-support',
					__('Product Query', 'wc-wws'), 
					__('Product Query', 'wc-wws'), 
					'manage_options', 
					'wc-whatsapp-product-query', 
					array( $this, 'admin_product_query_page' ) );

				add_submenu_page( 
					'wc-whatsapp-support',
					__('Shortcode Generator', 'wc-wws'), 
					__('Shortcode Generator', 'wc-wws'), 
					'manage_options', 
					'wc-whatsapp-support-shortcode', 
					array( $this, 'admin_shortcode_generator_page' ) );

				add_submenu_page( 
					'wc-whatsapp-support',
					__('Link Generator', 'wc-wws'), 
					__('Link Generator', 'wc-wws'), 
					'manage_options', 
					'wc-whatsapp-support-link-generator', 
					array( $this, 'admin_slink_generator_page' ) );

				add_submenu_page( 
					'wc-whatsapp-support',
					__('Plugin Support', 'wc-wws'), 
					__('Plugin Support', 'wc-wws'), 
					'manage_options', 
					'wc-whatsapp-support-support-page', 
					array( $this, 'admin_plugin_support_page' ) );


			}

		}


		/**
		 * load admin plugin general setting
		 * @since 1.2
		 */
		public function admin_plugin_setting_page() {

			require_once $this->plugin_path() . 'templates/admin/admin-plugin-setting-page.php';

		}

		/**
		 * Load admin shortcode generator page
		 * @since 1.2
		 */
		public function admin_shortcode_generator_page() {

			require_once $this->plugin_path() . 'templates/admin/admin-shortcode-generator-page.php';

		}


		/**
		 * Load plugin support page
		 * @since 1.2
		 */
		public function admin_plugin_support_page() {

			require_once $this->plugin_path() . 'templates/admin/admin-plugin-support-page.php';

		}

		/**
		 * Load plugin analytics page
		 * @since 1.4
		 */
		public function admin_analytics_page() {

			require_once $this->plugin_path() . 'templates/admin/admin-analytics-page.php';

		}


		/**
		 * Load plugin GDPR page
		 * @since 1.5
		 */
		public function admin_gdpr_page() {

			$gdpr = get_option( 'wws_gdpr_settings' );

			require_once $this->plugin_path() . 'templates/admin/admin-gdpr-page.php';

		}

		/**
		 * Load plugin link generator page
		 * @since 1.5.5
		 */
		public function admin_slink_generator_page() {
			require_once $this->plugin_path() . 'templates/admin/admin-link-generator-page.php';
		}



		/**
		 * Load plugin product Query page
		 * @since 1.5
		 */
		public function admin_product_query_page() {

			$product_query = get_option( 'wws_product_query' );

			if ( ! class_exists( 'WooCommerce' ) ) {
				

				echo '<div class="wrap">
					<h2>'.__('Product Query', 'wc-wws').'</h2>
					<hr>
					<p>'.__( 'WooCommerce not installed or maybe no activated.', 'wc-wws' ).'</p>';
				return;

			}

			require_once $this->plugin_path() . 'templates/admin/admin-product-query-page.php';
			

		}


		public function admin_activate_plugin_page() {

			require_once $this->plugin_path() . 'templates/admin/admin-activate-plugin-page.php';

		}



	} // .WWS_Admin_Menu

	// Initilization of the class
	new WWS_Admin_Menu;

endif;