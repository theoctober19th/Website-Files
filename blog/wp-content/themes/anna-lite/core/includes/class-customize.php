<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

if( !class_exists( 'anna_lite_customize' ) ) {

	class anna_lite_customize {
	
		public $theme_fields;
	
		public function __construct( $fields = array() ) {
	
			$this->theme_fields = $fields;

			add_action ('admin_init' , array( &$this, 'admin_scripts' ) );
			add_action ('customize_register' , array( &$this, 'customize_panel' ) );
			add_action ('customize_controls_enqueue_scripts' , array( &$this, 'customize_scripts' ) );

		}

		public function admin_scripts() {
	
			global $wp_version, $pagenow;

			$file_dir = get_template_directory_uri() . '/core/admin/assets/';
			
			if ( $pagenow == 'post.php' || $pagenow == 'post-new.php' || $pagenow == 'edit.php' ) {
				wp_enqueue_style ( 'anna-lite-panel',  $file_dir . 'css/panel.css', array(), '1.0.0' ); 
				wp_enqueue_script( 'anna-lite-script', $file_dir . 'js/panel.js', array('jquery'),'1.0.0',TRUE ); 
				wp_enqueue_script( 'jquery-ui-core', array('jquery'));
				wp_enqueue_script( 'jquery-ui-tabs', array('jquery'));
			}
			
			if ( !get_user_meta( get_current_user_id(), 'AnnaLite_AdminID_Notice_' . get_current_user_id(), TRUE ) ) {
				wp_enqueue_style ( 'anna-lite-notice',  $file_dir . 'css/notice.css', array(), '1.0.0' ); 
			}

		}
		
		public function customize_scripts() {
	
			wp_enqueue_style ( 
				'anna-lite-customizer', 
				get_template_directory_uri() . '/core/admin/assets/css/customize.css', 
				array(), 
				''
			);
	
		}
		
		public function customize_panel ( $wp_customize ) {
			
			global $wp_version;

			$theme_panel = $this->theme_fields ;
	
			foreach ( $theme_panel as $element ) {
				
				switch ( $element['type'] ) {
						
					case 'panel' :
					
						$wp_customize->add_panel( $element['id'], array(
						
							'title' => $element['title'],
							'priority' => $element['priority'],
							'description' => $element['description'],
						
						) );
				 
					break;
					
					case 'section' :
							
						$wp_customize->add_section( $element['id'], array(
						
							'title' => $element['title'],
							'panel' => $element['panel'],
							'priority' => $element['priority'],
							'description' => $element['description'],

						));
						
					break;
	
					case 'text' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => 'sanitize_text_field',
							'default' => $element['std'],
	
						) );
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						) );
								
					break;
	
					case 'pixel_size' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'default' => $element['std'],
							'sanitize_callback' => array( &$this, 'pixel_size_sanize' ),

						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => 'text',
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'slideshow_limit' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'default' => $element['std'],
							'sanitize_callback' => array( &$this, 'slideshow_limit_sanize' ),
	
						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => 'number',
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
							'input_attrs' => array('min' => -1)
										
						));
								
					break;
	
					case 'number' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => 'absint',
							'default' => $element['std'],
	
						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'upload' :
								
						$wp_customize->add_setting( $element['id'], array(
	
							'default' => $element['std'],
							'capability' => 'edit_theme_options',
							'sanitize_callback' => array( &$this, 'image_upload_sanize' )
	
						) );
	
						$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $element['id'], array(
						
							'label' => $element['label'],
							'mime_type' => 'image',
							'description' => $element['description'],
							'section' => $element['section'],
							'settings' => $element['id'],
						
						)));
	
					break;
	
					case 'url' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => 'esc_url_raw',
							'default' => $element['std'],
	
						) );
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'color' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => 'sanitize_hex_color',
							'default' => $element['std'],
	
						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'button' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => array( &$this, 'button_sanize' ),
							'default' => $element['std'],
	
						));
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => 'url',
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'textarea' :
								
						$wp_customize->add_setting( $element['id'], array(
						
							'sanitize_callback' => 'sanitize_textarea_field',
							'default' => $element['std'],
	
						) );
												 
						$wp_customize->add_control( $element['id'] , array(
						
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
										
						));
								
					break;
	
					case 'select' :
								
						$wp_customize->add_setting( $element['id'], array(
	
							'sanitize_callback' => array( &$this, 'select_sanize' ),
							'default' => $element['std'],
	
						) );
	
						$wp_customize->add_control( $element['id'] , array(
							
							'type' => $element['type'],
							'section' => $element['section'],
							'label' => $element['label'],
							'description' => $element['description'],
							'choices'  => $element['options'],
										
						));
								
					break;

					case 'anna-lite-customize-info' :
	
						$wp_customize->add_section( $element['id'], array(
						
							'title' => $element['title'],
							'priority' => $element['priority'],
							'capability' => 'edit_theme_options',
	
						));
	
						$wp_customize->add_setting(  $element['id'], array(
							'sanitize_callback' => 'esc_url_raw'
						));
						 
						$wp_customize->add_control( new Annalite_Customize_Info_Control( $wp_customize,  $element['id'] , array(
							'section' => $element['section'],
						)));		
											
					break;

				}
				
			}

			if ( anna_lite_is_woocommerce_active() ) :
			
				$wp_customize->remove_control( 'woocommerce_catalog_rows');
				$wp_customize->remove_control( 'woocommerce_catalog_columns');
				
			endif;
	
			if (!anna_lite_is_woocommerce_active())
				$wp_customize->remove_control( 'anna_lite_woocommerce_category_layout');

	   }
	
		public function select_sanize ($value, $setting) {

			global $wp_customize;
			
			$getControl = $wp_customize->get_control($setting->id);
			$getSetting = $wp_customize->get_setting($setting->id);
			
			return (array_key_exists( $value, $getControl->choices)) ? $value : $getSetting->default;

		}
	
		public function button_sanize ( $value, $setting ) {
			
			$sanize = array (
			
				'anna_lite_footer_email_button' => 'mailto:',
				'anna_lite_footer_skype_button' => 'skype:',
				'anna_lite_footer_whatsapp_button' => 'tel:',
			
			);
	
			if (!isset($value) || $value == '' || $value == $sanize[$setting->id]) {

				return '';

			} elseif (!strstr($value, $sanize[$setting->id])) {
	
				return $sanize[$setting->id] . $value;
	
			} else {
	
				return esc_url_raw($value, array('mailto', 'skype', 'tel'));
	
			}
	
		}
		
		public function pixel_size_sanize($value, $setting) {

			global $wp_customize;
			
			$getSetting = $wp_customize->get_setting($setting->id);
			$newValue = absint(str_replace('px', '', $value));
			return ($newValue == 0 ) ? $getSetting->default : $newValue . 'px';
	
		}
		
		public function slideshow_limit_sanize($value, $setting) {

			global $wp_customize;
			
			$getSetting = $wp_customize->get_setting($setting->id);
			$newValue = ($value <= 0) ? $getSetting->default : absint($value);
			return $newValue;
	
		}

		public function image_upload_sanize ( $file, $setting ) {

			$mimes = array (
				'jpg|jpeg|jpe' 	=> 'image/jpeg',
				'gif' 			=> 'image/gif',
				'png' 			=> 'image/png',
			);
			
			$file_ext = wp_check_filetype ($file, $mimes );
			return	$file_ext['ext'] ? $file : $setting->default;

		}

	}

}

