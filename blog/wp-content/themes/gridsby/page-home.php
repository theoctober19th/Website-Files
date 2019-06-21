<?php
/**
Template Name: Home Page
 *
 * @package gridsby
 */

get_header(); ?>

	<div class="container home-grid"> 
			<!-- Top Navigation -->
            
    <section class="grid3d horizontal" id="grid3d">
		<div class="grid-wrap">
	    	<div id="gallery-container" class="gridsby infinite-scroll"> 
            
            	<?php if( get_theme_mod( 'active_home_gallery' ) == '') : ?> 
                    
                <?php 
							
					if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
    						
						$args = array( 'post_type' => 'post', 'posts_per_page' => 20, 'order' => 'ASC', 'tax_query' => 				
							array(
								array(
      							'taxonomy' => 'post_format',
      							'field' => 'slug',
      							'terms' => 'post-format-image',
    						))); 
								
					else :
							
						$args = array( 'post_type' => 'post', 'posts_per_page' => 20, 'tax_query' => 				
							array(
								array(
      							'taxonomy' => 'post_format',
      							'field' => 'slug',
      							'terms' => 'post-format-image',
    						)));  
							
					endif;
							
					$gridsby_query = new WP_Query( $args ); 
	
						if ( $gridsby_query->have_posts() ) :
	
							while ( $gridsby_query->have_posts() ) : $gridsby_query->the_post(); 
							
								get_template_part( 'content', 'pf-image' ); // Post Format Image 
								
							endwhile; 
	
						endif;  
					
					endif; ?> 
                        
			</div><!-- gallery-container -->
		</div><!-- /grid-wrap -->
				
         
         <div class="content">
         
         <?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?>
                
			<?php 
							
				if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) : 
							 
    				$args = array( 'post_type' => 'post', 'posts_per_page' => 20, 'order' => 'ASC', 'tax_query' => 				
						array(
							array(
      						'taxonomy' => 'post_format',
      						'field' => 'slug',
      						'terms' => 'post-format-image',
    					))); 
							
				else :
							
					$args = array( 'post_type' => 'post', 'posts_per_page' => 20, 'tax_query' => 				
						array(
							array(
      						'taxonomy' => 'post_format',
      						'field' => 'slug',
      						'terms' => 'post-format-image',
    					))); 
					
				endif; 
						
						
            // the query
			$gridsby_query = new WP_Query( $args ); 
	
				if ( $gridsby_query->have_posts() ) :
	
					while ( $gridsby_query->have_posts() ) : $gridsby_query->the_post(); 
                            
                    	get_template_part( 'content', 'pf-lightbox' ); // Post Format Image Content
                        
					endwhile;
	
				endif; 
                
            endif; ?>
                        
			<span class="loading"></span>  
			<span class="icon close-content"><i class="fa fa-close"></i></span>
                          
		</div><!-- content -->
	</section><!-- grid3d -->
    
	</div><!-- /container -->
    
    
    <?php get_template_part( 'content', 'view-all' ); // View All  ?> 

   	<?php get_template_part( 'content', 'home-widget' ); // Home Widget Area  ?>
       
    
    <?php if( get_theme_mod( 'active_home_blog' ) == '') : ?> 
    
    <section id="home-blog">
    
    	<div class="grid grid-pad">
        	<div class="col-1-1">
            
            	<?php if ( get_theme_mod( 'gridsby_blog_text' ) ) : ?>
            		<h2><?php echo esc_html( get_theme_mod( 'gridsby_blog_text' )); ?></h2>
                <?php endif; ?>
                
            </div><!-- col-1-1 -->
        </div><!-- grid -->
        
    	<div class="grid grid-pad">
    
			<?php
				
			global $post;
			$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'tax_query' => array(
    			array(
      				'taxonomy' => 'post_format',
      				'field' => 'slug',
      				'terms' => 'post-format-image', 
      				'operator' => 'NOT IN'
    		)));
				
			$myposts = get_posts( $args ); 
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
				
         	<div class="col-1-3">
            	<div class="blog-post">
                                	
                	<div class="blog-post-thumbnail" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) , 'full' ); ?>')"></div>
									
                                    
                    	<a href="<?php the_permalink(); ?>">
                        	<div class="blog-post-content">
                            	<div class="content-container">
                                            
                                	<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
                                    <?php the_title( '<h4>', '</h4>' ); ?> 
                                    <p><?php $content = get_the_content(); $trimmed_content = wp_trim_words( $content, 15, '...' ); echo $trimmed_content; ?></p>
                                                
                                </div><!-- content-container -->
                            </div><!-- blog-post-content -->
                        </a><!-- permalink -->
                                    
                </div><!-- blog-post -->
        	</div><!-- col-1-3 -->
                	
			<?php endforeach; ?>
                        
    	</div><!-- grid -->
    </section><!-- home-blog -->
    
	<?php endif; ?>
	

<?php get_footer(); ?>
