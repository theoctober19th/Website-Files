<?php 

	get_header();
	
	get_sidebar('top');
	get_sidebar('header');

	if ( !anna_lite_setting('anna_lite_home') || anna_lite_setting('anna_lite_home') == 'masonry' ) {
				
		get_template_part('layouts/home','masonry'); 

	} else if ( strstr(anna_lite_setting('anna_lite_home'), 'sidebar' )) { 

		get_template_part('layouts/home','sidebar'); 

	} else { 
		
		get_template_part('layouts/home','classic');
			
	}

	get_footer(); 
	
?>