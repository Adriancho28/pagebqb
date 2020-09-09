<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );



// Class exists check
if ( ! class_exists( 'WWS_Activation' ) ) :

	/**
	 * Plugin activation 
	 * @author WeCreativez
	 * @since 1.2
	 */
	class WWS_Activation {


		/**
		 * Add options setting in wp_options API
		 * @since 1.2
		 */
		public static function activate() {


			global $wpdb;
			$wws_analytics_table = $wpdb->prefix.'wws_analytics';
			if($wpdb->get_var("SHOW TABLES LIKE '$wws_analytics_table'") != $wws_analytics_table) {
			     //table not in database. Create new table
			     $charset_collate = $wpdb->get_charset_collate();
			 
			     $sql = "CREATE TABLE $wws_analytics_table ( id BIGINT NOT NULL AUTO_INCREMENT , visitor_ip VARCHAR(32) NOT NULL , message LONGTEXT NOT NULL , device_type VARCHAR(32) NOT NULL , os VARCHAR(32) NOT NULL, browser VARCHAR(32) NOT NULL , date VARCHAR(32) NOT NULL , PRIMARY KEY (id)) $charset_collate;";
			     require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			     dbDelta( $sql );
			}

			if ( $wpdb->get_var( "SHOW COLUMNS FROM $wws_analytics_table LIKE 'referral'" ) != 'referral' ) {
				$wpdb->query( "ALTER TABLE $wws_analytics_table ADD referral LONGTEXT NOT NULL AFTER message" );
			}


			self::register_settings( 'sk_wws_setting', array(
				'ui_layout' => 1,
				'ui_layout_bg_color' => '#22C15E',
				'ui_layout_text_color' => '#ffffff',
				'ui_layout_gradient' => '1',
				'ui_support_person_img' => NULL,
				'ul_trigger_btn_only_icon' => '0',
				'text_about_support' => 'Our customer support team is here to answer your questions. Ask us anything!',
				'text_welcome_msg' => 'Hi, how can I help?',
				'text_input_placeholder' => 'Reply to WeCreativez...',
				'text_predefined_text' => '----------------------{br}'.PHP_EOL .'Page Title: {title}{br}'.PHP_EOL .'Page URL: {url}',
				'text_trigger_btn' => 'Hi, how can I help?',
				'wws_contact_number' => 911234567890,
				'wws_group_id' => 'XYZ12345678',
				'wws_scroll_length' => '',
				'wws_rtl'	=> '0',
				'wws_display_on_desktop' => 1,
				'wws_desktop_location' => 'br',
				'wws_display_on_mobile' => 1,
				'wws_mobile_location' => 'br',
				'wws_auto_popup' => 1,
				'wws_auto_popup_time' => '10',
				'wws_custom_css' => '',
				'wws_filter_by_page' => array(
					'by_slugs' => NULL,
					'by_slugs_exclude' => NULL,
					'by_front_page' => 1,
					'by_everywhere' => 1,
				),
				'wws_schedule' => array(
					'mon' => array(
						'is_enable' => 1,
						'start' => '00:00:00',
						'end' => '23:59:59'
					),
					'tue' => array(
						'is_enable' => 1,
						'start' => '00:00:00',
						'end' => '23:59:59'
					),
					'wed' => array(
						'is_enable' => 1,
						'start' => '00:00:00',
						'end' => '23:59:59'
					),
					'thu' => array(
						'is_enable' => 1,
						'start' => '00:00:00',
						'end' => '23:59:59'
					),
					'fri' => array(
						'is_enable' => 1,
						'start' => '00:00:00',
						'end' => '23:59:59'
					),
					'sat' => array(
						'is_enable' => 1,
						'start' => '00:00:00',
						'end' => '23:59:59'
					),
					'sun' => array(
						'is_enable' => 1,
						'start' => '00:00:00',
						'end' => '23:59:59'
					)
				)
			) 
		);


		self::register_settings( 'wws_product_query', array(
			'status' => '0',
			'btn_location' => 'woocommerce_before_add_to_cart_form',
			'btn_bg_color' => '#22C15E',
			'btn_text_color' => '#ffffff',
			'btn_label' => 'Need Help? Contact Us via WhatsApp',
			'support_number' => '911234567890',
			'support_person_name' => 'Maya',
			'support_person_title' => 'Pre-sale Questions',
			'support_person_img' => 'http://placehold.it/100x100',
			'support_pre_message' => 'Hi, I need help with [wws_product_title] [wws_product_url]',
			'exclude_by_products' => array(),
		) );

		// GDPR Setting
		self::register_settings( 'wws_gdpr_settings', array(
			'gdpr_status' 			=> '0',
			'gdpr_msg'					=> 'I agree with the [wws_gdpr_link]',
			'gdpr_privacy_page' => get_option( 'page_on_front' ),
		) );

		}



		/**
		 * Register plugin settings
		 * @param  string $option_name
		 * @param  array  $settings
		 * @since 1.5
		 */
		public static function register_settings( $option_name, $settings = array() ) {

			// add plugin settings in wp_options table
			$db_setting = get_option( $option_name, array() );
			$merge_setting = array_merge( $settings, (array)$db_setting );
			update_option( $option_name, $merge_setting );


		}


	} // .WWS_Activation



endif;