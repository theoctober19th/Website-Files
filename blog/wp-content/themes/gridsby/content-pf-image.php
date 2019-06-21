<?php
/**
 * @package gridsby
 */
?>



	<?php if ( has_post_format( 'image' )) { ?>
                        
    	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?> 

      		<figure class="gallery-image">
				<?php the_post_thumbnail('gridsby-gallery-thumb'); ?> 
            </figure><!-- gallery-image --> 
                                
        <?php else : ?>
                                
        	<a href="<?php the_permalink(); ?>">
            	<figure class="gallery-image">
					<?php the_post_thumbnail('gridsby-gallery-thumb'); ?> 
                </figure><!-- gallery-image -->
            </a>
                                
        <?php endif; ?>

  	<?php } ?>