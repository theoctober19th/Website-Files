<?php
 
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

if( !class_exists( 'anna_lite_metaboxes' ) ) {

	class anna_lite_metaboxes {
	   
		public $posttype;
		public $metaboxes_fields;
	   
		public function __construct( $posttype, $fields = array() ) {
	
			$this->posttype = $posttype;
			$this->metaboxes_fields = $fields;
			
			add_action( 'add_meta_boxes', array( &$this, 'new_metaboxes' ) ); 
			add_action( 'save_post', array( &$this, 'anna_lite_metaboxes_save' ) );
		}
	
		public function new_metaboxes() {
	
			$posttype = $this->posttype ;
			add_meta_box( $posttype, ucfirst($posttype).' settings', array( &$this, 'metaboxes_panel' ), $posttype, 'normal', 'high' );
		
		}
		
		public function metaboxes_panel() {
	
			$metaboxes_fields = $this->metaboxes_fields ;
	
			global $post, $post_id;
			
			foreach ($metaboxes_fields as $value) {
			switch ( $value['type'] ) { 
		
			case 'navigation': ?>
			
				<div id="tabs" class="anna_lite_metaboxes">
						
					<ul>
			
						<?php 
						
							foreach ($value['item'] as $option => $name ) { 
								echo "<li class='".$option."'><a href='#".str_replace(" ", "", $option)."'>".$name."</a></li>"; 
							} 
						?>
                        
                        <li class="clear"></li>
                        
					</ul>
					   
			<?php	
					
			break;
		
			case 'begintab': ?>

				<div id="<?php echo esc_attr($value['tab']);?>">
		
			<?php	
					
			break;
		
			case 'endtab': ?>
			
				</div>
		
			<?php	
					
			break;
			
			}
			
			foreach ($value as $field) {
		
			if (isset($field['type'])) : 
		
				switch ( $field['type'] ) { 
		
					case 'start':  ?>
					<div class="postformat" id="<?php echo esc_attr($field['id']); ?>">
				
					<?php break;
					
					case 'end':  ?>
					</div>
					
					<?php break;
					
					case 'title':  ?>
					
					<h3 class="title"><?php echo esc_attr($field['name']); ?></h3>
					
					<?php break;
		
					case 'text':  ?>
					
					<div class="anna_lite_inputbox">
						
						<div class="input-left">
						
							<label for="<?php echo esc_attr($field['id']); ?>"><?php echo esc_attr($field['name']); ?></label><br />
							<em> <?php echo esc_attr($field['desc']); ?> </em>
							
						</div>
						
						<div class="input-right">
						
							<input name="<?php echo esc_attr($field['id']); ?>" id="<?php echo esc_attr($field['id']); ?>" type="<?php echo esc_attr($field['type']); ?>" value="<?php if ( anna_lite_postmeta( $field['id']) != "") { echo esc_html(anna_lite_postmeta( $field['id'])); } ?>" />
							
						</div>
						
						<div class="clear"></div>
					
                    </div>
				
					<?php break;
		
					case 'select':  ?>
					
					<div class="anna_lite_inputbox">
						
						<div class="input-left">
						
							<label for="<?php echo esc_attr($field['id']); ?>"><?php echo esc_attr($field['name']); ?></label>
							<em> <?php echo esc_attr($field['desc']); ?> </em>
							
						</div>
						
						<div class="input-right">
                        
							<select name="<?php echo esc_attr($field['id']); ?>" id="<?php echo esc_attr($field['id']); ?>" >
								
								<?php foreach ($field['options'] as $option => $values) { ?>
								<option <?php if ( anna_lite_postmeta($field['id']) == $option || ( !anna_lite_postmeta($field['id']) && $field['std'] == $option )) { echo 'selected="selected"'; } ?> value="<?php echo esc_attr($option); ?>"><?php echo esc_attr($values); ?></option><?php } ?>  
                                
							</select>
						
						</div>
						
						<div class="clear"></div>
					
                    </div>
					
					<?php break;
					
					case 'textarea':  ?>
							
					<div class="anna_lite_inputbox">
						
						<div class="input-left">
						
                        	<label for="<?php echo esc_attr($field['id']); ?>"><?php echo esc_attr($field['name']); ?></label><br />
							<em> <?php echo esc_attr($field['desc']); ?> </em>
						
                        </div>
						
                        <div class="input-right">
                        
                            <textarea name="<?php echo esc_attr($field['id']); ?>" id="<?php echo esc_attr($field['id']); ?>" type="<?php echo esc_attr($field['type']); ?>" ><?php if ( anna_lite_postmeta( $field['id']) != "") { echo stripslashes(anna_lite_postmeta( $field['id'])); } ?></textarea>
						
                        </div>
						
                        <div class="clear"></div>
					
                    </div>
							
					<?php 

						break;
				
					}
				
				endif;
				
				}
			
			}
	
		}
		
		public function anna_lite_metaboxes_save() {
		
			global $post_id, $post;
				
			$metaboxes_fields = $this->metaboxes_fields ;
		
			foreach ($metaboxes_fields as $fields ) {
					
				foreach ($fields as $field) {
					
					if ( isset($field['id']) && isset ($_POST[$field['id']] ) ) {

						switch ( $field['type'] ) {
							
							case 'select':
								
								$value = $_POST[$field['id']];
								$newValue = (array_key_exists($value, $field['options'])) ? $value : $field['std'];
								update_post_meta($post_id, $field['id'], $newValue );
								
							break;

							case 'text':
								
								$value = $_POST[$field['id']];
								$newValue = sanitize_text_field($value);
								update_post_meta($post_id, $field['id'], $newValue );
								
							break;
							
							case 'textarea':
								
								$value = $_POST[$field['id']];
								$newValue = sanitize_textarea_field($value);
								update_post_meta($post_id, $field['id'], $newValue );
								
							break;

						}
							
					}
						
				}
					
			}
				
		}
				
	}

}

?>