<?php

if (!function_exists('anna_lite_loadwidgets')) {

	function anna_lite_loadwidgets() {

/*-----------------------------------------------------------------------------------*/
/* 		LOAD ALL SIDEBAR AREAS
/*-----------------------------------------------------------------------------------*/    

		register_sidebar(array(
		
			'name' => esc_html__('Side Sidebar','anna-lite'),
			'id'   => 'anna-lite-side-sidebar-area',
			'description'   => esc_html__('This sidebar will be shown after the content.', 'anna-lite'),
			'before_widget' => '<div id="%1$s" class="post-article  %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

		register_sidebar(array(
		
			'name' => esc_html__('Top Sidebar','anna-lite'),
			'id'   => 'anna-lite-top-sidebar-area',
			'description'   => esc_html__('This sidebar will be shown at the top of your content (Recommended for Revolution Slider).', 'anna-lite'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><article class="post-article">',
			'after_widget'  => '</article></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));
	
		register_sidebar(array(

			'name' => esc_html__('Header Sidebar','anna-lite'),
			'id'   => 'anna-lite-header-sidebar-area',
			'description'   => esc_html__('This sidebar will be shown before the content.', 'anna-lite'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><article class="post-article">',
			'after_widget'  => '</article></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

		register_sidebar(array(

			'name' => esc_html__('Bottom Sidebar','anna-lite'),
			'id'   => 'anna-lite-bottom-sidebar-area',
			'description'   => esc_html__('This sidebar will be shown at the bottom of your content (Recommended for Instagram widget)', 'anna-lite'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><article class="post-article">',
			'after_widget'  => '</article></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));
	
		register_sidebar(array(

			'name' => esc_html__('Footer Sidebar','anna-lite'),
			'id'   => 'anna-lite-footer-sidebar-area',
			'description'   => esc_html__('This sidebar will be shown after the content.', 'anna-lite'),
			'before_widget' => '<div id="%1$s" class="col-md-3 %2$s"><div class="widget-box">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

	}

	add_action( 'widgets_init', 'anna_lite_loadwidgets' );

}

?>