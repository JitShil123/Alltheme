<?php
class footericon Extends WP_Widget{
	public function __construct(){
		parent::__construct('footericon',__('Footer widget icon','blogin'),array(

			'description'=>__('this is a custom widget for c','blogin'),
		));
	}


	public function widget($args,$instance){

		$fblink = $instance['fblink'];
		$youtubelink = $instance['youtubelink'];
		$twlink = $instance['twlink'];

		echo $args['before_widget'];
		?>
	<div class="ficon">
			<a href="<?php echo $fblink; ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/facebook.png'?>" alt=""></i></a>
			<a href="<?php echo $youtubelink; ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/youtube.png'?>" alt=""></i></a>
			<a href="<?php echo $youtubelink; ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/twitter.png'?>" alt=""></i></a>
	</div>
	
	
		<?php
		echo $args['after_widget'];

	}

	public function form($instance){
		$fblink = $instance['fblink'];
		$youtubelink = $instance['youtubelink'];
		$twlink = $instance['twlink'];
		?>
	<label for="<?php echo $this->get_field_id('fblink'); ?>">Facebook link</label>
	<input class="widefat" type="text" id="<?php echo $this->get_field_id('fblink'); ?>" name="<?php echo $this->get_field_name('fblink'); ?>" value="<?php echo $fblink; ?>">

	<label for="<?php echo $this->get_field_id('youtubelink'); ?>">Facebook link</label>
	<input class="widefat" type="text" id="<?php echo $this->get_field_id('youtubelink'); ?>" name="<?php echo $this->get_field_name('youtubelink'); ?>" value="<?php echo $youtubelink; ?>">

	<label for="<?php echo $this->get_field_id('twlink'); ?>">Facebook link</label>
	<input class="widefat" type="text" id="<?php echo $this->get_field_id('twlink'); ?>" name="<?php echo $this->get_field_name('twlink'); ?>" value="<?php echo $twlink; ?>">

		<?php

	}

	public function update($new_instance,$old_instance){
		$instance = $old_instance;
		$instance['fblink'] = $new_instance;

		return $new_instance;

	}
}

function footer(){
	register_widget('footericon');
}
add_action('widgets_init','footer');