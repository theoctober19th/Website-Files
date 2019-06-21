<?php
/**
 * Template Name: Fullwidth Gallery Page 
 *
 * @package gridsby
 */

get_header(); ?>

<div class="grid grid-pad">
	<div class="col-1-1 content-wrapper"> 
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
    
                <section class="grid3d horizontal" id="grid3d">
					<div class="grid-wrap">
					
                    	<div id="gallery-container" class="gridsby infinite-scroll">
                    
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

      										<figure class="gallery-image">
												<?php the_post_thumbnail('gridsby-gallery-thumb'); ?> 
                            				</figure><!-- gallery-image --> 
                                
                           				<?php else : ?>
                                
                                			<a href="<?php the_permalink(); ?>">
                                				<figure class="gallery-image">
													<?php the_post_thumbnail('gridsby-gallery-thumb'); ?> 
                            					</figure><!-- gallery-image -->
                                			</a>
                                
                           				<?php endif;  
										
									}
                	
								endwhile; 
	
							endif; ?>
                            
					</div><!-- gallery-container --> 
				
                </div><!-- /grid-wrap -->
				
                <?php get_template_part( 'content', 'animated-posts' ); //Animated Post Content ?> 
                
			</section><!-- grid3d --> 
            
            
            
            <?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_pagination_option', 'option1' ) ) ) :
						
						
			else:
				
				if (function_exists("pagination")) { ?> 
                
					<div class="grid grid-pad"> 
                		<div class="col-1-1">
                           
    						<?php pagination( $gridsby_query->max_num_pages ); ?>   
                            
                        </div> 
                    </div>
                    
				<?php } 
						
			endif; ?>
            
            
    
            </main><!-- #main --> 
        </div><!-- #primary -->
    </div>
    
</div>
<?php get_footer(); ?>
