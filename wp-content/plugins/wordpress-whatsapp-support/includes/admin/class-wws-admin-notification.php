<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );


if ( ! class_exists( 'WWS_Admin_Notification' ) ) :

	/**
	 * Admin Notifications.
	 * @author WeCreativez
	 * @since 1.3
	 */
	class WWS_Admin_Notification extends WWS_Common {

		public function __construct() {

			add_action( 'sk_wws_admin_notification', array( $this, 'admin_changes_actions' ) );
			add_action( 'sk_wws_admin_notification', array( $this, 'admin_plugin_not_activated' ) );
			add_action( 'sk_wws_admin_notification', array( $this, 'admin_plugin_review' ) );
			
		}

		/**
		 * Add admin notifications when admin change settings
		 * @since 1.3
		 */
		public function admin_changes_actions() {

			if ( isset( $_POST['sk_wws_admin_form_submit'] ) ) : ?>
				<div class="notice notice-success is-dismissible">
				    <p><?php _e( 'Settings saved.', 'wc-wws' ) ?></p>
				</div>
			<?php endif;

			if ( isset( $_POST['sk_wws_admin_send_report'] ) ) : ?>
			<div class="notice notice-success is-dismissible">
			    <p><?php _e( 'Report shared.', 'wc-wws' ) ?></p>
			</div>
			<?php endif;

			if ( isset( $_POST['sk_wws_admin_developer_save'] ) ) : ?>
				<div class="notice notice-success is-dismissible">
				    <p><?php _e( 'Developer settings saved.', 'wc-wws' ) ?></p>
				</div>
			<?php endif;

			if ( isset( $_POST['wws_submit_gdpr_settings'] ) ) : ?>
				<div class="notice notice-success is-dismissible">
				    <p><?php _e( 'GDPR settings saved.', 'wc-wws' ) ?></p>
				</div>
			<?php endif;

		}

		/**
		 * Add admin notification for activate plugin.
		 * @since 1.3
		 */
		public function admin_plugin_not_activated() {
			if ( get_option( 'sk_wws_license_key' ) != '' ) {
				return;
			}
			?>
		    <div class="notice notice-warning is-dismissible" >
	        <p>
	        	<?php 
	        		printf(
	        			esc_html__( 'Enter your purchase code to get instant support and advance customer service! %s', 'wc-wws' ),
	        			'<a href="'. admin_url( 'admin.php?page=wc-whatsapp-support-support-page' ) .'">' . __( 'Enter here', 'wc-wws' ) . '</a>'
	        		)
	        	?>
	        </p>
		    </div>
		  <?php
		}


		public function admin_plugin_review() {
			if ( get_option( 'wws_admin_review' ) == 1 ) {
				return;
			}

			?>

		    <div class="notice notice-warning is-dismissible" >
	        <h3><?php _e( 'Leave A Review?', 'wc-wws' ) ?></h3>
						<p>
							<?php
								printf(
									__( 'We hope you\'ve enjoyed using %s Would you consider leaving us a review on %s', 'wc-wws' ),
									'<strong>WeCreativez WhatsApp Support!</strong>',
									'<a href="https://codecanyon.net/downloads/">codecanyon.net?</a>'
								)

							?>
						</p>
	        
	        <ul class="wws-inline-ul">
	        	<li>
	        		<span class="wws-admin-icon dashicons dashicons-external"></span> 
	        			<a href="https://codecanyon.net/downloads/">
	        				<strong><?php _e( 'Sure! I\'d love to!', 'wc-wws' ) ?></strong>
	        			</a>
	        	</li>
	        	<li>
	        		<span class="wws-admin-icon dashicons dashicons-smiley"></span>
	        			<a href="?wws_admin_review=1"><?php _e( 'I\'ve already left a review', 'wc-wws' ) ?></a>
	        	</li>
	        	<li>
	        		<span class="wws-admin-icon dashicons dashicons-dismiss"></span>
	        			<a href="?wws_admin_review=1"><?php _e( 'Never show again', 'wc-wws' ) ?></a>
	        	</li>
	        </ul>
				</div>

			<?php

		}



	} // .WWS_Admin_Notification

	// Initilization of the class
	new WWS_Admin_Notification;

endif;