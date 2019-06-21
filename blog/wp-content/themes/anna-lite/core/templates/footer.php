<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

/*-----------------------------------------------------------------------------------*/
/* Socials */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_socials_function')) {

	function anna_lite_socials_function() {

		$allowed = array(
			'div' => array(
				'class' => array(),
			),
			'a' => array(
				'href' => array(),
				'title' => array(),
				'class' => array(),
				'button-title' => array(),
				'target' => array()
			),
			'i' => array(
				'class' => array(),
			)
		);

		$socials = array ( 
			
			"facebook" => array( "icon" => "fa fa-facebook" , "target" => "_blank" ),
			"twitter" => array( "icon" => "fa fa-twitter" , "target" => "_blank" ),
			"flickr" => array( "icon" => "fa fa-flickr" , "target" => "_blank" ),
			"google" => array( "icon" => "fa fa-google-plus" , "target" => "_blank" ),
			"linkedin" => array( "icon" => "fa fa-linkedin" , "target" => "_blank" ),
			"slack" => array( "icon" => "fa fa-slack" , "target" => "_blank" ),
			"pinterest" => array( "icon" => "fa fa-pinterest" , "target" => "_blank" ),
			"tumblr" => array( "icon" => "fa fa-tumblr" , "target" => "_blank" ),
			"soundcloud" => array( "icon" => "fa fa-soundcloud" , "target" => "_blank" ),
			"spotify" => array( "icon" => "fa fa-spotify" , "target" => "_blank" ),
			"youtube" => array( "icon" => "fa fa-youtube" , "target" => "_blank" ),
			"vimeo" => array( "icon" => "fa fa-vimeo" , "target" => "_blank" ),
			"vk" => array( "icon" => "fa fa-vk" , "target" => "_blank" ),
			"instagram" => array( "icon" => "fa fa-instagram" , "target" => "_blank" ),
			"deviantart" => array( "icon" => "fa fa-deviantart" , "target" => "_blank" ),
			"github" => array( "icon" => "fa fa-github" , "target" => "_blank" ),
			"xing" => array( "icon" => "fa fa-xing" , "target" => "_blank" ),
			"dribbble" => array( "icon" => "fa fa-dribbble" , "target" => "_blank" ),
			"dropbox" => array( "icon" => "fa fa-dropbox" , "target" => "_blank" ),
			"whatsapp" => array( "icon" => "fa fa-whatsapp" , "target" => "_self" ),
			"telegram" => array( "icon" => "fa fa-telegram" , "target" => "_self" ),
			"skype" => array( "icon" => "fa fa-skype" , "target" => "_self" ),
			"email" => array( "icon" => "fa fa-envelope" , "target" => "_self" ),
		
		);

		$i = 0;
		
		$html = '<div class="social-buttons">';
		
		foreach ( $socials as $name => $attrs) { 
		
			if (anna_lite_setting('anna_lite_footer_'.$name.'_button')): 

				$i++;	
				$html .= '<a href="'.esc_url(anna_lite_setting('anna_lite_footer_'.$name.'_button'), array( 'http', 'https', 'tel', 'skype', 'mailto' ) ).'" target="'.$attrs['target'].'" title="'.$name.'" button-title="'.ucwords($name).'" class="social"> <i class="'.$attrs['icon'].'" ></i> </a> ';
			
			endif;
			
		}
		
		if ( anna_lite_setting('anna_lite_footer_rss_button') == "on" ): 
		
			$i++;	
			$html .= '<a href="'. esc_url(get_bloginfo('rss2_url')). '" title="Rss" button-title="Rss" class="social rss"> <i class="fa fa-rss" ></i>  </a> ';
		
		endif; 
		
		$html .= '</div>';
			
		if ( $i > 0 ) {
			
			echo wp_kses($html, $allowed);
	
		}
		
	}
	
	add_action( 'anna_lite_socials', 'anna_lite_socials_function' );

}

?>