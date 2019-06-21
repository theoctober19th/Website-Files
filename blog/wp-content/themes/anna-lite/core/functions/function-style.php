<?php 

if (!function_exists('anna_lite_css_custom')) {

	function anna_lite_css_custom() { 

		$css = '';

		/* =================== BEGIN PAGE WIDTH =================== */
		
		if (anna_lite_setting('anna_lite_screen1')) {
		
			$css .= "@media (min-width:768px) {.container{width:".esc_html(anna_lite_setting('anna_lite_screen1'))."px}}"; 
			$css .= "@media (min-width:768px) {.container.block{width:" . (esc_html(anna_lite_setting('anna_lite_screen1'))-10) . "px}}"; 
			$css .= "@media (min-width:768px) {.container.grid-container{width:" . (esc_html(anna_lite_setting('anna_lite_screen1'))-20) . "px}}"; 
		}
		
		if (anna_lite_setting('anna_lite_screen2')) {
			
			$css .= "@media (min-width:992px) {.container{width:".esc_html(anna_lite_setting('anna_lite_screen2'))."px}}"; 
			$css .= "@media (min-width:992px) {.container.block{width:" . (esc_html(anna_lite_setting('anna_lite_screen2'))-10) . "px}}"; 
			$css .= "@media (min-width:768px) {.container.grid-container{width:" . (esc_html(anna_lite_setting('anna_lite_screen2'))-20) . "px}}"; 
		}
		
		if (anna_lite_setting('anna_lite_screen3'))  {
			
			$css .= "@media (min-width:1200px){.container{width:".esc_html(anna_lite_setting('anna_lite_screen3'))."px}}"; 
			$css .= "@media (min-width:1200px){.container.block{width:" . (esc_html(anna_lite_setting('anna_lite_screen3'))-10) . "px}}"; 
			$css .= "@media (min-width:768px) {.container.grid-container{width:" . (esc_html(anna_lite_setting('anna_lite_screen3'))-20) . "px}}"; 
		}
		
		if (anna_lite_setting('anna_lite_screen4'))  {
			
			$css .= "@media (min-width:1400px){.container{width:".esc_html(anna_lite_setting('anna_lite_screen4'))."px}}"; 
			$css .= "@media (min-width:1400px){.container.block{width:" . (esc_html(anna_lite_setting('anna_lite_screen4'))-10) . "px}}"; 
			$css .= "@media (min-width:768px) {.container.grid-container{width:" . (esc_html(anna_lite_setting('anna_lite_screen4'))-20) . "px}}"; 
		}
		
		/* =================== END PAGE WIDTH =================== */

		/* =================== BEGIN LOGO STYLE =================== */

		if (anna_lite_setting('anna_lite_logo_font_size')) 
			$css .= "#logo a { font-size:".esc_html(anna_lite_setting('anna_lite_logo_font_size'))."; }";

		if (anna_lite_setting('anna_lite_logo_description_font_size')) 
			$css .= "#logo a span { font-size:".esc_html(anna_lite_setting('anna_lite_logo_description_font_size'))."; }";
		
		if ( anna_lite_setting('anna_lite_logo_description_top_margin') ) 
			$css .=  "#logo a span { margin-top:".esc_html(anna_lite_setting('anna_lite_logo_description_top_margin'))."; }"; 

		/* =================== END LOGO STYLE =================== */
		
		/* =================== BEGIN NAV STYLE =================== */
		
		if ( anna_lite_setting('anna_lite_menu_font_size') )  : 
			$css .= "nav#mainmenu ul li a { font-size:".esc_html(anna_lite_setting('anna_lite_menu_font_size'))."; }"; 
			$css .= "nav#mainmenu ul ul li a { font-size:" . ( str_replace("px", "", esc_html(anna_lite_setting('anna_lite_menu_font_size'))) - 2 ) . "px;}"; 
		endif;
		
		if (anna_lite_setting('anna_lite_menu_font_weight'))
			$css .= "nav#mainmenu ul li a { font-weight:" . esc_html(anna_lite_setting('anna_lite_menu_font_weight')) . ";}"; 
		
		if (anna_lite_setting('anna_lite_menu_text_transform'))
			$css .= "nav#mainmenu ul li a { text-transform:" . esc_html(anna_lite_setting('anna_lite_menu_text_transform')) . ";}"; 
		
		/* =================== END NAV STYLE =================== */
		
		/* =================== BEGIN CONTENT STYLE =================== */
		
		if ( anna_lite_setting('anna_lite_content_font_size') ) :
			
			$css .= '
				.post-article a,
				.post-article p,
				.post-article li,
				.post-article address,
				.post-article dd,
				.post-article blockquote,
				.post-article td,
				.post-article th,
				.post-article span,
				.sidebar-area a,
				.sidebar-area p,
				.sidebar-area li,
				.sidebar-area address,
				.sidebar-area dd,
				.sidebar-area blockquote,
				.sidebar-area td,
				.sidebar-area th,
				.sidebar-area span,
				.textwidget { font-size:' . esc_html(anna_lite_setting('anna_lite_content_font_size')) . '}';
			
		endif;
		
		/* =================== END CONTENT STYLE =================== */
		
		/* =================== BEGIN CONTENT COLOR =================== */
		
		if ( anna_lite_setting('anna_lite_text_font_color') ) :
			
			$css .= '
				.post-article p,
				.post-article li,
				.post-article address,
				.post-article dd,
				.post-article blockquote,
				.post-article td,
				.post-article th,
				.post-article span,
				.sidebar-area a,
				.sidebar-area p,
				.sidebar-area li,
				.sidebar-area address,
				.sidebar-area dd,
				.sidebar-area blockquote,
				.sidebar-area td,
				.sidebar-area th,
				.sidebar-area span,
				.textwidget,
				.posted_in a { color:' . esc_html(anna_lite_setting('anna_lite_text_font_color')) . '}';
			
		endif;
		
		/* =================== END CONTENT COLOR =================== */
		
		/* =================== START TITLE STYLE =================== */

		if ( anna_lite_setting('anna_lite_h1_font_size') ) :
		
			$css .=  "
				h1, 
				h1.title, 
				h1.title a { font-size:" . esc_html(anna_lite_setting('anna_lite_h1_font_size')) . "; }"; 
		
		endif;
		
		if ( anna_lite_setting('anna_lite_h2_font_size') ) :
		
			$css .=  "
				h2, 
				h2.title, 
				h2.title a { font-size:" . esc_html(anna_lite_setting('anna_lite_h2_font_size')) . "; }"; 
		
		endif;
		
		if ( anna_lite_setting('anna_lite_h3_font_size') ) :
		
			$css .=  "
				h3, 
				h3.title, 
				h3.title a { font-size:" . esc_html(anna_lite_setting('anna_lite_h3_font_size')) . "; }"; 
		
		endif;
		
		if ( anna_lite_setting('anna_lite_h4_font_size') ) :
		
			$css .=  "
				h4, 
				h4.title, 
				h4.title a { font-size:" . esc_html(anna_lite_setting('anna_lite_h4_font_size')) . "; }"; 
		
		endif;
		
		if ( anna_lite_setting('anna_lite_h5_font_size') ) :
		
			$css .=  "
				h5, 
				h5.title, 
				h5.title a { font-size:" . esc_html(anna_lite_setting('anna_lite_h5_font_size')) . "; }"; 
		
		endif;
		
		if ( anna_lite_setting('anna_lite_h6_font_size') ) :
		
			$css .=  "
				h6, 
				h6.title, 
				h6.title a { font-size:" . esc_html(anna_lite_setting('anna_lite_h6_font_size')) . "; }"; 
		
		endif;

		if ( anna_lite_setting('anna_lite_titles_font_weight') ) :
		
			$css .=  "
	
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				h1.title a,
				h2.title a,
				h3.title a,
				h4.title a,
				h5.title a,
				h6.title a { font-weight:" . esc_html(anna_lite_setting('anna_lite_titles_font_weight')) . "; }"; 
		
		endif;
		
		if ( anna_lite_setting('anna_lite_titles_text_transform') ) :
		
			$css .=  "
	
				h1,
				h2,
				h3,
				h4,
				h5,
				h6,
				h1.title a,
				h2.title a,
				h3.title a,
				h4.title a,
				h5.title a,
				h6.title a { text-transform:" . esc_html(anna_lite_setting('anna_lite_titles_text_transform')) . "; }"; 
		
		endif;
		
		if ( anna_lite_setting('anna_lite_h2_font_size') && anna_lite_is_woocommerce_active() ) :
		
			$css .=  "
				.cross-sells h2 span,
				.upsells-products h2 span,
				.related-products h2 span { font-size:" . esc_html(anna_lite_setting('anna_lite_h2_font_size')) . "; }"; 
		
		endif;

		/* =================== END TITLE STYLE =================== */
		
		wp_add_inline_style( 'anna-lite-template', $css );
		
	}

	add_action('wp_enqueue_scripts', 'anna_lite_css_custom');

}

?>