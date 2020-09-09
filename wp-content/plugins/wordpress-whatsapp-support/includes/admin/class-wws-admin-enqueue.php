<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );


if ( ! class_exists( 'WWS_Admin_Enqueue' ) ) :

	/**
	 * Enqueue all the resources for admin
	 * @package WeCreativez/Admin
	 * @author WeCreativez
	 * @since 1.2
	 */
	class WWS_Admin_Enqueue extends WWS_Common {


		public function __construct() {

			add_action( 'admin_enqueue_scripts', array( $this, 'enquque_scripts' ) );

		}

		/**
		 * Enqueue admin scripts
		 * @param  string $hook Current admin page slug
		 * @since 1.2
		 */
		public function enquque_scripts( $hook ) {

			if ( $this->is_my_admin_page( $hook ) != true ) return;

			wp_enqueue_style('wp-color-picker');
      wp_enqueue_media();

      wp_enqueue_script( 'wws-tippy-script', WWS_URL . 'assets/libraries/tippy/tippy.all.min.js', array(), WWS_VERSION, true );

			wp_enqueue_style( 'wws-timepicker-style', WWS_URL . 'assets/admin/css/wws-timepicker.css', array(), WWS_VERSION );
			wp_enqueue_script('wws-timepicker-script', WWS_URL . 'assets/admin/js/wws-admin-timepicker.js', array('wp-color-picker'), WWS_VERSION, true);

			wp_enqueue_style( 'wws-admin-select2', WWS_URL . 'assets/admin/css/wws-admin-select2.css', array(), WWS_VERSION );
			wp_enqueue_script('wws-admin-select2', WWS_URL . 'assets/admin/js/wws-admin-select2.js', array(), WWS_VERSION, true);

			wp_enqueue_style( 'wws-admin-datatable', WWS_URL . 'assets/admin/css/wws-admin-datatables.css', array(), WWS_VERSION );
			wp_enqueue_style( 'wws-admin-datatable-button-style', WWS_URL . 'assets/libraries/dataTables/buttons.dataTables.min.css', array(), WWS_VERSION );
			wp_enqueue_script('wws-admin-datatable', WWS_URL . 'assets/admin/js/wws-admin-datatable.js', array(), WWS_VERSION, true);
			wp_enqueue_script('wws-admin-datatable-button-script', WWS_URL . 'assets/libraries/dataTables/dataTables.buttons.min.js', array(), WWS_VERSION, true);
			wp_enqueue_script('wws-admin-datatable-button-html5-script', WWS_URL . 'assets/libraries/dataTables/buttons.html5.min.js', array(), WWS_VERSION, true);

			wp_enqueue_style( 'wws-admin-style', WWS_URL . 'assets/admin/css/wws-admin-style.css', array(), WWS_VERSION);
			wp_enqueue_script('wws-admin-script', WWS_URL . 'assets/admin/js/wws-admin-script.js', array('wp-color-picker'), WWS_VERSION, true);
			wp_localize_script( 'wws-admin-script', 'wwsAdminObj', 
				array(
					'admin_ajax' => admin_url( 'admin-ajax.php' ),
					'site_url'		=> site_url(),
				)				
			);
			
		}



		/**
		 * This method is for checking current admin page is this plugin page or not
		 * @param  string  $hook Current admin page slug
		 * @return boolean
		 * @since 1.2
		 */
		private function is_my_admin_page( $hook ) {

			if ( $hook == 'toplevel_page_wc-whatsapp-support'
				|| $hook == 'whatsapp-support_page_wc-whatsapp-support-shortcode'
				|| $hook == 'whatsapp-support_page_wc-whatsapp-support-support-page'
				|| $hook == 'whatsapp-support_page_wc-whatsapp-support-new-page'
				|| $hook == 'whatsapp-support_page_wc-whatsapp-support-analytics'
				|| $hook == 'whatsapp-support_page_wc-whatsapp-gdpr'
				|| $hook == 'whatsapp-support_page_wc-whatsapp-product-query'
				|| $hook == 'whatsapp-support_page_wc-whatsapp-support-link-generator' ) {

				return true;

			}

			return false;

		}


	} // .WWS_Admin_Enqueue

	new WWS_Admin_Enqueue;

endif;