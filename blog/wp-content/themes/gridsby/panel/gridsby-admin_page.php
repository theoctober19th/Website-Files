<?php 

     
    add_action('admin_menu', 'gridsby_setup_menu'); 
     
    function gridsby_setup_menu(){
    	add_theme_page( esc_html__( 'Gridsby Theme Details', 'gridsby' ), esc_html__( 'Gridsby Theme Details', 'gridsby' ), 'edit_theme_options', 'gridsby-setup', 'gridsby_init' );
    } 
     
 	function gridsby_init(){ 
		
		wp_enqueue_style( 'gridsby-font-awesome-admin', get_template_directory_uri() . '/fonts/font-awesome.css' ); 
		wp_enqueue_style( 'gridsby-style-admin', get_template_directory_uri() . '/panel/css/theme-admin-style.css' );
		
	 	echo '<div class="grid grid-pad"><div class="col-1-1"><h1 style="text-align: center;">';
		printf( esc_html__('Thank you for using Gridsby!', 'gridsby' ));
        echo "</h1></div></div>";
			
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;" ><div class="col-1-3"><h2>'; 
		printf( esc_html__('Gridsby Theme Setup', 'gridsby' ));
        echo '</h2>';
		
		echo '<p>';
		printf( esc_html__('We created a quick theme setup video to help you get started with Gridsby. Watch the video with the link below', 'gridsby' )); 
		echo '</p>'; 
		
		echo '<a href="http://modernthemes.net/documentation/gridsby-documentation/gridsby-theme-setup/" target="_blank"><button>';
		printf( esc_html__('View Video', 'gridsby' )); 
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf( esc_html__('Documentation', 'gridsby' )); 
        echo "</h2>";  
		
		echo '<p>';
		printf( esc_html__('Check out our Gridsby documentation to learn how to use Gridsby and for tutorials on theme functions. Click the link below.', 'gridsby' ));  
		echo "</p>";
		
		echo '<a href="http://modernthemes.net/documentation/gridsby-documentation/" target="_blank"><button>';
		printf( esc_html__('Read Docs', 'gridsby' ));
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf( esc_html__('About ModernThemes', 'gridsby' ));
        echo '</h2>';  
		
		echo '<p>';
		printf( esc_html__('Want to learn more about ModernThemes? Let us help you at modernthemes.net.', 'gridsby' )); 
		echo '</p>'; 
		
		echo '<a href="http://modernthemes.net/" target="_blank"><button>'; 
		printf( esc_html__('About Us', 'gridsby' )); 
		echo '</button></a></div></div>'; 
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Want more features? Go Pro.', 'gridsby' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-shopping-cart"></i><h4>';
		printf( esc_html__('Sell Your Photos', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Make your website a powerful eCommerce machine. Gridsby Pro includes Easy Digital Downloads to turn photos into profit.', 'gridsby' ));
		echo '</p></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>';
        printf( esc_html__('More Theme Options', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Control more options of your website including scroll animations and hover effects for your photos, as well as a home page slider template.', 'gridsby' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-th"></i><h4>';
		printf( esc_html__('Home Gallery Options', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Control the number of photos in your home page gallery. You can put up to 200 photos right on your front page for greater visbility.', 'gridsby' ));
		echo '</p></div> ';
            
        echo '<div class="col-1-4"><i class="fa fa-image"></i><h4>';
		printf( esc_html__( 'Footer Widget Areas', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Want more content for your footer? Gridsby Pro has three footer widget areas to populate with any content you want.', 'gridsby' ));
		echo '</p></div></div>';
            
        echo '<div class="grid grid-pad senswp"><div class="col-1-4"><i class="fa fa-th-list"></i><h4>';
		printf( esc_html__( 'More Sidebars', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Sometimes you need different sidebars for different pages. We got you covered, offering up to 5 different sidebars.', 'gridsby' ));
		echo '</p></div>';
		
       	echo '<div class="col-1-4"><i class="fa fa-font"></i><h4>More Google Fonts</h4><p>';
		printf( esc_html__( 'Access an additional 65 Google fonts with Gridsby Pro right in the back-end of the WordPress customizer.', 'gridsby' ));
		echo '</p></div>';
		
       	echo '<div class="col-1-4"><i class="fa fa-file-image-o"></i><h4>';
		printf( esc_html__( 'PSD Files', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Premium versions include PSD files. Preview your own content or showcase a customized version for your clients.', 'gridsby' ));
		echo '</p></div>';
            
        echo '<div class="col-1-4"><i class="fa fa-support"></i><h4>';
		printf( esc_html__( 'Free Support', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'Call on us to help you out. Premium themes come with free support that goes directly to our support staff.', 'gridsby' ));
		echo '</p></div></div>';
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="http://modernthemes.net/wordpress-themes/gridsby-pro/" target="_blank"><button class="pro">';
		printf( esc_html__( 'View Pro Version', 'gridsby' )); 
		echo '</button></a></div></div>';
		
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Premium Membership. Premium Experience.', 'gridsby' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>'; 
		printf( esc_html__('Plugin Compatibility', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Use our new free plugins with this theme to add functionality for things like projects, clients, team members and more. Compatible with all premium themes!', 'gridsby' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-desktop"></i><h4>'; 
        printf( esc_html__('Agency Designed Themes', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Look as good as can be with our new premium themes. Each one is agency designed with modern styles and professional layouts.', 'gridsby' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-users"></i><h4>';
        printf( esc_html__('Membership Options', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('We have options to fit every budget. Choose between a single theme, or access to all current and future themes for a year, or forever!', 'gridsby' ));
		echo '</p></div>'; 
		
		echo '<div class="col-1-4"><i class="fa fa-calendar"></i><h4>';
		printf( esc_html__( 'Access to New Themes', 'gridsby' )); 
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'New themes added monthly! When you purchase a premium membership you get access to all premium themes, with new themes added monthly.', 'gridsby' ));   
		echo '</p></div>';
		
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/premium-wordpress-themes/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'Get Premium Membership', 'gridsby' ));
		echo '</button></a></div></div>';
		
		
		echo '<div class="grid grid-pad"><div class="col-1-1"><h2 style="text-align: center;">'; 
		printf( esc_html__( 'Changelog' , 'gridsby' ) ); 
        echo "</h2>";
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.9 - Fix: PHP 7.2 fixes', 'gridsby' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.8 - Fix: minor CSS edits', 'gridsby' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.7 - Fix: number input bug in theme customizer', 'gridsby' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.6 - Fix: removed http from Skype social icons', 'gridsby' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.2.5 - Update: Tested with WordPress 4.5, Updating Font Awesome icons to 4.6, Added Snapchat and Weibo social icon options', 'gridsby' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.2.4 - Update: Added an option for pagination in Gallery and Fullwidth Gallery pages. Go to Appearance => Gallery Page Pagination to set bottom pagination for gallery pages.', 'gridsby' ));
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.2.3 - Update: blog will go fullwidth if no sidebar is active', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.2.2 - Update: added many new social icon options to theme customizer', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.2.0 - Update: added new social icon links', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.10 - Fix: minor bug fixes and improvements', 'gridsby' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.8 - Update: updated demo link in description', 'gridsby' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.7 - new Font Awesome 4.5 icons added', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.6 - added VK to social media section', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.5 - 4.3 update bug fixes', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.4 - minor bug fixes', 'gridsby' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.3 - added 500px social media option', 'gridsby' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.2 - updated Font Awesome icons', 'gridsby' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.1.1 - added Japanese and Brazilian language translation', 'gridsby' )); 
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.39 - updated Suggested Plugins files', 'gridsby' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__('1.0.38 - minor menu bug fixes for category posts', 'gridsby' ));
		echo '</p></div></div>'; 
		 	 
    }
?>