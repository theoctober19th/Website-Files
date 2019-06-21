<?php 

/**
 * Wp in Progress
 * 
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_mobile_menu_function')) {

	function anna_lite_mobile_menu_function() {

?>

        <div id="sidebar-wrapper">
            
            <div id="scroll-sidebar" class="clearfix">
            
				<div class="mobilemenu-box">

					<div class="mobile-navigation"><i class="fa fa-times open"></i></div>	

					<nav id="mobilemenu"><?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'false','depth' => 3  )); ?></nav> 
                        
				</div>
                    
            </div>
        
        </div>
        
<?php
	
	}

	add_action( 'anna_lite_mobile_menu', 'anna_lite_mobile_menu_function' );

}

?>