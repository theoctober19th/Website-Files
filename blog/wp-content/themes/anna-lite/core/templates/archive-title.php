<?php 

/**
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('anna_lite_archive_title_function')) {

	function anna_lite_archive_title_function( $row = "on" ) {

		if ( !anna_lite_setting('anna_lite_view_category_title') || anna_lite_setting('anna_lite_view_category_title') == "on" ) :
			
			$before = "<div class='row'>";
			$after = "</div>";
	
			if ( $row == "off" ) :
			
				$before = "";
				$after = "";
			
			endif;
			
			$allowed = array(
				'div' => array(
					'class' => array(),
				),
				'span' => array(
					'class' => array(),
				),
			);

			echo wp_kses($before, $allowed);
			
?>
			
			<div class="post-container col-md-12" >
		
				<article class="post-article category">
						
					<h1><?php echo wp_kses(anna_lite_get_archive_title(), $allowed); ?></h1>
		
				</article>
		
			</div>
	
<?php

			echo wp_kses($after, $allowed);
		
		endif;
		
	} 
	
	add_action( 'anna_lite_archive_title', 'anna_lite_archive_title_function' );

}

?>