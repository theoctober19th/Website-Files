<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_footer_sidebar_function')) {

	function anna_lite_footer_sidebar_function() {

		if ( is_active_sidebar('anna-lite-footer-sidebar-area') ) : ?>

			<div id="footer_widgets">
				
                <div class="container sidebar-area">
                
                    <div class="row">
                    
                        <?php dynamic_sidebar('anna-lite-footer-sidebar-area') ?>
                                                    
                    </div>
                    
                </div>
				
			</div>

<?php 
	
		endif;
		
	}

	add_action( 'anna_lite_footer_sidebar', 'anna_lite_footer_sidebar_function' );

}

?>