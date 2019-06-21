
	<?php if ( get_theme_mod( 'gridsby_view_all_text' ) ) : ?>
    
    <div class="grid grid-pad">
    	<div class="col-1-1">
        
        	
    			<a href="<?php echo esc_url( get_page_link(get_theme_mod('gallery_button_url')))?>">
                	<button class="photo-archive">
						<?php echo esc_html( get_theme_mod( 'gridsby_view_all_text' )); ?>
                    </button>
                </a> 
            
            
        </div><!-- col-1-1 -->
    </div><!-- grid -->
    
    <?php endif; ?>