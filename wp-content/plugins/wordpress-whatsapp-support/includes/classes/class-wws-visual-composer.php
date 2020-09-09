<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );

/**
 * This class is adding button generator via Visual Composer.
 * @author Sonu Kaushal
 * @since 1.6
 */
class WWS_Visual_Composer extends WWS_Common {

	public function __construct() {

		if ( ! $this->is_plugin_active() )
			return;

		add_action( 'vc_before_init', array( $this, 'support_button' ) );

	}

	/**
	 * Adding support button in visual composer
	 * @since 1.6
	 */
	public function support_button() {

		vc_map( array(
		 "name" => __( "WhatsApp Support Button", "wc-wws" ),
		 "base" => "whatsappsupport",
		 "class" => "",
		 "category" => __( "Content", "wc-wws"),
		 "icon" => WWS_URL . 'assets/admin/img/vc-support-button-icon.png',
		 "params" => array(

		 		array(
		 		  "type" => "textfield",
		 		  "class" => "",
		 		  "heading" => __( "Support Number", "wc-wws" ),
		 		  "param_name" => "number",
		 		  "value" => __( "911234567890", "wc-wws" ),
		 		  "description" => __( "Enter mobile phone number with the international country code, without '+' character.", "wc-wws" ),
		 		),

		 		array(
		 		  "type" => "textfield",
		 		  "class" => "",
		 		  "heading" => __( "Button Text", "wc-wws" ),
		 		  "param_name" => "text",
		 		  "value" => __( "Contact Us", "wc-wws" ),
		 		),

		 		array(
		 		  "type" => "colorpicker",
		 		  "class" => "",
		 		  "heading" => __( "Button Color", "wc-wws" ),
		 		  "param_name" => "bg-color",
		 		  "value" => '#22c15e', 
		 		),

		 		array(
		 		  "type" => "colorpicker",
		 		  "class" => "",
		 		  "heading" => __( "Button Text Color", "wc-wws" ),
		 		  "param_name" => "text-color",
		 		  "value" => '#ffffff', 
		 		),

		 		array(
		 		  'type' => 'dropdown',
		 		  'heading' => __( 'Button Bold Text',  "wc-wws" ),
		 		  'param_name' => 'text-bold',
		 		  'value' => array(
		 		    __( 'No',  "wc-wws"  ) => '300',
		 		    __( 'Yes',  "wc-wws"  ) => '700',
		 		  ),
		 		),

		 		array(
		 		  'type' => 'dropdown',
		 		  'heading' => __( 'Button Font Style',  "wc-wws" ),
		 		  'param_name' => 'font',
		 		  'value' => array(
		 		  	__( 'Theme Default',  "wc-wws"  ) => '',
		 		    __( 'Lobster',  "wc-wws"  ) => 'Lobster',
		 		    __( 'Satisfy',  "wc-wws"  ) => 'Satisfy',
		 		    __( 'Bree Serif',  "wc-wws"  ) => 'Bree Serif',
		 		    __( 'Oswald',  "wc-wws"  ) => 'Oswald',
		 		    __( 'Ubuntu',  "wc-wws"  ) => 'Ubuntu',
		 		    __( 'Dancing Script',  "wc-wws"  ) => 'Dancing Script',
		 		  ),
		 		),

		 		array(
		 		  "type" => "textfield",
		 		  "class" => "",
		 		  "heading" => __( "Pre Populate Message", "wc-wws" ),
		 		  "param_name" => "message",
		 		  "value" => __( "Hello...", "wc-wws" ),
		 		  "description" => __( "This is what you will receive when user sent message first time.", "wc-wws" ),
		 		),

		 		array(
		 		  'type' => 'dropdown',
		 		  'heading' => __( 'Full Width Button',  "wc-wws" ),
		 		  'param_name' => 'full-width',
		 		  'value' => array(
		 		    __( 'No',  "wc-wws"  ) => 'no',
		 		    __( 'Yes',  "wc-wws"  ) => 'yes',
		 		  ),
		 		  "description" => __( "This will expand button to full width.", "wc-wws" )
		 		),

		 		array(
		 		  'type' => 'dropdown',
		 		  'heading' => __( 'Display On Mobile',  "wc-wws" ),
		 		  'param_name' => 'on-mobile',
		 		  'value' => array(
		 		    __( 'Yes',  "wc-wws"  ) => 'yes',
		 		    __( 'No',  "wc-wws"  ) => 'no',
		 		  ),
		 		),

		 		array(
		 		  'type' => 'dropdown',
		 		  'heading' => __( 'Display On Desktop',  "wc-wws" ),
		 		  'param_name' => 'on-desktop',
		 		  'value' => array(
		 		    __( 'Yes',  "wc-wws"  ) => 'yes',
		 		    __( 'No',  "wc-wws"  ) => 'no',
		 		  ),
		 		),


		 )
		) );

	}



} // WWS_Visual_Composer

new WWS_Visual_Composer;
