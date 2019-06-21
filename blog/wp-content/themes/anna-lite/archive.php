<?php 

	get_header();

	get_sidebar('top');
	get_sidebar('header');

	if ( !anna_lite_setting('anna_lite_category_layout') || anna_lite_setting('anna_lite_category_layout') == 'masonry' ) {
				
		get_template_part('layouts/archive','masonry'); 

	} else if ( strstr(anna_lite_setting('anna_lite_category_layout'), 'sidebar' )) { 

		get_template_part('layouts/archive','sidebar'); 

	} else { 
		
		get_template_part('layouts/archive','classic');
			
	}

	get_footer(); 

?>