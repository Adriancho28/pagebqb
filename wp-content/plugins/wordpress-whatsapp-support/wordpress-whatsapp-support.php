<?php
/*
Plugin Name: WeCreativez WhatsApp Support 
Plugin URI:  http://wecreativez.com/
Description: WordPress WhatsApp Support plugin provides better and easy way to communicate visitors and customers directly to your support person.
Version:     1.6.5
Author:      Sonu Kaushal
Author URI:  http://sonukaushal.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wc-wws
Domain Path: languages
*/

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );

update_option('sk_wws_license_key', 'NULLED');

/**
 * Defined Plugin ABSPATH
 * @since 1.2
 */
if ( ! defined( 'WWS_ABSPATH' ) ) {
  define( 'WWS_ABSPATH', plugin_dir_path( __FILE__ ) );
}

/**
 * Defined Plugin URL
 * @since 1.5
 */
if ( ! defined( 'WWS_URL' ) ) {
  define( 'WWS_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * Defined plugin version
 * @since 1.4
 */
if ( ! defined( 'WWS_VERSION' ) ) {
  define( 'WWS_VERSION', '1.6.5' );
}


/**
 * This function will run when plugin activate
 * @since 1.2
 */
function wws_plugin_activation() {
  require_once WWS_ABSPATH . 'includes/class-wws-activation.php';
  WWS_Activation::activate();
}
register_activation_hook( __FILE__, 'wws_plugin_activation' );



/**
 * Include main class
 * @since 1.2
 */
if ( ! class_exists( 'WWS_Main' ) ) {
  require_once WWS_ABSPATH . 'includes/class-wws-main.php';
}


/**
 * Initialization of main class
 * @since 1.2
 */
if ( ! function_exists( 'wws_initialization' ) ) {

  function wws_initialization() {
    $wws_main = new WWS_Main;
    $wws_main->init();
  }
  // Run instance of class
  add_action( 'plugins_loaded', 'wws_initialization' );

}

/**
 * Load plugin textdomain.
 * @since 1.6
 */
if ( ! function_exists( 'wws_load_textdomain' ) ) {
  function wws_load_textdomain() {
    load_plugin_textdomain( 'wc-wws', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
  }
  add_action( 'init', 'wws_load_textdomain' );
}