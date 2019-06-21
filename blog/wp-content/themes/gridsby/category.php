<?php
/**
 * Category Gallery Template 
 *
 * @package gridsby
 */

get_header(); ?>


<div class="grid grid-pad">
    	
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div class="col-9-12 content-wrapper">
    <?php else: ?>
    	<div class="col-1-1 content-wrapper"> 
    <?php endif; ?>
            
       
		<div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            
            
            <?php 
			// Check if there are any posts to display
            if ( have_posts() ) : ?>
            
            	 <?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_category_title' ) ) ) : ?> 
    
    				<header class="archive-header">
                                
						<h1 class="post-cat-gallery-title"><?php printf( __( '%s', 'gridsby' ), single_cat_title( '', false ) ); ?></h1>

						<?php
						// Display optional category description
 						if ( category_description() ) : ?>
								
            			<div class="archive-meta"><?php echo category_description(); ?></div>
						<?php endif; ?>
                                    
					</header>
    
    			<?php endif; ?>
            
            
    			<?php while ( have_posts() ) : the_post();  ?> 
    
   					<?php if ( is_category() ) :
		
						get_template_part( 'content', get_post_format() ); 
			
					endif;  
                    
                endwhile;  ?> 
                    
                     
					 <?php gridsby_the_posts_navigation(); ?> 
					
					
                    <?php else :
		
						get_template_part( 'content', 'none' );
						
            
            endif; ?>
            
            
            
            </main><!-- #main -->
        </div><!-- #primary -->
        
    </div><!-- col -->
            
    
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?> 
    	<?php get_sidebar(); ?>
	<?php endif; ?> 


</div><!-- grid -->
<?php get_footer(); ?>
