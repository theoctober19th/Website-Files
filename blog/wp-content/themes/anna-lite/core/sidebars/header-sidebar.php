<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_header_sidebar_function')) {

	function anna_lite_header_sidebar_function() {
		
		$isWidget = is_active_sidebar('anna-lite-header-sidebar-area') ? TRUE : FALSE;
		$isPosition = ( anna_lite_setting('anna_lite_homepage_slideshow_position') === 'header' ) ? TRUE : FALSE;
		$isSlideshow = ( anna_lite_setting('anna_lite_homepage_slideshow') === 'on' ) ? TRUE : FALSE;

		if ( $isWidget || $isSlideshow ): 
	
	?>
			
			<div id="header_sidebar" class="container sidebar-area">
			
				<div class="row">
				
					<div class="col-md-12">
                    
                    	<?php 
							if ( $isSlideshow == TRUE && $isPosition == TRUE && ( is_home() || is_front_page() ))
								do_action('anna_lite_slick_slider', 1, 'anna_lite_slick_large');
							
							if ( $isWidget == TRUE )
								dynamic_sidebar('anna-lite-header-sidebar-area');
                    	
						?>
												
					</div>
	
				</div>
				
			</div>
				
	<?php 
	
		endif;
		
	}

	add_action( 'anna_lite_header_sidebar', 'anna_lite_header_sidebar_function' );

}

?>