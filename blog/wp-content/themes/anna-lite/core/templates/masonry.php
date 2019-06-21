<?php 

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_masonry_function')) {
	
	function anna_lite_masonry_function () { 
	
	?>

        <div class="row masonry" id="masonry">
                
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
                    <?php do_action('anna_lite_postformat'); ?>
            
                </div>
        
			<?php 
			
				endwhile; 
				else:
			
			?>
        
                <div class="post-container col-md-12">
            
                    <article class="post-article">
                            
                        <h1><?php esc_html_e( 'Not found.', 'anna-lite' );?></h1>
                        <p><?php esc_html_e( 'Sorry, no items found, in this section.', 'anna-lite' ) ?></p>
             
                    </article>
            
                </div>
            
            <?php endif; ?>
                
        </div>
		
<?php 
	
	} 

	add_action( 'anna_lite_masonry', 'anna_lite_masonry_function');

} 

?>