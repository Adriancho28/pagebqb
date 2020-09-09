<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );

if ( ! class_exists( 'WWS_Admin_Developer' ) ) :

	/**
	 * Plugin admin developers option to fix incompatibilities issue
	 * @package WeCreativez
	 * @since 1.2
	 */
	class WWS_Admin_Developer extends WWS_Common {


		public function __construct() {

			if ( $this->get_developer_setting('fix_widget_shortcode') == 1 ) {
				// Enable shortcodes in text widgets
				add_filter('widget_text','do_shortcode');

			}
		}

	} // .WWS_Admin_Developer

	new WWS_Admin_Developer;

endif;