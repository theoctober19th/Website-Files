<?php
/**
 * @package gridsby
 */
?>



	<?php if ( has_post_format( 'image' )) { ?>
                            
    	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?>
            
        	<div>
            	<div class="lightbox-content">
										
              		<div class="dummy-img">
						<?php the_post_thumbnail('gridsby-gallery-full'); ?>
                    </div><!-- dummy-img -->
                                        
                    <h2 class="dummy-title">
                                        
						<?php the_title(); ?>
                        <div class='share-button share-button-left'></div>
                                            
                    </h2><!-- dummy-title -->
                                            
					<?php the_content(); ?>
                                        
                </div><!-- lightbox-content -->
			</div>
                            
                            	
		<?php endif; ?>
                            
    <?php } ?> 