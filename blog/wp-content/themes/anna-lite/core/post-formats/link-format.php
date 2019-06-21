<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_link_format_function')) {

	function anna_lite_link_format_function() {

	?>
	
        <div class="post-article link">
        
            <a href="<?php echo esc_url(anna_lite_get_link_url()); ?>" target="_blank">
            
                <i class="fa fa-link"></i>
                <?php echo get_the_title(); ?>
            
            </a>
           
        </div>
        
	<?php

	}

	add_action( 'anna_lite_link_format', 'anna_lite_link_format_function' );

}

?>