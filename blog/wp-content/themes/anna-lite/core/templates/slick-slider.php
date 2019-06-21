<?php

/**
 * WPinProgress
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_slick_slider_function')) {

	function anna_lite_slick_slider_function($columns, $size) {
		
		$placeholder = ( $columns == 1 ) ? 'placeholder-960x600.jpg' : 'placeholder-400x400.jpg' ; 

		$query = new WP_Query( $post_query = "'post_type=post&posts_per_page=" . anna_lite_setting('anna_lite_slideshow_limit','-1') ); 
		if ( $query->have_posts() ) :  
                                
?>

        <div class="post-container slick-slideshow" data-columns="<?php echo $columns;?>">

            <div class="slider slick-slides">

			<?php
        
                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
        
                    global $post;
                    
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), $size);
                    $thumbnail = (!empty($thumb)) ? $thumb[0] : get_template_directory_uri()."/assets/images/".$placeholder;

			?>
			
					<div>
				   
						<div class="slick-article">

							<img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo get_the_title(); ?>">
							
							<?php if ( !anna_lite_setting('anna_lite_slideshow_overlay') || anna_lite_setting('anna_lite_slideshow_overlay') == "on" ) : ?>
                                
                                <div class="slider-overlay">
                                    <div class="slider-overlay-content">
                                        <span class="entry-category"><?php the_category(' . '); ?></span>
                                        <h2 class="title"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>" tabindex="0"><?php echo get_the_title(); ?></a></h2>
                                        <span class="entry-date"><?php echo esc_html__('On ','anna-lite') . get_the_date() . esc_html__(' by ','anna-lite') . get_the_author_posts_link(); ?></span>	
                                    </div>
                                </div>
                                
                            <?php endif; ?>
                            
						</div>
						
					</div>
			
			<?php

				endwhile; 
				endif;
                wp_reset_query();
                wp_reset_postdata();

			?>

            </div>
            
        </div>

<?php

        endif;
	
	}

	add_action( 'anna_lite_slick_slider', 'anna_lite_slick_slider_function', 10, 2);

}

?>