<?php


// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );


if ( ! class_exists( 'WWS_Public_Popup' ) ) :

	/**
	 * Add popup for frontend users
	 * @package WeCreativez/Public
	 * @since 1.2
	 */
	class WWS_Public_Popup extends WWS_Common {


		public function __construct() {

			if ( ! $this->is_plugin_active() )
				return;

			if ( $this->get_developer_setting('html_in') != 'footer' ) {
				add_action( 'wp_head', array( $this, 'display_popup' ) );
			} else {
				add_action( 'wp_footer', array( $this, 'display_popup' ) );
			}
			
		}

		/**
		 * Displaying popup on frontend
		 * @since 1.2
		 */
		public function display_popup() {

			if ( $this->disable_popup() != true ) return;
			  
			require_once $this->plugin_path() . 'templates/public/template-'.$this->get_setting('ui_layout').'.php';

		}


		/**
		 * Display on page 
		 * @return bool 
		 * @since 1.2
		 */
		public function display_on_page() {

			global $post;

			// Not display wws on selected page
			$by_slugs_exclude = $this->get_setting('wws_filter_by_page', 'by_slugs_exclude');
			if ( $by_slugs_exclude != '' ) {	
				$post_slug = $post->post_name;
					if ( in_array( $post_slug, $by_slugs_exclude) ) {
						return false;
					}
			}

			// display wws on selected page
			$by_slugs = $this->get_setting('wws_filter_by_page', 'by_slugs');
			if ( $by_slugs != '' ) {	
				$post_slug = $post->post_name;
				return in_array( $post_slug, $by_slugs);
			}

			// display wws on front page
			if ( is_front_page() == true && $this->get_setting('wws_filter_by_page', 'by_front_page') == 1 ) {
				return true;
			}
			
			// display wws on all pages and posts
			if ( $this->get_setting('wws_filter_by_page', 'by_everywhere') == 1 ) {
				return true;
			}


			
			return false;

		}



		public function disable_popup() {

			// if is_mobile == true && enable_moble != true : return
			if ( wp_is_mobile() == true && $this->get_setting('wws_display_on_mobile') != 1 ) return false;
			// if is_desktop == true && enable_desktop != true : return
			if ( ! wp_is_mobile() == true && $this->get_setting('wws_display_on_desktop') != 1 ) return false;
			// if display on page is not true
			if ( $this->display_on_page() != true ) return false;
			// if schedule is true
			if ( $this->is_schedule() != true ) return false;

			return true;

		}


		public function format_time_for_compare($day, $time) {
			return (int)str_replace(":","",$this->get_schedule($day, $time));
		}

		public function is_schedule() {

			$current_day = strtolower(current_time('D'));
			$current_time = (int)current_time('His');

			// for monday
			if ( $current_day == 'mon' && $this->get_schedule('mon', 'is_enable') == 1) {
				if ( ( $current_time > $this->format_time_for_compare('mon', 'start') ) && ( $current_time < $this->format_time_for_compare('mon', 'end') )  ) {
					return true;
				}	
			}
			// for tuesday
			if ( $current_day == 'tue' && $this->get_schedule('tue', 'is_enable') == 1) {
				if ( ( $current_time > $this->format_time_for_compare('tue', 'start') ) && ( $current_time < $this->format_time_for_compare('tue', 'end') )  ) {
					return true;
				}	
			}
			// for wednesday
			if ( $current_day == 'wed' && $this->get_schedule('wed', 'is_enable') == 1) {
				if ( ( $current_time > $this->format_time_for_compare('wed', 'start') ) && ( $current_time < $this->format_time_for_compare('wed', 'end') )  ) {
					return true;
				}	
			}
			// for thursday
			if ( $current_day == 'thu' && $this->get_schedule('thu', 'is_enable') == 1) {
				if ( ( $current_time > $this->format_time_for_compare('thu', 'start') ) && ( $current_time < $this->format_time_for_compare('thu', 'end') )  ) {
					return true;
				}	
			}
			// for friday
			if ( $current_day == 'fri' && $this->get_schedule('fri', 'is_enable') == 1) {
				if ( ( $current_time > $this->format_time_for_compare('fri', 'start') ) && ( $current_time < $this->format_time_for_compare('fri', 'end') )  ) {
					return true;
				}	
			}
			// for saturday
			if ( $current_day == 'sat' && $this->get_schedule('sat', 'is_enable') == 1) {
				if ( ( $current_time > $this->format_time_for_compare('sat', 'start') ) && ( $current_time < $this->format_time_for_compare('sat', 'end') )  ) {
					return true;
				}	
			}
			// for sunday
			if ( $current_day == 'sun' && $this->get_schedule('sun', 'is_enable') == 1) {
				if ( ( $current_time > $this->format_time_for_compare('sun', 'start') ) && ( $current_time < $this->format_time_for_compare('sun', 'end') )  ) {
					return true;
				}	
			}

			return false;

		}



	} // .WWS_Public_Popup


	new WWS_Public_Popup;

endif;