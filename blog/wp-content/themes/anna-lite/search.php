<?php 

	get_header(); 

	get_sidebar('top');
	get_sidebar('header');

	if ( !anna_lite_setting('anna_lite_search_layout') || anna_lite_setting('anna_lite_search_layout') == 'masonry' ) {
				
		get_template_part('layouts/search','masonry'); 

	} else if ( strstr(anna_lite_setting('anna_lite_search_layout'), 'sidebar' )) { 

		get_template_part('layouts/search','sidebar'); 

	} else { 
		
		get_template_part('layouts/search','classic');
			
	}

	get_footer(); 

?>