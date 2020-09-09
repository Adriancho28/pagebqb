<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );


if ( ! class_exists( 'WWS_Common' ) ) :

	/**
	 * This class contains all the global properties and methods
	 * @author WeCreativez
	 * @since 1.2
	 */
	class WWS_Common {

		/**
		 * Set the current version of plugin
		 * @var float
		 * @since 1.2
		 */
		protected $plugin_version = WWS_VERSION;

		/**
		 * Set developer setting option key from wp_options API
		 * @var string
		 * @since 1.2
		 */
		protected $developer_setting = 'sk_wws_developer_setting';

		/**
		 * Set plugin setting option meta_key in wp_options API
		 * @var string
		 * @since 1.2
		 */
		protected $plugin_setting = 'sk_wws_setting';


		/**
		 * Get plugin URL with trailingslash
		 * @return string plugin URL
		 * @since 1.2
		 */
		protected function plugin_url( $url = NULL ) {

			if ( $url == NULL ) {
				return plugin_dir_url( dirname( __FILE__ ) );
			} else {
				return plugin_dir_url( dirname( __FILE__ ) ) . $url;
			}

			

		}

		/**
		 * Get plugin name
		 * @return string Plugin name
		 * @since 1.2
		 */
		protected function plugin_name() {

			return 'WordPress WhatsApp Support';

		}


		/**
		 * Get plugin path with trailingslash
		 * @return string   plugin path
		 * @since 1.2 
		 */
		protected function plugin_path() {

			return plugin_dir_path( dirname( __FILE__ ) );

		}

		/**
		 * Get plugin developer setting using key name
		 * @param  mixed $setting key name of an array
		 * @return mixed          return value from an associated array
		 * @since 1.2
		 */
		protected function get_developer_setting( $setting) {
			$data = get_option( $this->developer_setting );
			if( ! $data[$setting] ) return;
			return $data[$setting];
		}


		/**
		 * Get plugin settings
		 * @param  string $setting first level key of an array
		 * @param  string $level2  second level key of an array
		 * @return mixed          return value from an associated array
		 * @since 1.2
		 */
		protected function get_setting($setting, $level2 = NULL) {
			$data = get_option( $this->plugin_setting );
			if( ! $data[$setting] ) return;
			if ( $level2 != NULL ) {
				return $data[$setting][$level2];
			}
			return $data[$setting];
		}


		/**
		 * Get schedule data
		 * @param  steing $day    mon,tue,wed,thu,fri,sat,sun
		 * @param  mixed $level2 
		 * @return mixed
		 * @since 1.2
		 */
		protected function get_schedule($day, $level2 = NULL) {

			$schedule = $this->get_setting('wws_schedule', $day);

			if ( ! $schedule)  return;
			
			if ( $level2 )  {
				return $schedule[$level2];
			}
			return $schedule;
		}


		protected function is_plugin_active() {

			if ( empty ( get_option('sk_wws_license_key') ) )
				return false;
			else
				return true;
			
		}






	} // .WWS_Common

endif;