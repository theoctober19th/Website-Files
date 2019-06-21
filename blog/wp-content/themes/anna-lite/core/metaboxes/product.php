<?php

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

new anna_lite_metaboxes ('product', array (

array(  "name" => "Navigation",  
		"type" => "navigation",  

		"item" => array( 
	   	
			"setting" => esc_html__( "Product settings","anna-lite") , 
			
		),   

		"start" => "<ul>", 
		"end" => "</ul>"),  

array(  "type" => "begintab",
		"tab" => "setting",
		"element" =>

		array(  "name" => esc_html__( "Product settings","anna-lite"),
				"type" => "title",
		),

		array(  "name" => esc_html__( "Template","anna-lite"),
				"desc" => esc_html__( "Select a template for this page","anna-lite"),
				"id" => "anna_lite_template",
				"type" => "select",
				"options" => array(
					"full" => esc_html__( "Full Width","anna-lite"),
					"left-sidebar" =>  esc_html__( "Left Sidebar","anna-lite"),
					"right-sidebar" => esc_html__( "Right Sidebar","anna-lite")),
			  
				"std" => "right-sidebar",
		
		),

),

array( "type" => "endtab"),

array( "type" => "endtab")
)

);


?>