<?php 

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_image_format_function')) {

	function anna_lite_image_format_function() {

		if ( ! anna_lite_is_single() ) :
		
			do_action('anna_lite_thumbnail', array( 'id' =>'anna_lite_blog_thumbnail', 'type' =>'overlay', 'icon' => 'off' )); 
		
		else :
	
			do_action('anna_lite_thumbnail', array( 'id' =>'anna_lite_blog_thumbnail', 'type' =>'default', 'icon' => 'on' ) ); 
		
	?>
    
        <div class="post-article">
        
            <?php 
            
                do_action('anna_lite_before_content', 'post');
                do_action('anna_lite_after_content'); 
                
            ?>
        
        </div>
    
	<?php 
		
		endif; 


	}

	add_action( 'anna_lite_image_format', 'anna_lite_image_format_function' );

}

?>