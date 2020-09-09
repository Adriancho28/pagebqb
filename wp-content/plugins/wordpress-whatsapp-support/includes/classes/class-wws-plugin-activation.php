<?php

class WWS_Plugin_Activation {

	public function __construct() {

		add_action( "wp_ajax_wws_plugin_activation_ajax", array( $this, 'wws_plugin_activation_ajax' ) );
		add_action( "wp_ajax_nopriv_wws_plugin_activation_ajax", array( $this, 'wws_plugin_activation_ajax' ) );

	}

	public function wws_plugin_activation_ajax() {

		$license_key = trim( $_POST['purchase_code'] );

		$params = array(
		  'body' => array(
		    'license_user' => site_url(),
		    'license_key' => $license_key,
		  ),
		);

		// Make the POST request
		$request = wp_remote_post('http://envato.wecreativez.com/plugin-verification/whatsapp-support', $params);

		// Check if response is valid
		if (!is_wp_error($request) || wp_remote_retrieve_response_code($request) === 200) {

			$response = json_decode( $request['body'] );
			
			if ( $response->flag == '1' ) {
				update_option('sk_wws_license_key', $license_key);
				echo '<div> ' .  __( 'Plugin Activated', 'wc-wws' ) . ' </div>';
				echo '<div><a  href="' . admin_url( 'admin.php?page=wc-whatsapp-support' ) . '">' . __( 'Goto Plugin Settings', 'wc-wws' ) . '<a/></div>';
			} else {
				update_option('sk_wws_license_key', '');
				_e( 'Invalid Purchase Code', 'wc-wws' );
			}
			
		} else {

			_e( 'Server error. Please contact plugin author.', 'wc-wws' );

		}
		
		wp_die();
	}

} // .WWS_Plugin_Activation
new WWS_Plugin_Activation;