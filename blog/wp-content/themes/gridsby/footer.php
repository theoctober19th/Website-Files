<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package gridsby
 */
?>

	</section><!-- #content --> 

	<footer id="colophon" class="site-footer" role="contentinfo">
		
        <div class="site-info"> 
        
        <?php if( get_theme_mod( 'active_footer_social' ) == '') : ?> 
        	 
                       
        	<?php get_template_part( 'content', 'social' ); // Social Icons ?>
          
			 
		<?php endif; ?>
			
        
		<?php if ( get_theme_mod( 'gridsby_footer_phone' ) ) : ?> 
        	<h3 class="phone"><?php echo esc_html( get_theme_mod( 'gridsby_footer_phone' )); ?></h3>
        <?php endif; ?>
        
        <?php if ( get_theme_mod( 'gridsby_footer_contact' ) ) : ?>
        	<h3 class="email"><a href="mailto:<?php echo esc_html( get_theme_mod( 'gridsby_footer_contact' )); ?>" target="_blank"><?php echo esc_html( get_theme_mod( 'gridsby_footer_contact' )); ?></a></h3> 
        <?php endif; ?> 
			
		<?php if ( get_theme_mod( 'gridsby_footerid' ) ) : ?>     
        	<?php echo esc_html( get_theme_mod( 'gridsby_footerid' )); ?>  
		<?php else : ?>  
    		<?php  printf( __( 'Theme: %1$s by %2$s', 'gridsby' ), 'gridsby', '<a href="http://modernthemes.net" rel="designer">modernthemes.net</a>' ); ?> 
		<?php endif; ?> 
		
        </div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
