<?php

/**
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

/*-----------------------------------------------------------------------------------*/
/* WooCommerce is active */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'anna_lite_is_woocommerce_active' ) ) {
	
	function anna_lite_is_woocommerce_active( $type = "" ) {
	
        global $woocommerce;

        if ( isset( $woocommerce ) ) {
			
			if ( !$type || call_user_func($type) ) {
            
				return true;
			
			}
			
		}
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* Function to check if the searchform.php file is loaded inside a sidebar area */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'anna_lite_is_sidebar_area' ) ) {
	
	function anna_lite_is_sidebar_area() {
		
		$result = false;
		
		$activeSidebars = array(
			'anna_lite_side_sidebar',
			'anna_lite_top_sidebar',
			'anna_lite_header_sidebar',
			'anna_lite_bottom_sidebar',
			'anna_lite_footer_sidebar'
		);

		if ( in_array(current_filter(), $activeSidebars) ) { 
			$result = true;
		}
		
		return $result;
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* Get archive title */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_get_the_archive_title')) {

	function anna_lite_get_archive_title() {
		
		if ( is_category() ) {
			$title = sprintf( esc_html__( 'Category: %s', 'anna-lite' ), single_cat_title( '', false ) );
		} elseif ( is_tag() ) {
			$title = sprintf( esc_html__( 'Tag: %s', 'anna-lite' ), single_tag_title( '', false ) );
		} elseif ( is_author() ) {
			$title = sprintf( esc_html__( 'Author: %s', 'anna-lite' ), '<span class="vcard">' . get_the_author() . '</span>' );
		} elseif ( is_year() ) {
			$title = sprintf( esc_html__( 'Year: %s', 'anna-lite' ), get_the_date( esc_html_x( 'Y', 'yearly archives date format', 'anna-lite' ) ) );
		} elseif ( is_month() ) {
			$title = sprintf( esc_html__( 'Month: %s', 'anna-lite' ), get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'anna-lite' ) ) );
		} elseif ( is_day() ) {
			$title = sprintf( esc_html__( 'Day: %s', 'anna-lite' ), get_the_date( esc_html_x( 'F j, Y', 'daily archives date format', 'anna-lite' ) ) );
		} elseif ( is_tax( 'post_format' ) ) {
			if ( is_tax( 'post_format', 'post-format-aside' ) ) {
				$title = esc_html_x( 'Asides', 'post format archive title', 'anna-lite' );
			} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
				$title = esc_html_x( 'Galleries', 'post format archive title', 'anna-lite' );
			} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
				$title = esc_html_x( 'Images', 'post format archive title', 'anna-lite' );
			} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
				$title = esc_html_x( 'Videos', 'post format archive title', 'anna-lite' );
			} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
				$title = esc_html_x( 'Quotes', 'post format archive title', 'anna-lite' );
			} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
				$title = esc_html_x( 'Links', 'post format archive title', 'anna-lite' );
			} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
				$title = esc_html_x( 'Statuses', 'post format archive title', 'anna-lite' );
			} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
				$title = esc_html_x( 'Audio', 'post format archive title', 'anna-lite' );
			} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
				$title = esc_html_x( 'Chats', 'post format archive title', 'anna-lite' );
			}
		} elseif ( is_post_type_archive() ) {
			$title = sprintf( esc_html__( 'Archives: %s', 'anna-lite' ), post_type_archive_title( '', false ) );
		} elseif ( is_tax() ) {
			$tax = get_taxonomy( get_queried_object()->taxonomy );
			$title = sprintf( esc_html__( '%1$s: %2$s', 'anna-lite' ), $tax->labels->singular_name, single_term_title( '', false ) );
		}
	
		if ( isset($title) )  :
			return $title;
		else:
			return false;
		endif;
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* Check if is single page */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_is_single')) {

	function anna_lite_is_single() {
		
		if ( is_single() || is_page() ) :
		
			return true;
		
		endif;
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* Get theme setting */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_setting')) {

	function anna_lite_setting( $id, $default = '' ) {
	
		$anna_lite_setting = get_theme_mod($id);
		
		if(isset($anna_lite_setting)):
		
			return $anna_lite_setting;
		
		else:
		
			return $default;
		
		endif;
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* Get post meta */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_postmeta')) {

	function anna_lite_postmeta( $id, $default = '' ) {
	
		global $post, $wp_query;
		
		if (anna_lite_is_woocommerce_active('is_shop')) :
	
			$content_ID = get_option('woocommerce_shop_page_id');
	
		else :
	
			$content_ID = $post->ID;
	
		endif;

		$val = get_post_meta( $content_ID , $id, TRUE);
		
		if ( !empty($val) ) :
			
			return $val;
			
		else:
				
			return $default;
			
		endif;
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* Add Skype on allowed protocols */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_kses_allowed_protocols')) {

	function anna_lite_kses_allowed_protocols($protocols) {
		
		$protocols[] = 'skype';
		return $protocols;
	
	}

	add_filter( 'kses_allowed_protocols', 'anna_lite_kses_allowed_protocols');

}

/*-----------------------------------------------------------------------------------*/
/* Responsive embed */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_embed_html')) {
	
	function anna_lite_embed_html( $html ) {
		return '<div class="embed-container">' . $html . '</div>';
	}
	 
	add_filter( 'embed_oembed_html', 'anna_lite_embed_html', 10, 3 );
	add_filter( 'video_embed_html', 'anna_lite_embed_html' );
	
}

/*-----------------------------------------------------------------------------------*/
/* Content template */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_template')) {

	function anna_lite_template($id) {
	
		$template = array ( 
		
			"full" => "col-md-12" , 
			"left-sidebar" => "col-md-8" , 
			"right-sidebar" => "col-md-8"
		
		);
	
		$span = $template["right-sidebar"];
		$sidebar =  "right-sidebar";

		if ( 
			anna_lite_is_woocommerce_active('is_woocommerce') && 
			anna_lite_postmeta('anna_lite_template') &&
			is_search()  
		) {
					
			$span = $template[esc_attr(anna_lite_postmeta('anna_lite_template'))];
			$sidebar =  esc_attr(anna_lite_postmeta('anna_lite_template'));
	
		} elseif ( 
			!is_attachment() &&
			anna_lite_postmeta('anna_lite_template') &&
			(is_page() || is_single() || anna_lite_is_woocommerce_active('is_shop'))
		) {
					
			$span = $template[esc_attr(anna_lite_postmeta('anna_lite_template'))];
			$sidebar =  esc_attr(anna_lite_postmeta('anna_lite_template'));

		} elseif ( 
			!anna_lite_is_woocommerce_active('is_woocommerce') && 
			( is_category() || is_tag() || is_month() ) && 
			anna_lite_setting('anna_lite_category_layout')
		) {

			$span = $template[esc_attr(anna_lite_setting('anna_lite_category_layout'))];
			$sidebar =  esc_attr(anna_lite_setting('anna_lite_category_layout'));
						
		} elseif ( 
			is_home() && 
			anna_lite_setting('anna_lite_home')
		) {
					
			$span = $template[esc_attr(anna_lite_setting('anna_lite_home'))];
			$sidebar =  esc_attr(anna_lite_setting('anna_lite_home'));

		} else if ( 
			!anna_lite_is_woocommerce_active('is_woocommerce') && 
			is_search() && 
			anna_lite_setting('anna_lite_search_layout')
		) {

			$span = $template[esc_attr(anna_lite_setting('anna_lite_search_layout'))];
			$sidebar =  esc_attr(anna_lite_setting('anna_lite_search_layout'));
		
		} else if ( 
			anna_lite_is_woocommerce_active('is_woocommerce') && 
			( anna_lite_is_woocommerce_active('is_product_category') || anna_lite_is_woocommerce_active('is_product_tag') ) && 
			anna_lite_setting('anna_lite_woocommerce_category_layout')
		) {
		
			$span = $template[esc_attr(anna_lite_setting('anna_lite_woocommerce_category_layout'))];
			$sidebar =  esc_attr(anna_lite_setting('anna_lite_woocommerce_category_layout'));

		} elseif ( is_attachment() ) {
					
			$span = $template["full"];
			$sidebar =  "full";

		}

		return ${$id};
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* Post class */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('anna_lite_post_class')) {

	function anna_lite_post_class($classes) {	

		$masonry  = 'post-container masonry-item col-md-4';
		$standard = 'post-container col-md-12';

		if ( !anna_lite_is_single() ) {

			if ( is_home() ) {
				
				if ( !anna_lite_setting('anna_lite_home') || anna_lite_setting('anna_lite_home') == "masonry" ) {
	
					$classes[] = $masonry;
	
				} else {
	
					$classes[] = $standard;
	
				}
				
			} else if ( is_archive() ) {
	
				if ( !anna_lite_setting('anna_lite_category_layout') || anna_lite_setting('anna_lite_category_layout') == "masonry" ) {
	
					$classes[] = $masonry;
	
				} else {
	
					$classes[] = $standard;
	
				}
				
			} else if ( is_search() ) {
				
				if ( !anna_lite_setting('anna_lite_search_layout') || anna_lite_setting('anna_lite_search_layout') == "masonry" ) {
	
					$classes[] = $masonry;
	
				} else {
	
					$classes[] = $standard;
	
				}
			
			}

		} else if ( anna_lite_is_single() && anna_lite_is_woocommerce_active('is_cart') ) {
		
			$classes[] = 'post-container col-md-12 woocommerce_cart_page';

		} else if ( anna_lite_is_single() && !anna_lite_is_woocommerce_active('is_product') ) {

			$classes[] = 'post-container col-md-12';

		} else if ( is_page() ) {

			$classes[] = 'full';

		}

		return $classes;
		
	}
	
	add_filter('post_class', 'anna_lite_post_class');

}

/*-----------------------------------------------------------------------------------*/
/* Get paged */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_paged')) {

	function anna_lite_paged() {
		
		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) {
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}
		
		return $paged;
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* Prettyphoto at post gallery */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('anna_lite_prettyPhoto')) {

	function anna_lite_prettyPhoto( $html, $id, $size, $permalink, $icon, $text ) {
		
		if ( ! $permalink )
			return str_replace( '<a', '<a data-rel="prettyPhoto" ', $html );
		else
			return $html;
	}

	add_filter( 'wp_get_attachment_link', 'anna_lite_prettyPhoto', 10, 6);

}

