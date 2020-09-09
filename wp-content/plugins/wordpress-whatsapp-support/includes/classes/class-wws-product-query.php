<?php

// Preventing to direct access
defined( 'ABSPATH' ) OR die( 'Direct access not acceptable!' );

if ( ! class_exists( 'WWS_Product_Query' ) ) :

	/**
	 * WooCommerce Product Query
	 * @package WeCreativez/Classes
	 * @since 1.5
	 */
	class WWS_Product_Query extends WWS_Common {


		public function __construct() {

			if ( ! $this->is_plugin_active() )
				return;

			if ( $this->_get_setting( 'status' ) != '1' )
				return false;

			if ( $this->_get_setting( 'btn_location' ) == 'woocommerce_before_add_to_cart_form' ) 
				add_action( 'woocommerce_before_add_to_cart_form', array( $this, 'product_query_button' ) );

			if ( $this->_get_setting( 'btn_location' ) == 'woocommerce_after_add_to_cart_button' )
				add_action( 'woocommerce_after_add_to_cart_button', array( $this, 'product_query_button' ) );

			add_shortcode( 'wws_product_url', array( $this, 'get_product_link' ) );
			add_shortcode( 'wws_product_title', array( $this, 'get_product_title' ) );

			add_shortcode( 'wws_product_query', array( $this, 'product_query_button_shortcode' ) );

		}


		/**
		 * Get saved settings
		 * @param  string $setting value of the option
		 * @since 1.5
		 */
		private function _get_setting( $setting ) {
			$data = get_option( 'wws_product_query' );
			return $data[$setting];
		}


		public function product_query_button() {

			if ( $this->is_displayable() != true )
				return false;

			$btn_label 						= $this->_get_setting( 'btn_label' );
			$btn_bg_color 				= $this->_get_setting( 'btn_bg_color' );
			$btn_text_color				= $this->_get_setting( 'btn_text_color' );
			$support_person_img 	= $this->_get_setting( 'support_person_img' );
			$support_person_name 	= $this->_get_setting( 'support_person_name' );
			$support_person_title = $this->_get_setting( 'support_person_title' );
			$support_number			  = $this->_get_setting( 'support_number' );
			$support_pre_message	= do_shortcode( $this->_get_setting( 'support_pre_message' ) );

			
			echo do_shortcode( "[wws_product_query bg-color='{$btn_bg_color}' 
																						 text-color='{$btn_text_color}' 
																						 button-text='{$btn_label}' 
																						 number='{$support_number}' 
																						 name='{$support_person_name}' 
																						 title='{$support_person_title}' 
																						 image='{$support_person_img}' 
																						 message='{$support_pre_message}']" 
												);

		}


		/**
		 * Get the current product link
		 * @since 1.5
		 */		
		public function get_product_link() {
			return get_the_permalink( get_the_ID() );
		}

		/**
		 * Get the current product title/name
		 * @since 1.5
		 */
		public function get_product_title() {
			return get_the_title( get_the_ID() );
		}

		public function is_displayable() {	

			if ( ! is_product() )
				return false;

			if ( in_array( get_the_ID(), $this->_get_setting( 'exclude_by_products' ) ) == true ) {
				return false;
			}

			//	Get the WooCommerce products categories
			$terms = get_the_terms ( get_the_ID(), 'product_cat' );
			foreach ( $terms as $term ) {
				// Assign each category slug in $cat_slugs array
			  $cat_slugs[] = $term->slug;
			}
			// Check, if category exists in admin selected category
			foreach ( $cat_slugs as $cat_slug) {
				// If exists then return true.
				if ( in_array( $cat_slug, (array)$this->_get_setting( 'exclude_by_categories' ) ) ) {
					return false;
				}
			}

			return true;

		}



		public function product_query_button_shortcode( $atts ) {
			$a = shortcode_atts( array(
				'bg-color' => '#22C15E',
				'text-color' => '#ffffff',
				'button-text' => 'Need Help? Contact Us via WhatsApp',
				'number' => '911234567890',
				'name' => 'Maya',
				'title' => 'Pre-sale Questions',
				'image' => '',
				'message' => 'Hi, I need help with {title} {url}'
	    ), $atts );

			ob_start();
			?>
				<style>
					a.wws-product-query-btn {
						display: inline-flex;
						width: auto;
				    align-items: center;
				    justify-content: center;
				    padding: 5px 8px;
				    border-radius: 6px;
				    position: relative;
				    text-decoration: none !important;
				    margin: 5px 0;
					}
					.wws-product-query-btn__img {
						width: 50px;
						height: 50px;
					}
					.wws-product-query-btn__img img {
						width: 100%;
						height: 100%;
					}
					.wws-product-query-btn__text {
						margin-left: 10px;
						display: flex;
						flex-direction: column;
					}
					.wws-product-query-btn__text span {
						line-height: 20px;
						font-size: 15px;
					}
				</style>
				<?php

				if ( wp_is_mobile() )
					$html = "<a class='wws-product-query-btn' href='https://api.whatsapp.com/send?phone={$a['number']}&text={$a['message']}' target='_blank' style='background-color: {$a['bg-color']}; color: {$a['text-color']};'>";
				else
					$html = "<a class='wws-product-query-btn' href='https://web.whatsapp.com/send?phone={$a['number']}&text={$a['message']}' target='_blank' style='background-color: {$a['bg-color']}; color: {$a['text-color']};'>";
				
					if ( $a['image'] ) {
						$html .= "<span class='wws-product-query-btn__img' class=''>";
							$html .= "<img src='{$a['image']}' alt='wws'>";
						$html .= "</span>";
					}
					$html .= "<span class='wws-product-query-btn__text'>";
					if ( $a['name'] && $a['title'] ) {
						$html .= "<span>{$a['name']} / {$a['title']}</span>";
					} else if ( $a['name'] ) {
						$html .= "<span>{$a['name']}</span>";
					}
						
						$html .= "<span><strong>{$a['button-text']}</strong></span>";
					$html .= "</span>";
				$html .= "</a><br>";

				echo $html;

	    return ob_get_clean();


		}



	} // .WWS_Product_Query

	new WWS_Product_Query;

endif;

