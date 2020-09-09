<?php

// Preventing to direct access
defined('ABSPATH') OR die('Direct access not acceptable!');


if (!class_exists('WWS_Admin_Save_Settings')):

  class WWS_Admin_Save_Settings extends WWS_Common {

    public function __construct() {

      add_action('admin_init', array($this, 'share_report'));
      add_action('admin_init', array($this, 'update_developer_settings'));
      add_action('admin_init', array($this, 'update_setting'));
      add_action('admin_init', array($this, 'add_multi_account_person'));
      add_action('admin_init', array($this, 'delete_multi_account_person'));
      add_action('admin_init', array($this, 'edit_multi_account_person'));
      add_action('init', array($this, 'activate_plugin'));
      add_action('init', array($this, 'deactivate_plugin'));
      add_action( 'admin_init', array( $this, 'delete_complete_analytics' ) );
      add_action( 'admin_init', array( $this, 'admin_plugin_review' ) );
      add_action( 'admin_init', array( $this, 'gdpr_settings' ) );
      add_action( 'admin_init', array( $this, 'product_query_settings' ) );

    }

    public function share_report() {

      if (!isset($_POST['sk_wws_admin_send_report'])) {
        return;
      }

      $admin_email   = $_POST['sk_wws_admin_report_email_address'];
      $plugin_report = $_POST['sk_wws_admin_support_report'];

      $to        = 'sonukaushalssk@gmail.com';
      $subject   = '[Plugin Support] ' . $this->plugin_name() . ' from -' . $admin_email;
      $body      = '<pre>' . stripslashes($plugin_report) . '</pre>';
      $headers[] = 'Content-Type: text/html; charset=UTF-8';
      $headers[] = 'From: ' . get_bloginfo('name') . ' <' . $admin_email . '>';
      $headers[] = 'Reply-To: ' . get_bloginfo('name') . ' <' . $admin_email . '>';

      wp_mail($to, $subject, $body, $headers);

    }


    public function product_query_settings() {

      if ( ! isset( $_POST['wws_product_query_submit'] ) )
        return false;

      $setting = $_POST['wws_product_query_setting'];

      $setting = array(
                  'status' => ( isset( $setting['status'] ) ) ? '1' : '0',
                  'btn_location' => $setting['btn_location'],
                  'btn_bg_color' => $setting['btn_bg_color'],
                  'btn_text_color' => $setting['btn_text_color'],
                  'btn_label'  => $setting['btn_label'],
                  'support_number' => $setting['support_number'],
                  'support_person_name' => $setting['support_person_name'],
                  'support_person_title' => $setting['support_person_title'],
                  'support_person_img' => $setting['support_person_img'],
                  'support_pre_message' => $setting['support_pre_message'],
                  'exclude_by_products' => ( isset( $setting['exclude_by_products'] ) ) ? $setting['exclude_by_products'] : array(),
                  'exclude_by_categories' => ( isset( $setting['exclude_by_categories'] ) ) ? $setting['exclude_by_categories'] : array(),
                 );


      update_option( 'wws_product_query', $setting );

    }

    public function gdpr_settings() {

      if ( ! isset($_POST['wws_submit_gdpr_settings'] ) )
        return;

      $gdpr = $_POST['wws_gdpr_settings'];

      $gdpr_update['gdpr_status'] =  isset( $gdpr['gdpr_status'] ) ? '1' : '0' ;
      $gdpr_update['gdpr_msg'] =  $gdpr['gdpr_msg'];
      $gdpr_update['gdpr_privacy_page'] =  $gdpr['gdpr_privacy_page'];

      update_option( 'wws_gdpr_settings', $gdpr_update );

    }

    public function update_developer_settings() {

      if (!isset($_POST['sk_wws_admin_developer_save'])) {
        return;
      }

      $developer['debuggin_status']      = ( isset( $_POST['sk_wws_developer_setting']['debuggin_status'] ) ) ? '1' : '0';
      $developer['html_in']              = $_POST['sk_wws_developer_setting']['html_in'];
      $developer['fix_widget_shortcode'] = $_POST['sk_wws_developer_setting']['fix_widget_shortcode'];
      $developer['disable_auto_update'] = $_POST['sk_wws_developer_setting']['disable_auto_update'];

      if ( ! add_option( $this->developer_setting, $developer ) ) {
        update_option( $this->developer_setting, $developer );
      }
      wp_redirect( admin_url( 'admin.php?page=wc-whatsapp-support-support-page' ) );

    }

    function update_setting() {

      if (!isset($_POST['sk_wws_admin_form_submit'])) {
        return;
      }

      $new_value['ui_layout']             = $_POST['sk_wws_setting']['ui_layout'];
      $new_value['ui_layout_bg_color']    = $_POST['sk_wws_setting']['ui_layout_bg_color'];
      $new_value['ui_layout_text_color']  = $_POST['sk_wws_setting']['ui_layout_text_color'];
      $new_value['ui_support_person_img'] = $_POST['sk_wws_setting']['ui_support_person_img'];
      $new_value['ui_layout_gradient']    = ( isset ( $_POST['sk_wws_setting']['ui_layout_gradient'] ) ) ? '1' : '0';
      $new_value['ul_trigger_btn_only_icon']    = ( isset ( $_POST['sk_wws_setting']['ul_trigger_btn_only_icon'] ) ) ? '1' : '0';

      $new_value['text_about_support']     = $_POST['sk_wws_setting']['text_about_support'];
      $new_value['text_welcome_msg']       = $_POST['sk_wws_setting']['text_welcome_msg'];
      $new_value['text_input_placeholder'] = $_POST['sk_wws_setting']['text_input_placeholder'];
      $new_value['text_trigger_btn']       = $_POST['sk_wws_setting']['text_trigger_btn'];
      $new_value['text_predefined_text']   = $_POST['sk_wws_setting']['text_predefined_text'];

      $new_value['wws_contact_number']     = $_POST['sk_wws_setting']['wws_contact_number'];
      $new_value['wws_group_id']           = $_POST['sk_wws_setting']['wws_group_id'];
      $new_value['wws_scroll_length']      = $_POST['sk_wws_setting']['wws_scroll_length'];
      $new_value['wws_rtl']                = ( isset ( $_POST['sk_wws_setting']['wws_rtl'] ) ) ? '1' : '0';
      $new_value['wws_display_on_desktop'] = $_POST['sk_wws_setting']['wws_display_on_desktop'];
      $new_value['wws_desktop_location']   = $_POST['sk_wws_setting']['wws_desktop_location'];
      $new_value['wws_display_on_mobile']  = $_POST['sk_wws_setting']['wws_display_on_mobile'];
      $new_value['wws_mobile_location']    = $_POST['sk_wws_setting']['wws_mobile_location'];
      $new_value['wws_auto_popup']         = $_POST['sk_wws_setting']['wws_auto_popup'];
      $new_value['wws_auto_popup_time']    = $_POST['sk_wws_setting']['wws_auto_popup_time'];
      $new_value['wws_custom_css']         = $_POST['sk_wws_setting']['wws_custom_css'];

      $new_value['wws_filter_by_page']['by_slugs']       = $_POST['sk_wws_setting']['wws_filter_by_page']['by_slugs'];
      $new_value['wws_filter_by_page']['by_slugs_exclude'] = $_POST['sk_wws_setting']['wws_filter_by_page']['by_slugs_exclude'];
      $new_value['wws_filter_by_page']['by_front_page']  = $_POST['sk_wws_setting']['wws_filter_by_page']['by_front_page'];
      $new_value['wws_filter_by_page']['by_everywhere']  = $_POST['sk_wws_setting']['wws_filter_by_page']['by_everywhere'];

      $new_value['wws_schedule']['mon']['is_enable'] = $_POST['sk_wws_setting']['wws_schedule']['mon']['is_enable'];
      $new_value['wws_schedule']['mon']['start']     = $_POST['sk_wws_setting']['wws_schedule']['mon']['start'];
      $new_value['wws_schedule']['mon']['end']       = $_POST['sk_wws_setting']['wws_schedule']['mon']['end'];

      $new_value['wws_schedule']['tue']['is_enable'] = $_POST['sk_wws_setting']['wws_schedule']['tue']['is_enable'];
      $new_value['wws_schedule']['tue']['start']     = $_POST['sk_wws_setting']['wws_schedule']['tue']['start'];
      $new_value['wws_schedule']['tue']['end']       = $_POST['sk_wws_setting']['wws_schedule']['tue']['end'];

      $new_value['wws_schedule']['wed']['is_enable'] = $_POST['sk_wws_setting']['wws_schedule']['wed']['is_enable'];
      $new_value['wws_schedule']['wed']['start']     = $_POST['sk_wws_setting']['wws_schedule']['wed']['start'];
      $new_value['wws_schedule']['wed']['end']       = $_POST['sk_wws_setting']['wws_schedule']['wed']['end'];

      $new_value['wws_schedule']['thu']['is_enable'] = $_POST['sk_wws_setting']['wws_schedule']['thu']['is_enable'];
      $new_value['wws_schedule']['thu']['start']     = $_POST['sk_wws_setting']['wws_schedule']['thu']['start'];
      $new_value['wws_schedule']['thu']['end']       = $_POST['sk_wws_setting']['wws_schedule']['thu']['end'];

      $new_value['wws_schedule']['fri']['is_enable'] = $_POST['sk_wws_setting']['wws_schedule']['fri']['is_enable'];
      $new_value['wws_schedule']['fri']['start']     = $_POST['sk_wws_setting']['wws_schedule']['fri']['start'];
      $new_value['wws_schedule']['fri']['end']       = $_POST['sk_wws_setting']['wws_schedule']['fri']['end'];

      $new_value['wws_schedule']['sat']['is_enable'] = $_POST['sk_wws_setting']['wws_schedule']['sat']['is_enable'];
      $new_value['wws_schedule']['sat']['start']     = $_POST['sk_wws_setting']['wws_schedule']['sat']['start'];
      $new_value['wws_schedule']['sat']['end']       = $_POST['sk_wws_setting']['wws_schedule']['sat']['end'];

      $new_value['wws_schedule']['sun']['is_enable'] = $_POST['sk_wws_setting']['wws_schedule']['sun']['is_enable'];
      $new_value['wws_schedule']['sun']['start']     = $_POST['sk_wws_setting']['wws_schedule']['sun']['start'];
      $new_value['wws_schedule']['sun']['end']       = $_POST['sk_wws_setting']['wws_schedule']['sun']['end'];

      update_option($this->plugin_setting, $new_value);
    }

    public function activate_plugin() {

      if (!isset($_POST['sk_wws_license_key_activate'])) {
        return;
      }

      $license_key = $_POST['sk_wws_admin_license_key'];

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
          return;
        }

      }

      update_option('sk_wws_license_key', '');
      return false;

    }


    public function deactivate_plugin() {

      if (!isset($_POST['sk_wws_license_key_deactivate'])) {
        return;
      }

      update_option('sk_wws_license_key', '');
      return false;
      
    }


    public function add_multi_account_person() {

      if (!isset($_POST['sk_wws_add_multi_account_submit'])) {
        return;
      }

      $setting = get_option('sk_wws_multi_account');

      $setting[] = array(
        'contact' => $_POST['sk_wws_multi_account']['contact'],
        'name' => $_POST['sk_wws_multi_account']['name'],
        'title' => $_POST['sk_wws_multi_account']['title'],
        'image' => $_POST['sk_wws_multi_account']['image'],
        'pre_message' => $_POST['sk_wws_multi_account']['pre_message'],

        'start_hours' => $_POST['sk_wws_multi_account']['start_hours'],
        'start_minutes' => $_POST['sk_wws_multi_account']['start_minutes'],
        'end_hours' => $_POST['sk_wws_multi_account']['end_hours'],
        'end_minutes' => $_POST['sk_wws_multi_account']['end_minutes'],

        'days' => array(
          (isset($_POST['sk_wws_multi_account']['mon'])) ? 'mon' : '0',
          (isset($_POST['sk_wws_multi_account']['tue'])) ? 'tue' : '0',
          (isset($_POST['sk_wws_multi_account']['wed'])) ? 'wed' : '0',
          (isset($_POST['sk_wws_multi_account']['thu'])) ? 'thu' : '0',
          (isset($_POST['sk_wws_multi_account']['fri'])) ? 'fri' : '0',
          (isset($_POST['sk_wws_multi_account']['sat'])) ? 'sat' : '0',
          (isset($_POST['sk_wws_multi_account']['sun'])) ? 'sun' : '0',
        ),
      );

      update_option('sk_wws_multi_account', $setting);

    }


    public function edit_multi_account_person() {

      if (!isset($_POST['sk_wws_edit_multi_account_submit'])) {
        return;
      }

      $setting = get_option('sk_wws_multi_account');
      $key = $_POST['sk_wws_multi_account']['key'];

      $setting[$key] = array(
        'contact' => $_POST['sk_wws_multi_account']['contact'],
        'name' => $_POST['sk_wws_multi_account']['name'],
        'title' => $_POST['sk_wws_multi_account']['title'],
        'image' => $_POST['sk_wws_multi_account']['image'],
        'pre_message' => $_POST['sk_wws_multi_account']['pre_message'],

        'start_hours' => $_POST['sk_wws_multi_account']['start_hours'],
        'start_minutes' => $_POST['sk_wws_multi_account']['start_minutes'],
        'end_hours' => $_POST['sk_wws_multi_account']['end_hours'],
        'end_minutes' => $_POST['sk_wws_multi_account']['end_minutes'],

        'days' => array(
          (isset($_POST['sk_wws_multi_account']['mon'])) ? 'mon' : '0',
          (isset($_POST['sk_wws_multi_account']['tue'])) ? 'tue' : '0',
          (isset($_POST['sk_wws_multi_account']['wed'])) ? 'wed' : '0',
          (isset($_POST['sk_wws_multi_account']['thu'])) ? 'thu' : '0',
          (isset($_POST['sk_wws_multi_account']['fri'])) ? 'fri' : '0',
          (isset($_POST['sk_wws_multi_account']['sat'])) ? 'sat' : '0',
          (isset($_POST['sk_wws_multi_account']['sun'])) ? 'sun' : '0',
        ),
      );

      update_option('sk_wws_multi_account', $setting);

    }


    public function delete_multi_account_person() {

      if (!isset($_GET['sk_wws_multi_account_delete'])) {
        return;
      }

      $setting = get_option('sk_wws_multi_account');

      unset($setting[$_GET['sk_wws_multi_account_delete']]);

      update_option('sk_wws_multi_account', $setting);

      wp_redirect( admin_url( 'admin.php?page=wc-whatsapp-support' ) );

      exit;

    }

    public function delete_complete_analytics() {

      if ( ! isset( $_GET['delete_complete_analytics'] ) ) {
        return;
      }

      global $wpdb;

      $wws_analytics_table = $wpdb->prefix.'wws_analytics';

      $wpdb->query( "TRUNCATE {$wws_analytics_table}" );

      wp_redirect( admin_url( 'admin.php?page=wc-whatsapp-support-analytics' ) );

    }


    public function admin_plugin_review() {

      if ( ! isset( $_GET['wws_admin_review'] ) ) {
        return;
      }

      update_option( 'wws_admin_review', '1' );

      wp_redirect( admin_url( 'admin.php?page=wc-whatsapp-support' ) );


    }


  } // .WWS_Admin_Save_Settings

  new WWS_Admin_Save_Settings;

endif;