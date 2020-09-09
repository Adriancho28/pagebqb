<?php


// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );


if ( ! class_exists( 'WWS_Public_Enqueue' ) ) :

	/**
	* Enqueue all the public resources
	* @package WeCreativez/Public
	* @since 1.2
	*/
	class WWS_Public_Enqueue extends WWS_Common {
		


		public function __construct() {

			if ( ! $this->is_plugin_active() )
				return;

			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_style' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_script' ) );
			add_action( 'wp_head', array($this, 'public_dynamic_resources') );
			
		}


		/**
		 * Add public stylesheets
		 * @since 1.2
		 */
		public function enqueue_style() {

			wp_enqueue_style( 'wws-public-style', WWS_URL . 'assets/public/css/wws-public-style.css', array(), WWS_VERSION );
			wp_enqueue_style( 'wws-public-style-template', WWS_URL . 'assets/public/css/template-'.$this->get_setting('ui_layout').'.css', array(), WWS_VERSION ) ;
			

		}

		/**
		 * Add public script files
		 * @since 1.2
		 */
		public function enqueue_script() {

			$is_popup_display_on_current_page = new WWS_Public_Popup;
			$gdpr = get_option( 'wws_gdpr_settings' );

			wp_enqueue_script( 'wws-public-script', WWS_URL . 'assets/public/js/wws-public-script.js', array(), WWS_VERSION, true );
			wp_localize_script( 
				'wws-public-script', 
				'wwsObj', 
				array(
					'supportNumber' => $this->get_setting('wws_contact_number'),
					'autoPopup' => $this->get_setting('wws_auto_popup'),
					'plugin_url' => WWS_URL,
					'is_mobile' => ( wp_is_mobile() == true ) ? 1 : 0,
					'is_product' => ( function_exists( 'is_product' ) && is_product() == true ) ? 1 : 0,
					'current_page_url' => get_permalink(),
					'current_popup_template' => $this->get_setting( 'ui_layout' ),
					'is_popup_display_on_current_page' => $is_popup_display_on_current_page->display_on_page(),
					'group_invitation_id' => $this->get_setting('wws_group_id'),
					'admin_ajax_url' => admin_url( 'admin-ajax.php' ),
					'scroll_lenght' => $this->get_setting('wws_scroll_length'),
					'auto_popup_time' => $this->get_setting( 'wws_auto_popup_time' ),
					'is_gdpr' => $gdpr['gdpr_status'],
					'predefined_text' => str_replace(
																array(
																	'{title}',
																	'{url}',
																	'{br}'
																), 
																array(
																	get_the_title(),
																	get_permalink(),
																	'%0A',
																), 
																$this->get_setting( 'text_predefined_text' ) 
															),
					'debuggin_status' => $this->get_developer_setting( 'debuggin_status' ),
				)
			);
		}


		/**
		 * public dynamic js,css in wp_head
		 * @since 1.2
		 */
		public function public_dynamic_resources() { ?>
			<!-- I am coming from "WeCreativez WhatsApp Support" -->
			<style>
				@font-face {
		      font-family: 'wwsFonts';
		      src: url('<?php echo WWS_URL . 'assets/public/fonts/fontello.eot?' . WWS_VERSION ?>');
		      src: url('<?php echo WWS_URL . 'assets/public/fonts/fontello.eot?' . WWS_VERSION . '#iefix' ?>') format('embedded-opentype'),
		           url('<?php echo WWS_URL . 'assets/public/fonts/fontello.woff?' . WWS_VERSION ?>') format('woff'),
		           url('<?php echo WWS_URL . 'assets/public/fonts/fontello.ttf?' . WWS_VERSION ?>') format('truetype'),
		           url('<?php echo WWS_URL . 'assets/public/fonts/fontello.svg?' . WWS_VERSION . '#fontello' ?>') format('svg');
		      font-weight: normal;
		      font-style: normal;
			   }
				.wws--bg-color {
					background-color: <?php echo $this->get_setting('ui_layout_bg_color') ?>
				}
				.wws--text-color {
					color: <?php echo $this->get_setting('ui_layout_text_color') ?>
				}

				<?php if ( $this->get_setting( 'wws_rtl' ) == 1 ) : ?>
					.wws-popup-container * { direction: rtl; }
					#wws-layout-1 .wws-popup__header,
					#wws-layout-2 .wws-popup__header,
					#wws-layout-6 .wws-popup__header { 
						display: flex;
						flex-direction: row-reverse;
					}
					#wws-layout-1 .wws-popup__input-wrapper { float: left; }
				<?php endif; ?>

				<?php if ( $this->get_setting('wws_scroll_length') ) : ?>
					.wws-popup-container { display: none; }
				<?php endif ?>


				<?php if ( ! $this->get_setting('text_trigger_btn') ) : ?>
					.wws-popup__open-btn {
					  font-size: 30px;
					  border-radius: 50%;
					  display: inline-block;
					  margin-top: 14px;
					  cursor: pointer;
					  width: 46px;
					  height: 46px;
					  position: relative;
					  font-family: Arial, Helvetica, sans-serif;
					}
					.wws-popup__open-icon {
						position: absolute;
				    top: 50%;
				    left: 50%;
				    transform: translate(-50%, -50%);
					}
				<?php else: ?>
					.wws-popup__open-btn {
					  padding: 8px 15px;
					  font-size: 14px;
					  border-radius: 20px;
					  display: inline-block;
					  margin-top: 14px;
					  cursor: pointer;
					  font-family: Arial, Helvetica, sans-serif;
					}
				<?php endif;?>


				<?php if ( wp_is_mobile() == true ) : ?>

					<?php if ( $this->get_setting('wws_mobile_location') == 'tl' ) : ?>
						.wws-popup-container--position { left: 12px; top: 12px; }
						.wws-popup__open-btn { float: left; }
					<?php endif; ?>
					<?php if ( $this->get_setting('wws_mobile_location') == 'tc' ) : ?>
						.wws-popup-container--position { top: 12px; left: 0; right: 0; margin-left: auto; margin-right: auto; }
						.wws-popup { margin: 0 auto; }
						.wws-popup__footer { text-align: center; }
					<?php endif; ?>
					<?php if ( $this->get_setting('wws_mobile_location') == 'tr' ) : ?>
						.wws-popup-container--position { right: 12px; top: 12px; }
						.wws-popup__open-btn { float: right; }
					<?php endif; ?>
					<?php if ( $this->get_setting('wws_mobile_location') == 'bl' ) : ?>
						.wws-popup-container--position { left: 12px; bottom: 12px; }
						.wws-popup__open-btn { float: left; }
					<?php endif; ?>
					<?php if ( $this->get_setting('wws_mobile_location') == 'bc' ) : ?>
						.wws-popup-container--position { bottom: 12px; left: 0; right: 0; margin-left: auto; margin-right: auto; }
						.wws-popup { margin: 0 auto; }
						.wws-popup__footer { text-align: center; }
					<?php endif; ?>
					<?php if ( $this->get_setting('wws_mobile_location') == 'br' ) : ?>
						.wws-popup-container--position { right: 12px; bottom: 12px; }
						.wws-popup__open-btn { float: right; }
					<?php endif; ?>

				<?php endif; ?>


				<?php if ( wp_is_mobile() != true ) : ?>
				
					<?php if ( $this->get_setting('wws_desktop_location') == 'tl' ) : ?>
						.wws-popup-container--position { left: 12px; top: 12px; }
						.wws-popup__open-btn { float: left; }
						.wws-gradient--position {
						  top: 0;
						  left: 0;
						  background: radial-gradient(ellipse at top left, rgba(29, 39, 54, 0.2) 0, rgba(29, 39, 54, 0) 72%);
						}
					<?php endif; ?>
					<?php if ( $this->get_setting('wws_desktop_location') == 'tc' ) : ?>
						.wws-popup-container--position { top: 12px; left: 0; right: 0; margin-left: auto; margin-right: auto; }
						.wws-popup__footer { text-align: center; }
						.wws-popup { margin: 0 auto; }
						.wws-gradient--position {
						  top: 0;
						  left: 0;
						  right: 0;
						  margin-left: auto;
						  margin-right: auto;
						  background: radial-gradient(ellipse at top, rgba(29, 39, 54, 0.2) 0, rgba(29, 39, 54, 0) 72%);
						}
					<?php endif; ?>
					<?php if ( $this->get_setting('wws_desktop_location') == 'tr' ) : ?>
						.wws-popup-container--position { right: 12px; top: 12px; }
						.wws-popup__open-btn { float: right; }
						.wws-gradient--position {
						  top: 0;
						  right: 0;
						  background: radial-gradient(ellipse at top right, rgba(29, 39, 54, 0.2) 0, rgba(29, 39, 54, 0) 72%);
						}
					<?php endif; ?>
					<?php if ( $this->get_setting('wws_desktop_location') == 'bl' ) : ?>
						.wws-popup-container--position { left: 12px; bottom: 12px; }
						.wws-popup__open-btn { float: left; }
						.wws-gradient--position {
						  bottom: 0;
						  left: 0;
						  background: radial-gradient(ellipse at bottom left, rgba(29, 39, 54, 0.2) 0, rgba(29, 39, 54, 0) 72%);
						}
					<?php endif; ?>
					<?php if ( $this->get_setting('wws_desktop_location') == 'bc' ) : ?>
						.wws-popup-container--position { bottom: 12px; left: 0; right: 0; margin-left: auto; margin-right: auto; }
						.wws-popup__footer { text-align: center; }
						.wws-popup { margin: 0 auto; }
						.wws-gradient--position {
						  bottom: 0;
						  left: 0;
						  right: 0;
						  margin-left: auto;
						  margin-right: auto;
						  background: radial-gradient(ellipse at bottom, rgba(29, 39, 54, 0.2) 0, rgba(29, 39, 54, 0) 72%);
						}
					<?php endif; ?>
					<?php if ( $this->get_setting('wws_desktop_location') == 'br' ) : ?>
						.wws-popup-container--position { right: 12px; bottom: 12px; }
						.wws-popup__open-btn { float: right; }
						.wws-gradient--position {
						  bottom: 0;
						  right: 0;
						  background: radial-gradient(ellipse at bottom right, rgba(29, 39, 54, 0.2) 0, rgba(29, 39, 54, 0) 72%);
						}
					<?php endif; ?>

				<?php endif; ?>

				<?php if ( $this->get_setting( 'ul_trigger_btn_only_icon' ) == 1 ) : ?>
						@media( max-width: 720px ) {
							.wws-popup__open-btn {
								padding: 0 !important;
								width: 50px !important;
								height: 50px !important;
								border-radius: 50% !important;
								display: flex !important;
								justify-content: center !important;
								align-items: center !important;
								font-size: 34px !important;
							}
							.wws-popup__open-btn span { display: none; }
						}
				<?php endif; 

					// Custom CSS
					echo $this->get_setting('wws_custom_css');
				 
				 ?>
				
			</style>
			<!-- .I am coming from "WeCreativez WhatsApp Support" -->

		<?php }






	} // .WWS_Public_Enqueue


	new WWS_Public_Enqueue;

endif;