if ( class_exists( 'WP_Customize_Control' ) ) {

	class Annalite_Customize_Info_Control extends WP_Customize_Control {

		public $type = "anna-lite-customize-info";

		public function render_content() { ?>

            <div class="inside">

				<h2><?php esc_html_e('Anna premium version','anna-lite');?></h2> 

                <p><?php esc_html_e("Upgrade to the premium version of Anna, to enable 600+ Google Fonts, unlimited sidebars, portfolio section and much more.","anna-lite");?></p>

                <ul>
                
                    <li><a class="button purchase-button" href="<?php echo esc_url( 'https://www.themeinprogress.com/anna-clean-wordpress-blog-and-shop-theme/?ref=2&campaign=anna-lite-panel' ); ?>" title="<?php esc_attr_e('Upgrade to Anna premium','anna-lite');?>" target="_blank"><?php esc_html_e('Upgrade to Anna premium','anna-lite');?></a></li>
                
                </ul>

            </div>
            
            <div class="inside">

                <h2><?php esc_html_e('Become a supporter','anna-lite');?></h2> 

                <p><?php esc_html_e("If you like this theme and support, I'd appreciate any of the following:","anna-lite");?></p>

                <ul>
                
                    <li><a class="button" href="<?php echo esc_url( 'https://wordpress.org/support/view/theme-reviews/'.get_stylesheet().'#postform' ); ?>" title="<?php esc_attr_e('Rate this Theme','anna-lite');?>" target="_blank"><?php esc_html_e('Rate this Theme','anna-lite');?></a></li>
                    <li><a class="button" href="<?php echo esc_url( 'https://www.themeinprogress.com/reserved-area/' ); ?>" title="<?php esc_attr_e('Subscribe our newsletter','anna-lite');?>" target="_blank"><?php esc_html_e('Subscribe our newsletter','anna-lite');?></a></li>
                    <li><a class="button" href="<?php echo esc_url( 'https://wordpress.org/themes/author/alexvtn/' ); ?>" title="<?php esc_attr_e('Download our free WordPress themes','anna-lite');?>" target="_blank"><?php esc_html_e('Download our free WordPress themes','anna-lite');?></a></li>
                
                </ul>
    
            </div>
    
		<?php

		}
	
	}

}

?>