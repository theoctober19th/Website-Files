<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php do_action( 'anna_lite_mobile_menu' ); ?>

<div id="wrapper">
        
	<div id="overlay-body"></div>
				
	<div id="header-wrapper" >
	
		<header id="header" >
                        
			<div class="container">
                        
				<div class="row">
                                    
					<div class="col-md-12" >
                                        
						<nav id="mainmenu" >
						
							<?php 
										
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container' => 'false'
								)); 
										
							?>
                                        
						</nav> 
                
						<div class="mobile-navigation"><i class="fa fa-bars"></i> </div>
                    
						<?php echo anna_lite_header_cart(); ?>
            
						<div class="header-search"> 

							<div class="search-form">
								<?php get_search_form();?>
							</div>
							
                            <i class="fa fa-search" aria-hidden="true"></i>
            
						</div>
            
						<div class="clear"></div>
                    
					</div>
            
				</div>
                            
			</div>
                                    
		</header>
            
	</div>
            
	<div id="logo">
    
		<?php
            
            if ( function_exists( 'the_custom_logo' ) && get_theme_mod( 'custom_logo' ) ) {
                    
                echo the_custom_logo();
                    
            } else {
                
                echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
                        
                    echo esc_attr(get_bloginfo('name'));
                    echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
                    
                echo '</a>';
                    
            }
        
        ?>

	</div>