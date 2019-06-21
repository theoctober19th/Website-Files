<?php 

			
/*-----------------------------------------------------------------------------------------------------//
	gridsby Widget Columns
-------------------------------------------------------------------------------------------------------*/
	
function gridsby_widget_columns() {
	
	 $widget_columns = get_theme_mod( 'gridsby_widget_columns' ); 
	 
    			if( $widget_columns != '' ) {
					
        		switch ( $widget_columns ) { 
				
            	case 'option1':
				
                	// Do nothing. all services are displayed. 
                	break;
					
            	case 'option2':
				
                	echo '<style type="text/css">';
                	echo '.gridsby-home-widget-area .widget { width: 50%; float:left; padding-right: 30px; }';
					echo '@media handheld, only screen and (max-width: 767px) {';
					echo '.gridsby-home-widget-area .widget { width: 100%; float:none; padding-right: 0px; }';
                	echo '}';
					echo '</style>';
                	break;
					
            	case 'option3':
				 
                	echo '<style type="text/css">';
                	echo '.gridsby-home-widget-area .widget { width: 33.33%; float:left; padding-right: 30px; }';
					echo '@media handheld, only screen and (max-width: 767px) {';
					echo '.gridsby-home-widget-area .widget { width: 100%; float:none; padding-right: 0px; }';
                	echo '}';
					echo '</style>';
                	break;
					
				case 'option4':
				
                	echo '<style type="text/css">';
                	echo '.gridsby-home-widget-area .widget { width: 25%; float:left; padding-right: 30px; }'; 
					echo '@media handheld, only screen and (max-width: 767px) {';
					echo '.gridsby-home-widget-area .widget { width: 100%; float:none; padding-right: 0px; }';
                	echo '}'; 
					echo '</style>';
                	break;
					
        		}
    		} 

	
}
	
add_action( 'wp_enqueue_scripts', 'gridsby_widget_columns' );
	