/*-----------------------------------------------------------------------------------*/
/* Get link url  */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('anna_lite_get_link_url')) {

	function anna_lite_get_link_url() {
		
		$content = get_the_content();
		$has_url = get_url_in_content( $content );
		return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* Excerpt more */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('anna_lite_hide_excerpt_more')) {

	function anna_lite_hide_excerpt_more() {
		return '';
	}

	add_filter('the_content_more_link', 'anna_lite_hide_excerpt_more');
	add_filter('excerpt_more', 'anna_lite_hide_excerpt_more');

}

/*-----------------------------------------------------------------------------------*/
/* Customize excerpt more */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('anna_lite_customize_excerpt_more')) {

	function anna_lite_customize_excerpt_more( $excerpt ) {
	
		global $post;

		if ( anna_lite_is_single() ) :

			return $excerpt;

		else:

			$allowed = array(
				'span' => array(
					'class' => array(),
				),
			);

			$class = 'button ';
			$button = esc_html__('Read More','anna-lite');
			$container = 'class="read-more"';

			if ( anna_lite_setting('anna_lite_readmore_layout') == "default" || !anna_lite_setting('anna_lite_readmore_layout') ) : 
			
				$class = 'button ' . esc_attr(anna_lite_setting('anna_lite_readmore_layout'));
				$button = esc_html__('Read More','anna-lite');
				$container = 'class="read-more"';
	
			else :
	
				$class = 'nobutton';
				$button = ' [&hellip;] ';
				$container = '';
	
			endif;

			if ( $pos=strpos($post->post_content, '<!--more-->') && !has_excerpt( $post->ID )): 
			
				$content = substr(apply_filters( 'the_content', get_the_content()), 0, -5);
			
			else:
			
				$content = $excerpt;
	
			endif;
	
			return $content. '<a '. wp_kses($container, $allowed) . ' href="' . esc_url(get_permalink($post->ID)) . '" title="'.esc_attr__('Read More','anna-lite').'"> <span class="'.esc_attr($class).'">'.$button.'</span></a>';
	
		endif;
		

	}
	
	add_filter( 'get_the_excerpt', 'anna_lite_customize_excerpt_more' );

}

