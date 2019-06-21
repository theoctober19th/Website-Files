<?php 

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_before_content_function')) {

	function anna_lite_before_content_function( $type = "post" ) {
		
		if ( $type == "post" ) :
			
			echo '<span class="entry-category">'; 
			the_category(' . '); 
			echo '</span>';
		
		endif;
		
		if ( ! anna_lite_is_single() ) {

			do_action('anna_lite_get_title', 'blog' ); 

		} else {

			if ( !anna_lite_is_woocommerce_active('is_cart') ) :
	
				if ( anna_lite_is_single() && !is_page_template() ) :
							 
					do_action('anna_lite_get_title', 'single');
							
				else :
					
					do_action('anna_lite_get_title', 'blog'); 
							 
				endif;
	
			endif;

		}

		if ( $type == "post" ) :
			
			echo '<span class="entry-date">' . esc_html__('On ','anna-lite') . get_the_date() . esc_html__(' by ','anna-lite') . get_the_author_posts_link() . '</span>';
		
		endif;

	} 
	
	add_action( 'anna_lite_before_content', 'anna_lite_before_content_function' );

}

?>