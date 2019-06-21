<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_thumbnail_function')) {

	function anna_lite_thumbnail_function( $params ) {

		global $post;
		
		if ( $params['type'] == "default" ) {
		
			if ( '' != get_the_post_thumbnail() ) { 
			
			?>
			
				<div class="pin-container">
					
					<?php 
						
						the_post_thumbnail($params['id']);
						
						if ( $params['icon'] == "on" ):
						
							echo anna_lite_posticon();	
						
						endif;
					
					?>
                    
				</div>
			
			<?php } 
	
		} else if ( $params['type'] == "overlay" ) {
		
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'anna_lite_blog_thumbnail');
			
			if (!empty($thumb)) :
			
		?>
			
			<div class="pin-container">

                <div class="overlay-thumbnail">
					
                    <img src="<?php echo esc_url($thumb[0]); ?>" class="attachment-blog wp-post-image" alt="post image" title="post image"> 
                    <a href="<?php echo esc_url(get_permalink($post->ID)); ?>" ></a>

				</div>
		
        	</div>
				
		<?php
		
		endif;
		
		}
	
	}

	add_action( 'anna_lite_thumbnail', 'anna_lite_thumbnail_function' );

}

?>