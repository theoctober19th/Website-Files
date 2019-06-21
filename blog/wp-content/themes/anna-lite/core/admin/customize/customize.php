<?php

if (!function_exists('anna_lite_customize_panel_function')) {

	function anna_lite_customize_panel_function() {
		
		$theme_panel = array ( 

			/* START SUPPORT SECTION */ 

			array(
			
				'title' => esc_html__( 'Upgrade to Anna Premium','anna-lite'),
				'id' => 'anna-lite-customize-info',
				'type' => 'anna-lite-customize-info',
				'section' => 'anna-lite-customize-info',
				'priority' => '08',

			),

			/* START GENERAL SECTION */ 

			array( 
				
				'title' => esc_html__( 'Anna Lite Main Settings','anna-lite'),
				'description' => esc_html__( 'Anna Lite Main Settings','anna-lite'),
				'type' => 'panel',
				'id' => 'general_panel',
				'priority' => '10',
				
			),

			/* SKINS */ 

			array( 

				'title' => esc_html__( 'Color Scheme','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the color scheme of Anna Lite.','anna-lite'),
				'type' => 'section',
				'panel' => 'general_panel',
				'priority' => '11',
				'id' => 'colorscheme_section',

			),

			array(
				
				'label' => esc_html__( 'Predefined Color Schemes','anna-lite'),
				'description' => esc_html__( 'Choose your Color Scheme','anna-lite'),
				'id' => 'anna_lite_skin',
				'type' => 'select',
				'section' => 'colorscheme_section',
				'options' => array (
				   'cyan' => esc_html__( 'Cyan','anna-lite'),
				   'orange' => esc_html__( 'Orange','anna-lite'),
				   'blue' => esc_html__( 'Blue','anna-lite'),
				   'red' => esc_html__( 'Red','anna-lite'),
				   'pink' => esc_html__( 'Pink','anna-lite'),
				   'purple' => esc_html__( 'Purple','anna-lite'),
				   'yellow' => esc_html__( 'Yellow','anna-lite'),
				   'green' => esc_html__( 'Green','anna-lite'),
				   'black' => esc_html__( 'Black','anna-lite'),
				),
				
				'std' => 'orange',
			
			),

			/* PAGE WIDTH */ 

			array( 

				'title' => esc_html__( 'Page width','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the page width of Anna Lite.','anna-lite'),
				'type' => 'section',
				'id' => 'pagewidth_section',
				'panel' => 'general_panel',
				'priority' => '12',

			),

			array( 

				'label' => esc_html__( 'Screen greater than 768px','anna-lite'),
				'description' => esc_html__( 'Set a width, for a screen greater than 768 pixel (for example 750 and not 750px ) ','anna-lite'),
				'id' => 'anna_lite_screen1',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '750',

			),

			array( 

				'label' => esc_html__( 'Screen greater than 992px','anna-lite'),
				'description' => esc_html__( 'Set a width, for a screen greater than 992 pixel (for example 940 and not 940px ) ','anna-lite'),
				'id' => 'anna_lite_screen2',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '940',

			),

			array( 

				'label' => esc_html__( 'Screen greater than 1200px','anna-lite'),
				'description' => esc_html__( 'Set a width, in px, for a screen greater than 1200 pixel (for example 1170 and not 1170px ) ','anna-lite'),
				'id' => 'anna_lite_screen3',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '940',

			),

			array( 

				'label' => esc_html__( 'Screen greater than 1400px','anna-lite'),
				'description' => esc_html__( 'Set a width, in px, for a screen greater than 1400px pixel (for example 1370 and not 1370px ) ','anna-lite'),
				'id' => 'anna_lite_screen4',
				'type' => 'number',
				'section' => 'pagewidth_section',
				'std' => '940',

			),

			/* General settings */ 
			
			array( 

				'title' => esc_html__( 'General settings','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the general settings of Anna Lite.','anna-lite'),
				'type' => 'section',
				'id' => 'settings_section',
				'panel' => 'general_panel',
				'priority' => '13',

			),

			array(
				
				'label' => esc_html__( 'Category title','anna-lite'),
				'description' => esc_html__( 'Do you want to view the category title, under the black container?','anna-lite'),
				'id' => 'anna_lite_view_category_title',
				'type' => 'select',
				'section' => 'settings_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'on',
			
			),

			array(
				
				'label' => esc_html__( 'Searched item','anna-lite'),
				'description' => esc_html__( 'Do you want to view the searched item, under the black container?','anna-lite'),
				'id' => 'anna_lite_view_searched_item',
				'type' => 'select',
				'section' => 'settings_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'on',
			
			),

			array(
				
				'label' => esc_html__('Post Format','anna-lite'),
				'description' => esc_html__('Do you want to use a different layout for the Aside, Link and Quote posts?.','anna-lite'),
				'id' => 'anna_lite_post_format_layout',
				'type' => 'select',
				'section' => 'settings_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'on',
			
			),

			array(
				
				'label' => esc_html__( 'Read more','anna-lite'),
				'description' => esc_html__( 'Do you want to display the read more button?','anna-lite'),
				'id' => 'anna_lite_view_readmore',
				'type' => 'select',
				'section' => 'settings_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'on',
			
			),

			array(
				
				'label' => esc_html__( 'Back to top button.','anna-lite'),
				'description' => esc_html__( 'Do you want to display a button to back on the top of the site?','anna-lite'),
				'id' => 'anna_lite_view_back_to_top',
				'type' => 'select',
				'section' => 'settings_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'on',
			
			),

			/* SLIDER SETTINGS */ 

			array( 

				'title' => esc_html__( 'Slideshow settings','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the settings of homepage slideshow.','anna-lite'),
				'type' => 'section',
				'id' => 'slideshow_section',
				'panel' => 'general_panel',
				'priority' => '14',

			),
			
			array(
				
				'label' => esc_html__( 'Homepage slideshow','anna-lite'),
				'description' => esc_html__( 'Do you want to display the slideshow on homepage?','anna-lite'),
				'id' => 'anna_lite_homepage_slideshow',
				'type' => 'select',
				'section' => 'slideshow_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'on',
			
			),

			array(
				
				'label' => esc_html__( 'Slideshow position','anna-lite'),
				'description' => esc_html__( 'Please select the position of slideshow on homepage.','anna-lite'),
				'id' => 'anna_lite_homepage_slideshow_position',
				'type' => 'select',
				'section' => 'slideshow_section',
				'options' => array (
				   'top' => esc_html__( 'Inside the top widget area (full width)','anna-lite'),
				   'header' => esc_html__( 'Inside the header widget area','anna-lite'),
				),
				
				'std' => 'top',
			
			),

			array(
				
				'label' => esc_html__( 'Caption Overlay','anna-lite'),
				'description' => esc_html__( 'Do you want to display the caption overlay on homepage slideshow?','anna-lite'),
				'id' => 'anna_lite_slideshow_overlay',
				'type' => 'select',
				'section' => 'slideshow_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'on',
			
			),

			array( 

				'label' => esc_html__( 'Limit','anna-lite'),
				'description' => esc_html__( 'How many items you want to display? (set -1 to load all items)','anna-lite'),
				'id' => 'anna_lite_slideshow_limit',
				'type' => 'slideshow_limit',
				'section' => 'slideshow_section',
				'std' => '-1',

			),

			/* WooCommerce Settings SECTION */ 

			array( 

				'title' => esc_html__( 'WooCommerce settings','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the settings of WooCommerce.','anna-lite'),
				'type' => 'section',
				'id' => 'woocommerce_section',
				'panel' => 'general_panel',
				'priority' => '15',

			),
			
			array(
				
				'label' => esc_html__( 'Cross sell products','anna-lite'),
				'description' => esc_html__( 'Do you want to display the cross sell products on cart page?','anna-lite'),
				'id' => 'anna_lite_woocommerce_cross_sell_cart',
				'type' => 'select',
				'section' => 'woocommerce_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'off',
			
			),

			array(
				
				'label' => esc_html__( 'Related products','anna-lite'),
				'description' => esc_html__( 'Do you want to display the related products on product page?','anna-lite'),
				'id' => 'anna_lite_woocommerce_related_products',
				'type' => 'select',
				'section' => 'woocommerce_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'off',
			
			),

			array(
				
				'label' => esc_html__( 'Up sell products','anna-lite'),
				'description' => esc_html__( 'Do you want to display the up sell products on product page?','anna-lite'),
				'id' => 'anna_lite_woocommerce_upsell_products',
				'type' => 'select',
				'section' => 'woocommerce_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'off',
			
			),
			
			array(
				
				'label' => esc_html__( 'WooCommerce linkable product thumbnails','anna-lite'),
				'description' => esc_html__( 'Do you want to make linkable the product thumbnails on WooCommerce category pages?','anna-lite'),
				'id' => 'anna_lite_linkable_product_thumbnails',
				'type' => 'select',
				'section' => 'woocommerce_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'off',
			
			),

			array(
				
				'label' => esc_html__('WooCommerce Category Layout','anna-lite'),
				'description' => esc_html__('Select a layout for the woocommerce categories.','anna-lite'),
				'id' => 'anna_lite_woocommerce_category_layout',
				'type' => 'select',
				'section' => 'woocommerce_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','anna-lite'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','anna-lite'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','anna-lite'),
				),
				
				'std' => 'right-sidebar',
			
			),

			/* LAYOUTS SECTION */ 

			array( 

				'title' => esc_html__( 'Layouts','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the layouts of Anna Lite.','anna-lite'),
				'type' => 'section',
				'id' => 'layouts_section',
				'panel' => 'general_panel',
				'priority' => '16',

			),

			array(
				
				'label' => esc_html__('Home Blog Layout','anna-lite'),
				'description' => esc_html__('If you&#39;ve set the latest articles, for the homepage, choose a layout.','anna-lite'),
				'id' => 'anna_lite_home',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','anna-lite'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','anna-lite'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','anna-lite'),
				   'masonry' => esc_html__( 'Masonry','anna-lite'),
				),
				
				'std' => 'masonry',
			
			),
	

			array(
				
				'label' => esc_html__('Category Layout','anna-lite'),
				'description' => esc_html__('Select a layout for category pages.','anna-lite'),
				'id' => 'anna_lite_category_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','anna-lite'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','anna-lite'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','anna-lite'),
				   'masonry' => esc_html__( 'Masonry','anna-lite'),
				),
				
				'std' => 'masonry',
			
			),

			array(
				
				'label' => esc_html__('Search Layout','anna-lite'),
				'description' => esc_html__('Select a layout for the search section.','anna-lite'),
				'id' => 'anna_lite_search_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
				   'full' => esc_html__( 'Full Width','anna-lite'),
				   'left-sidebar' => esc_html__( 'Left Sidebar','anna-lite'),
				   'right-sidebar' => esc_html__( 'Right Sidebar','anna-lite'),
				   'masonry' => esc_html__( 'Masonry','anna-lite'),
				),
				
				'std' => 'masonry',
			
			),

			array(
				
				'label' => esc_html__('Read More Layout','anna-lite'),
				'description' => esc_html__('Select a layout for the read more button.','anna-lite'),
				'id' => 'anna_lite_readmore_layout',
				'type' => 'select',
				'section' => 'layouts_section',
				'options' => array (
					'default' => esc_html__( 'Default Button','anna-lite'),
					'nobutton' => esc_html__( 'Replace with => [...]','anna-lite'),
				),
				
				'std' => 'default',
			
			),

			/* FOOTER AREA SECTION */ 

			array( 

				'title' => esc_html__( 'Social Links and Footer','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the social icons and the copyright text.','anna-lite'),
				'type' => 'section',
				'id' => 'footer_section',
				'panel' => 'general_panel',
				'priority' => '17',

			),

			array( 

				'label' => esc_html__( 'Copyright Text','anna-lite'),
				'description' => esc_html__( 'Insert your copyright text.','anna-lite'),
				'id' => 'anna_lite_copyright_text',
				'type' => 'textarea',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Facebook Url','anna-lite'),
				'description' => esc_html__( 'Insert Facebook Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_facebook_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Twitter Url','anna-lite'),
				'description' => esc_html__( 'Insert Twitter Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_twitter_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Flickr Url','anna-lite'),
				'description' => esc_html__( 'Insert Flickr Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_flickr_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Google Url','anna-lite'),
				'description' => esc_html__( 'Insert Google Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_google_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Linkedin Url','anna-lite'),
				'description' => esc_html__( 'Insert Linkedin Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_linkedin_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Slack Url','anna-lite'),
				'description' => esc_html__( 'Insert Slack Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_slack_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Pinterest Url','anna-lite'),
				'description' => esc_html__( 'Insert Pinterest Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_pinterest_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Tumblr Url','anna-lite'),
				'description' => esc_html__( 'Insert Tumblr Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_tumblr_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Soundcloud Url','anna-lite'),
				'description' => esc_html__( 'Insert Soundcloud Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_soundcloud_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Spotify Url','anna-lite'),
				'description' => esc_html__( 'Insert Spotify Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_spotify_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Youtube Url','anna-lite'),
				'description' => esc_html__( 'Insert Youtube Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_youtube_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Vimeo Url','anna-lite'),
				'description' => esc_html__( 'Insert Vimeo Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_vimeo_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'VK Url','anna-lite'),
				'description' => esc_html__( 'Insert VK Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_vk_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Instagram Url','anna-lite'),
				'description' => esc_html__( 'Insert Instagram Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_instagram_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Deviantart Url','anna-lite'),
				'description' => esc_html__( 'Insert Deviantart Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_deviantart_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Github Url','anna-lite'),
				'description' => esc_html__( 'Insert Github Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_github_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Xing Url','anna-lite'),
				'description' => esc_html__( 'Insert Xing Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_xing_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),
			
			array( 

				'label' => esc_html__( 'Dribbble Url','anna-lite'),
				'description' => esc_html__( 'Insert Dribbble Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_dribbble_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),
			
			array( 

				'label' => esc_html__( 'Dropbox Url','anna-lite'),
				'description' => esc_html__( 'Insert Dropbox Url (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_dropbox_button',
				'type' => 'url',
				'section' => 'footer_section',
				'std' => '',

			),
			
			array( 

				'label' => esc_html__( 'Whatsapp Number','anna-lite'),
				'description' => esc_html__( 'Insert Whatsapp number (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_whatsapp_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Telegram Account','anna-lite'),
				'description' => esc_html__( 'Insert Telegram Account (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_telegram_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Skype Url','anna-lite'),
				'description' => esc_html__( 'Insert Skype ID (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_skype_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array( 

				'label' => esc_html__( 'Email Address','anna-lite'),
				'description' => esc_html__( 'Insert Email Address (leave empty if you want to hide the button)','anna-lite'),
				'id' => 'anna_lite_footer_email_button',
				'type' => 'button',
				'section' => 'footer_section',
				'std' => '',

			),

			array(
				
				'label' => esc_html__( 'Feed Rss Button','anna-lite'),
				'description' => esc_html__( 'Do you want to display the Feed Rss button?','anna-lite'),
				'id' => 'anna_lite_footer_rss_button',
				'type' => 'select',
				'section' => 'footer_section',
				'options' => array (
				   'off' => esc_html__( 'No','anna-lite'),
				   'on' => esc_html__( 'Yes','anna-lite'),
				),
				
				'std' => 'off',
			
			),

			/* TYPOGRAPHY SECTION */ 

			array( 
				
				'title' => esc_html__( 'Anna Lite Typography','anna-lite'),
				'description' => esc_html__( 'Anna Lite Typography','anna-lite'),
				'type' => 'panel',
				'id' => 'typography_panel',
				'priority' => '11',
				
			),

			/* LOGO */ 

			array( 

				'title' => esc_html__( 'Logo','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the typography of the logo.','anna-lite'),
				'type' => 'section',
				'id' => 'logo_section',
				'panel' => 'typography_panel',
				'priority' => '10',

			),

			array( 

				'label' => esc_html__( 'Font size','anna-lite'),
				'description' => esc_html__( 'Insert a size, for logo font (For example, 60px) ','anna-lite'),
				'id' => 'anna_lite_logo_font_size',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '70px',

			),
			
			array( 

				'label' => esc_html__( 'Description font size','anna-lite'),
				'description' => esc_html__( 'Insert a size, for logo description (For example, 14px) ','anna-lite'),
				'id' => 'anna_lite_logo_description_font_size',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '14px',

			),

			array( 

				'label' => esc_html__( 'Description top margin','anna-lite'),
				'description' => esc_html__( 'Add a space between the logo and the description (For example, 15px) ','anna-lite'),
				'id' => 'anna_lite_logo_description_top_margin',
				'type' => 'pixel_size',
				'section' => 'logo_section',
				'std' => '15px',

			),

			/* MENU */ 

			array( 

				'title' => esc_html__( 'Menu','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the typography of the menu.','anna-lite'),
				'type' => 'section',
				'id' => 'menu_section',
				'panel' => 'typography_panel',
				'priority' => '11',

			),

			array( 

				'label' => esc_html__( 'Font size','anna-lite'),
				'description' => esc_html__( 'Insert a size, for menu font (For example, 14px) ','anna-lite'),
				'id' => 'anna_lite_menu_font_size',
				'type' => 'pixel_size',
				'section' => 'menu_section',
				'std' => '14px',

			),

			array(
				
				'label' => esc_html__('Menu weight','anna-lite'),
				'description' => esc_html__('Choose a font weight for the menu.','anna-lite'),
				'id' => 'anna_lite_menu_font_weight',
				'type' => 'select',
				'section' => 'menu_section',
				'options' => array(
					'300' => esc_html__( '300','anna-lite'),
					'400' => esc_html__( '400','anna-lite'),
					'700' => esc_html__( '700','anna-lite'),
					'900' => esc_html__( '900','anna-lite'),
				),

				'std' => '400',
			
			),
			
			array(
				
				'label' => esc_html__('Text transform','anna-lite'),
				'description' => esc_html__('Do you want to display an uppercase menu?.','anna-lite'),
				'id' => 'anna_lite_menu_text_transform',
				'type' => 'select',
				'section' => 'menu_section',
				'options' => array(
					'none' => esc_html__( 'None','anna-lite'),
					'uppercase' => esc_html__( 'Uppercase','anna-lite'),
				),

				'std' => 'none',
			
			),
			
			/* CONTENT */ 

			array( 

				'title' => esc_html__( 'Content','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the typography of the content.','anna-lite'),
				'type' => 'section',
				'id' => 'content_section',
				'panel' => 'typography_panel',
				'priority' => '12',

			),

			array( 

				'label' => esc_html__( 'Font size','anna-lite'),
				'description' => esc_html__( 'Insert a size, for content font (For example, 14px) ','anna-lite'),
				'id' => 'anna_lite_content_font_size',
				'type' => 'pixel_size',
				'section' => 'content_section',
				'std' => '14px',

			),


			/* HEADLINES */ 

			array( 

				'title' => esc_html__( 'Headlines','anna-lite'),
				'description' => esc_html__( 'From this section you can manage the typography of the headlines.','anna-lite'),
				'type' => 'section',
				'id' => 'headlines_section',
				'panel' => 'typography_panel',
				'priority' => '13',

			),

			array( 

				'label' => esc_html__( 'H1 headline','anna-lite'),
				'description' => esc_html__( 'Insert a size, for for H1 elements (For example, 24px) ','anna-lite'),
				'id' => 'anna_lite_h1_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '24px',

			),

			array( 

				'label' => esc_html__( 'H2 headline','anna-lite'),
				'description' => esc_html__( 'Insert a size, for for H2 elements (For example, 22px) ','anna-lite'),
				'id' => 'anna_lite_h2_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '22px',

			),

			array( 

				'label' => esc_html__( 'H3 headline','anna-lite'),
				'description' => esc_html__( 'Insert a size, for for H3 elements (For example, 20px) ','anna-lite'),
				'id' => 'anna_lite_h3_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '20px',

			),

			array( 

				'label' => esc_html__( 'H4 headline','anna-lite'),
				'description' => esc_html__( 'Insert a size, for for H4 elements (For example, 18px) ','anna-lite'),
				'id' => 'anna_lite_h4_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '18px',

			),

			array( 

				'label' => esc_html__( 'H5 headline','anna-lite'),
				'description' => esc_html__( 'Insert a size, for for H5 elements (For example, 16px) ','anna-lite'),
				'id' => 'anna_lite_h5_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '16px',

			),

			array( 

				'label' => esc_html__( 'H6 headline','anna-lite'),
				'description' => esc_html__( 'Insert a size, for for H6 elements (For example, 14px) ','anna-lite'),
				'id' => 'anna_lite_h6_font_size',
				'type' => 'pixel_size',
				'section' => 'headlines_section',
				'std' => '14px',

			),
			
			array(
				
				'label' => esc_html__('Titles weight','anna-lite'),
				'description' => esc_html__('Choose a font weight for the titles.','anna-lite'),
				'id' => 'anna_lite_titles_font_weight',
				'type' => 'select',
				'section' => 'headlines_section',
				'options' => array(
					'400' => esc_html__( '400','anna-lite'),
					'700' => esc_html__( '700','anna-lite'),
					'900' => esc_html__( '900','anna-lite'),
				),

				'std' => '400',
			
			),
			
			array(
				
				'label' => esc_html__('Text transform','anna-lite'),
				'description' => esc_html__('Do you want to display an uppercase title?.','anna-lite'),
				'id' => 'anna_lite_titles_text_transform',
				'type' => 'select',
				'section' => 'headlines_section',
				'options' => array(
					'none' => esc_html__( 'None','anna-lite'),
					'uppercase' => esc_html__( 'Uppercase','anna-lite'),
				),

				'std' => 'none',
			
			),

		);
		
		new anna_lite_customize($theme_panel);
		
	} 
	
	add_action( 'anna_lite_customize_panel', 'anna_lite_customize_panel_function' );

}

do_action('anna_lite_customize_panel');

?>