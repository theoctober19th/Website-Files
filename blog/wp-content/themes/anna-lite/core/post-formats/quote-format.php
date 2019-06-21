<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_quote_format_function')) {

	function anna_lite_quote_format_function() {

	?>
        
        <div class="post-article quote">
            
            <i class="fa fa-quote-left"></i>
            <blockquote><p><?php echo get_the_content();?></p></blockquote>
            <p><?php echo get_the_title();?></p>
            
        </div>

	<?php

	}

	add_action( 'anna_lite_quote_format', 'anna_lite_quote_format_function' );

}

?>