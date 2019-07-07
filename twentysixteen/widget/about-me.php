<?php 
class my_first_widget extends WP_Widget{
	public function __construct(){
		parent::__construct('my_first_widge','Widgets_test',array(
			'description'=>'This is my widgets',
		));
	}
	public function Widget($args,$instance){
		if($instance['title']){
			$title= $instance['title'];
		}else
		{
			$title= "jit Shil";
		}
		
		$facebook= $instance['facebook'];

		echo $args['before_widget'].$args['before_title'].'Name: '.$title.$args['after_title'];
		echo 'Social-Media: '."<a href=\"$facebook\">Facebook</a>".$args['after_widget'];

	}
	public function form($instance){
		if($instance['title']){
			$title= $instance['title'];
		}else
		{
			$title= "jit Shil";
		}
		$facebook= $instance['facebook'];
	 ?>

		<p>
			<label for="<?php echo $this->get_field_id('title');?>">Title:

				<input class="widefat"  type="text" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" value="<?php echo $title;?>">

			</label>

			<label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook Icon:

				<input class="widefat"  type="url" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" value="<?php echo $facebook; ?>">

			</label>
		</p>

	<?php }
}

function my_widget_done(){
	register_widget('my_first_widget');
}
add_action('widgets_init','my_widget_done');
