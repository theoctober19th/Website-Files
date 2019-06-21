
												
					<div class="content">
                 
                       <?php
						
							if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_pagination_option', 'option1' ) ) ) : 
							
    							if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
							
    								$args = array( 
									'post_type' => 'post', 
									'posts_per_page' => -1, 
									'order' => 'ASC', 
									'tax_query' =>
										array(
      										'taxonomy' => 'post_format',
      										'field' => 'slug',
      										'terms' => 'post-format-image', 
    								));
								
								else :
							
									$args = array( 
									'post_type' => 'post', 
									'posts_per_page' => -1, 
									'tax_query' => 				
										array(
      										'taxonomy' => 'post_format',
      										'field' => 'slug',
      										'terms' => 'post-format-image',
    								)); 
							
								endif;
								
							else : 
							
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
							
									$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    								$args = array( 
										'post_type' => 'post', 
										'paged' => $paged,
										'posts_per_page' => intval( get_theme_mod( 'gridsby_pagi_photos_length', '15' )),
										'order' => 'ASC',
										'tax_query' =>
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image', 
    								));
								
								else :
							
									$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
									$args = array( 
										'post_type' => 'post', 
										'paged' => $paged,
										'posts_per_page' => intval( get_theme_mod( 'gridsby_pagi_photos_length', '15' )),  
										'tax_query' => 				
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image',
    								)); 
							
								endif; 
							
							endif;
							
							// the query
							$gridsby_query = new WP_Query( $args ); 
	
							if ( $gridsby_query->have_posts() ) :
	
								while ( $gridsby_query->have_posts() ) : $gridsby_query->the_post();
                            
                            	if ( has_post_format( 'image' )) { 
            					
                                if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?>
            
                            		<div>
                                    	<div class="lightbox-content">
                                        
											<div class="dummy-img">
												<?php the_post_thumbnail('gridsby-gallery-full'); ?>
                                            </div> 
                                            
                            				<h2 class="dummy-title">
												<?php the_title(); ?>
                                                <div class='share-button share-button-left'></div>
                                            </h2>
                                            
										<?php the_content(); ?>
                                        
                                        </div>
									</div>
                            
								<?php endif; }
                	
								endwhile; 
	
							endif; ?> 
                        
						<span class="loading"></span>
                        
						<span class="icon close-content">
                    		<i class="fa fa-close"></i>
                    	</span>
                    
                </div><!-- content -->