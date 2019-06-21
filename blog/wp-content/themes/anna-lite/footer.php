    <footer id="footer">
    
    	<?php
		
			get_sidebar('bottom');
			get_sidebar('footer');
		
		?>
        
        <div class="container">
    
             <div class="row copyright" >
                
                <div class="col-md-12" >

                    <p>
                                
                    	<?php if (anna_lite_setting('anna_lite_copyright_text')): ?>
                    		<?php echo wp_filter_post_kses(anna_lite_setting('anna_lite_copyright_text')); ?>
                    	<?php else: ?>
                    		<?php esc_html_e('Copyright','anna-lite'); ?> <?php echo get_bloginfo("name"); ?> <?php echo date_i18n("Y"); ?> 
                    	<?php endif; ?> 
                    	| <?php esc_html_e('Theme by','anna-lite'); ?> <a href="<?php echo esc_url('https://www.themeinprogress.com/'); ?>" target="_blank">ThemeinProgress</a> |
                    	<a href="<?php echo esc_url('http://wordpress.org/'); ?>" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'anna-lite' ); ?>" rel="generator"><?php printf( esc_html__( 'Proudly powered by %s', 'anna-lite' ), 'WordPress' ); ?></a>
                            
                    </p>

                    <?php do_action( 'anna_lite_socials' ); ?>
                    
                </div>
            
            </div>
            
        </div>
    
    </footer>

</div>

<?php 

	if ( !anna_lite_setting('anna_lite_view_back_to_top') || anna_lite_setting('anna_lite_view_back_to_top') == "on" )
		echo '<div id="back-to-top"><span><i class="fa fa-chevron-up"></i></span></div>';

	wp_footer(); 
	
?>   

</body>

</html>