/*-----------------------------------------------------------------------------------*/
/* Get post icon */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_posticon')) {

	function anna_lite_posticon() {
	
		$icons = array ( 
			'video' => 'fa fa-play' , 
			'gallery' => 'fa fa-camera' , 
			'audio' => 'fa fa-volume-up' , 
			'chat' => 'fa fa-users', 
			'status' => 'fa fa-keyboard-o', 
			'image' => 'fa fa-picture-o' ,
			'quote' => 'fa fa-quote-left', 
			'link' => 'fa fa-external-link', 
			'aside' => 'fa fa-file-text-o', 
		);
	
		if ( get_post_format() ) { 
		
			$icon = '<span class="post-icon"><i class="'.esc_attr($icons[get_post_format()]).'"></i></span>'; 
		
		} else {
		
			$icon = '<span class="post-icon"><i class="fa fa-pencil-square-o"></i></span>'; 
		
		}

		return $icon;
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* Remove padding from Instagram widget */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('anna_lite_widget_class')) {

	function anna_lite_widget_class( $params ) {
		
		$name = $params[0]['widget_name'];
		
		$check = array(
			'Instagram Slider',
		);
		
		foreach ( $check as $value ) {
			
			if ( $value == $name ) : 

				$params[0]['before_widget'] = preg_replace( '/class="post-article/', 'class="no-padding', $params[0]['before_widget'], 1 );
			
			endif; 
			
		}
		
		return $params;
	}

	add_filter( 'dynamic_sidebar_params', 'anna_lite_widget_class' );

}

