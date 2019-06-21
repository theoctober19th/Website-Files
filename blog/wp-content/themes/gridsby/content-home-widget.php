
	 <?php if( get_theme_mod( 'active_home_widget' ) == '') : ?>
    
    <section id="home-page-cta" style="background: url(<?php echo esc_url( get_theme_mod( 'gridsby_new_widget_background' )); ?>) no-repeat;">  
        <div class="grid grid-pad">
            <div class="col-1-1">
            
            	<div class="gridsby-home-widget-area"> 
            
            		<?php if ( is_active_sidebar('home-widget') ) : ?>
    					<?php dynamic_sidebar('home-widget'); ?>    
    		 		<?php endif; ?>
                    
                </div><!-- gridsby-home-widget-area -->
                
            </div><!-- col-1-1 -->
            
            
            <div class="col-1-1"> 
                    
            <?php 
				
				$gridsby_int_url = esc_url( get_page_link( get_theme_mod( 'gridsby_widget_button_url' ))); 
				$gridsby_ext_url = esc_url( get_theme_mod( 'gridsby_page_url_text' )); 
                
                	if ( get_theme_mod( 'gridsby_widget_button_url' ) ) : ?>
                     
                        <a href="<?php echo $gridsby_int_url ?>"> 
                        	<?php if ( get_theme_mod( 'gridsby_widget_button_text' ) ) : ?> 
                            
                            	<button class="outline white">
									<?php echo esc_html( get_theme_mod( 'gridsby_widget_button_text' )); ?>
                                </button>
                                
							<?php endif; ?>
                        </a>
                            
                   	<?php elseif ( get_theme_mod( 'gridsby_page_url_text' ) ) : ?>
                         
                        <a href="<?php echo $gridsby_ext_url ?>" target="_blank"> 
                        	<?php if ( get_theme_mod( 'gridsby_widget_button_text' ) ) : ?> 
                            
                            	<button class="outline white">
									<?php echo esc_html( get_theme_mod( 'gridsby_widget_button_text' )); ?>
                                </button>
                                
							<?php endif; ?>
                        </a>
                          
                   	<?php endif; ?> 
               
                </div><!-- col-1-1 -->
                                
            </div><!-- grid -->
    </section><!-- cta -->
    
	<?php endif; ?> 