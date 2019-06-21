<div class="container">
	
    <div class="row" id="blog" >
    
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
                <?php do_action('anna_lite_postformat'); ?>
                <div class="clear"></div>
                
            </div>
		
		<?php 
			
			endwhile; 
			else:
		
		?>

			<div class="post-container col-md-12" >
    
                <article class="post-article not-found">
                                
                	<h1><?php esc_html_e( 'Not found', 'anna-lite' ) ?></h1>
                	<p><?php esc_html_e( 'Sorry, no posts found', 'anna-lite' ) ?></p>
                 
                </article>
    
			</div>
        
		<?php endif; ?>
           
    </div>

	<?php do_action( 'anna_lite_pagination', 'home'); ?>

</div>