/*-----------------------------------------------------------------------------------*/ 
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('anna_lite_scripts_styles')) {

	function anna_lite_scripts_styles() {

		wp_enqueue_style( 'anna-lite-style', get_stylesheet_uri(), array() );

		$googleFontsArgs = array(
			'family' =>	str_replace('|', '%7C','Cinzel+Decorative|Merriweather:300,400,400i,700,900|Playfair+Display:400,700,900'),
			'subset' =>	'latin,latin-ext'
		);

		wp_enqueue_style('google-fonts', add_query_arg ( $googleFontsArgs, "https://fonts.googleapis.com/css" ), array(), '1.0.0' );
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '3.3.7' );
		wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '4.7.0' );
		wp_enqueue_style('prettyPhoto', get_template_directory_uri() . '/assets/css/prettyPhoto.css', array(), '3.1.4' );
		wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.8.0' );
		wp_enqueue_style('anna-lite-template', get_template_directory_uri() . '/assets/css/anna-lite-template.css', array(), '1.0.0' );
		wp_enqueue_style('anna-lite-woocommerce', get_template_directory_uri() . '/assets/css/anna-lite-woocommerce.css', array(), '1.0.0' );

		if ( get_theme_mod('anna_lite_skin') ) 
			wp_enqueue_style( 'anna-lite-' . get_theme_mod('anna_lite_skin') , get_template_directory_uri() . '/assets/skins/' . get_theme_mod('anna_lite_skin') . '.css', array( 'anna-lite-template' ), '1.0.0' ); 

		wp_enqueue_script('jquery-ui-core', array('jquery'));
		wp_enqueue_script('jquery-ui-tabs', array('jquery'));
		wp_enqueue_script('masonry', array('jquery') );

		wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.js' , array('jquery'), '1.3', TRUE ); 
		wp_enqueue_script( 'imagesLoaded', get_template_directory_uri() . '/assets/js/imagesloaded.js' , array('jquery'), '1.1.0', TRUE ); 
		wp_enqueue_script( 'jquery-nicescroll', get_template_directory_uri() . '/assets/js/jquery.nicescroll.js' , array('jquery'), '3.7.6', TRUE ); 
		wp_enqueue_script( 'prettyPhoto', get_template_directory_uri() . '/assets/js/prettyPhoto.js' , array('jquery'), '3.1.4', TRUE ); 
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js' , array('jquery'), '1.8.0', TRUE ); 
		wp_enqueue_script( 'jquery-touchSwipe', get_template_directory_uri() . '/assets/js/jquery.touchSwipe.js' , array('jquery'), '1.6.18', TRUE ); 
		wp_enqueue_script( 'anna-lite-template', get_template_directory_uri() . '/assets/js/anna-lite-template.js' , array('jquery'), '1.0.0', TRUE ); 

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		
		wp_enqueue_script('jquery');
		 
		wp_enqueue_script('anna-lite-html5shiv', get_template_directory_uri().'/assets/scripts/html5shiv.js', FALSE, '3.7.3');
		wp_script_add_data('anna-lite-html5shiv', 'conditional', 'IE 8' );
		wp_enqueue_script('anna-lite-selectivizr', get_template_directory_uri().'/assets/scripts/selectivizr.js', FALSE, '1.0.3b');
		wp_script_add_data('anna-lite-selectivizr', 'conditional', 'IE 8' );

	}

	add_action( 'wp_enqueue_scripts', 'anna_lite_scripts_styles' );

}

