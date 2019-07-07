<?php 
class bsearch Extends WP_Widget{
	public function __construct(){
		parent::__construct('bsearch',__('Blogin search','blogin'),array(
			'description'=>__('this is search bar specialist for the theme','blogin')
		));
	}


	public function widget($args,$instance){
		$title = $instance['title'];
		
		$widget_content =  $args['before_title'].$title.$args['after_title'];
		

		echo $args['before_widget'].$widget_content.$args['after_widget'];
		?>
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
					<div>
						<input class="widefat" type="text" value=" " name="s" id="s" />
						<input type="submit" class="" name="submit" value="<?php _e('Search');?>" />
					</div>
				</form>

		<?php

	}



	public function form($instance){ 
		
		$title = $instance['title'];
		?>
		
		<label for="<?php echo $this->get_field_id('title');?>">Title: 
			<input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>" id="<?php echo $this->get_field_id('title');?>" value="<?php echo $title; ?>">
		</label>
		

<?php
	}

	public function update($new_instance,$old_instance){
		$instance = $old_instance;

	    $instance['title']=$new_instance['title'];
		

		return $instance;

	}

	
}


function Search(){
		register_widget('bsearch');
	}
add_action('widgets_init','Search');


