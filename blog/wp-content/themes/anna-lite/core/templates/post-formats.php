<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_postformat_function')) {

	function anna_lite_postformat_function() {

		if (
		 
			in_array(get_post_type( get_the_ID()), array('page', 'product'))) { 
				
				$postFormat = get_post_type( get_the_ID());
		
		} else if (
		
			!get_post_format() || 
			in_array( get_post_format(), array('status', 'chat', 'audio', 'video', 'gallery')) ||
			in_array( get_post_format(), array('link', 'quote', 'aside')) && ( anna_lite_setting('anna_lite_post_format_layout') == 'off' )) { 
				
				$postFormat = 'default';
		
		} else {
			
			$postFormat = get_post_format();
		
		}
		
		do_action( 'anna_lite_' . $postFormat . '_format' );
	
	}

	add_action( 'anna_lite_postformat', 'anna_lite_postformat_function' );

}

?>