/*-----------------------------------------------------------------------------------*/
/* Theme setup */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('anna_lite_setup')) {

	function anna_lite_setup() {
		
		global $content_width;

		if ( !isset($content_width) )
			$content_width = (anna_lite_setting('anna_lite_screen3')) ? (anna_lite_setting('anna_lite_screen3')) : 1170;
		
		load_theme_textdomain( 'anna-lite', get_template_directory() . '/languages');

		add_theme_support( 'post-formats', array( 'aside','gallery','quote','video','audio','link','status','chat','image' ) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo');
		add_theme_support( 'custom-background', array(
			'default-color' => 'f3f3f3',
		));

		add_image_size( 'anna_lite_blog_thumbnail', $content_width, 600, TRUE ); 
		add_image_size( 'anna_lite_slick_large', 960, 600, TRUE ); 
		add_image_size( 'anna_lite_slick_small', 400, 400, TRUE ); 

		register_nav_menu( 'main-menu', 'Main menu' );

		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/aside-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/default-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/image-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/link-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/page-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/product-format.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/post-formats/quote-format.php' );

		require_once( trailingslashit( get_template_directory() ) . '/core/templates/after-content.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/archive-title.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/before-content.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/footer.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/masonry.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/media.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/mobile-menu.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/pagination.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/post-formats.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/search-title.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/slick-slider.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/templates/title.php' );
		
		require_once( trailingslashit( get_template_directory() ) . '/core/sidebars/bottom-sidebar.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/sidebars/footer-sidebar.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/sidebars/header-sidebar.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/sidebars/side-sidebar.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/sidebars/top-sidebar.php' );
		
		require_once( trailingslashit( get_template_directory() ) . '/core/includes/class-customize.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/includes/class-metaboxes.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/includes/class-notice.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/includes/class-plugin-activation.php' );
		
		require_once( trailingslashit( get_template_directory() ) . '/core/admin/customize/customize.php' );
		
		require_once( trailingslashit( get_template_directory() ) . '/core/functions/function-required-plugins.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/functions/function-style.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/functions/function-widgets.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/functions/function-woocommerce.php' );
		
		require_once( trailingslashit( get_template_directory() ) . '/core/metaboxes/page.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/metaboxes/post.php' );
		require_once( trailingslashit( get_template_directory() ) . '/core/metaboxes/product.php' );


	}

	add_action( 'after_setup_theme', 'anna_lite_setup' );

}

?>