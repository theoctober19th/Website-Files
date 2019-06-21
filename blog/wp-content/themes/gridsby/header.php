<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package gridsby
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gridsby' ); ?></a>
        
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
			<h3><i class="fa fa-close"></i> <?php _e( 'Close Menu', 'gridsby' ); ?></h3> 
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

		<header id="masthead" class="site-header" role="banner">
        
        	<div class="grid">
            
			<div class="site-branding">
        	
			<?php if ( get_theme_mod( 'gridsby_logo' ) ) : ?>
              
    			<div class="site-logo"> 
                
       				<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                    
                    	<img 
                        	src='<?php echo esc_url( get_theme_mod( 'gridsby_logo' ) ); ?>' 
                            
							<?php if ( get_theme_mod( 'logo_size' ) ) : ?>
                            
                            	width="<?php echo esc_attr( get_theme_mod( 'logo_size' ), __( '145', 'gridsby' )); ?>"
                                
							<?php endif; ?> 
                            
                            alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'
                        >
                        
                    </a>  
                    
    			</div><!-- site-logo --> 
                
			<?php else : ?>
            
    			<hgroup> 
       				<h1 class="site-title">
                    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>
    			</hgroup>
                
			<?php endif; ?>
			
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- site-branding -->
        
        	<div class="contact-button">
        		<button class="toggle-menu menu-left push-body"><i class="fa fa-bars"></i> <?php _e( 'Menu', 'gridsby' ); ?></button> 
        	</div><!-- contact-button -->
        
        	
			<?php if( get_theme_mod( 'active_social' ) == '') : ?>
        	
        		<div class="social-media">
                 
            		<?php get_template_part( 'content', 'social' ); // Social Icons ?>
                    		
				</div>
				
			<?php endif; ?>
			
            
            </div>       
 
    	</header><!-- #masthead -->

	<section id="content" class="site-content">
