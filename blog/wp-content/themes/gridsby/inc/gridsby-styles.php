<?php
/**
 * Gridsby Pro Theme Customizer 
 *
 * @package gridsby
 */

/**
 * Add CSS in <head> for styles handled by the theme customizer
 *
 * @since 1.5
 */
function gridsby_add_customizer_css() {
	
	?>
	<!-- gridsby customizer CSS -->
	<style>
	
		<?php if ( get_theme_mod( 'gridsby_link_color' ) ) : ?>
		a, .widget-area ul a, .entry-content a, .site-info a {
			color: <?php echo esc_attr( get_theme_mod( 'gridsby_link_color' ), '#404040' ) ?>; 
		} 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_hover_color' ) ) : ?>
		a:hover { color: <?php echo esc_attr( get_theme_mod( 'gridsby_hover_color', '#B0544F' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_hover_color' ) ) : ?>
		.main-navigation li:hover > a, a:hover { color: <?php echo esc_attr( get_theme_mod( 'gridsby_hover_color', '#B0544F' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_social_color' ) ) : ?>
		.social-media-icons .fa { color: <?php echo esc_attr( get_theme_mod( 'gridsby_social_color', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_social_color_hover' ) ) : ?>
		.social-media-icons .fa:hover { color: <?php echo esc_attr( get_theme_mod( 'gridsby_social_color_hover', '#B0544F' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_custom_color' ) ) : ?>
		.home-entry-title:after, .member-entry-title:after, .works-entry-title:after, .client-entry-title:after, .home-news h5:after, .home-team h5:after, .home-cta h6:after, .footer-contact h5:after, .member h5:after { border-color: <?php echo esc_attr( get_theme_mod( 'gridsby_custom_color', '#000000' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_custom_color' ) ) : ?>
		.main-navigation ul ul li, blockquote { border-color: <?php echo esc_attr( get_theme_mod( 'gridsby_custom_color', '#000000' )) ?>; }
		<?php endif; ?>
		 
		<?php if ( get_theme_mod( 'gridsby_custom_color' ) ) : ?> 
		.pagination span, .pagination a, button, input[type="button"], input[type="reset"], input[type="submit"] { background: <?php echo esc_attr( get_theme_mod( 'gridsby_custom_color', '#000000' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_custom_color' ) ) : ?>
		.share-button label { background: <?php echo esc_attr( get_theme_mod( 'gridsby_custom_color', '#000000' )) ?> !important; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'gridsby_custom_color' ) ) : ?>
		button, input[type="button"], input[type="reset"], input[type="submit"], .share-button label { border-color: <?php echo esc_attr( get_theme_mod( 'gridsby_custom_color', '#000000' )) ?>; } 
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'gridsby_custom_color' ) ) : ?>
		button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { border-color: <?php echo esc_attr( get_theme_mod( 'gridsby_custom_color', '#000000' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_site_title_color' ) ) : ?>
		h1.site-title a, .site-description { color: <?php echo esc_attr( get_theme_mod( 'gridsby_site_title_color', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_text_color' ) ) : ?>
		body, select, textarea, div.show p, .dummy-title { color: <?php echo esc_attr( get_theme_mod( 'gridsby_text_color', '#404040' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_blockquote' ) ) : ?>
		blockquote { color: <?php echo esc_attr( get_theme_mod( 'gridsby_blockquote', '#999999' )) ?>; } 
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_blockquote_border' ) ) : ?>
		blockquote { border-color:<?php echo esc_attr( get_theme_mod( 'gridsby_blockquote_border', '#666666' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'gridsby_entry' ) ) : ?>
		.entry-header .entry-title, .featured-img-header .entry-title { color: <?php echo esc_attr( get_theme_mod( 'gridsby_entry' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_pag_nav' ) ) : ?>
		.comment-navigation .nav-previous a, .paging-navigation .nav-previous a, .post-navigation .nav-previous a, .posts-navigation .nav-previous a, .comment-navigation .nav-next a, .paging-navigation .nav-next a, .post-navigation .nav-next a, .posts-navigation .nav-next a { color: <?php echo esc_attr( get_theme_mod( 'gridsby_pag_nav' )) ?>; }
		<?php endif; ?> 
		
		<?php if ( get_theme_mod( 'gridsby_pag_nav_bg' ) ) : ?>
		.comment-navigation .nav-previous, .paging-navigation .nav-previous, .post-navigation .nav-previous, .posts-navigation .nav-previous, .comment-navigation .nav-next, .paging-navigation .nav-next, .post-navigation .nav-next, .posts-navigation .nav-next { background: <?php echo esc_attr( get_theme_mod( 'gridsby_pag_nav_bg' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_pag_nav_border' ) ) : ?>
		.comment-navigation .nav-previous, .paging-navigation .nav-previous, .post-navigation .nav-previous, .posts-navigation .nav-previous, .comment-navigation .nav-next, .paging-navigation .nav-next, .post-navigation .nav-next, .posts-navigation .nav-next { border-color: <?php echo esc_attr( get_theme_mod( 'gridsby_pag_nav_border' )) ?>; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_body_size' ) ) : ?>
		body, p { font-size: <?php echo esc_attr( get_theme_mod( 'gridsby_body_size', '16' )) ?>px; }
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'gridsby_page_title_bg' ) ) : ?>
		.entry-title span.title, .widget-title span.title { background-color: <?php echo esc_attr( get_theme_mod( 'gridsby_page_title_bg' )) ?>; }
		<?php endif; ?> 
		  
	</style>
    
<?php } 
add_action( 'wp_head', 'gridsby_add_customizer_css' ); 