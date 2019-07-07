<?php 

class spceial Extends WP_Widget{
	public function __construct(){
		parent::__construct('spceial',__('About Admin','twentity_sixteen'),array(
			'description'=>__('All about admin','twentity_sixteen'),
		));
	}

	public function widget($args,$instance){
		if($instance['title']){
			$title = $instance['title'];
		}else{
			$title= "Author Name";
		}
		$Company =$instance['Company'];
		$Designation =$instance['Designation'];
		$image = $instance['image'];
		$photocheck =$instance['photocheck'];

		$widget_content =  $args['before_title'].$title.$args['after_title'];
		$widget_content .=  'Company: '.$Company.'</br>';
		$widget_content .=  'Designation: '.$Designation;
		$widget_content .=  '<img src="'.$image.'" alt="">';




		echo $args['before_widget'].$widget_content.$args['after_widget'];


	}

	public function form($instance){ 
		if($instance['title']){
			$title = $instance['title'];
		}else{
			$title= "Author Name";
		}

		$Company =$instance['Company'];
		$Designation =$instance['Designation'];
		$image = $instance['image'];
		$photocheck =$instance['photocheck'];
		?>
		
		
		<label for="<?php echo $this->get_field_id('title');?>">Title: 
		<p><input class="widefat" type="text" name="<?php echo $this->get_field_name('title');?>" id="<?php echo $this->get_field_id('title');?>" value="<?php echo $title; ?>"></p>
		</label>

		<label for="<?php echo $this->get_field_id('Company');?>">Company: 
		<p><input class="widefat" type="text" name="<?php echo $this->get_field_name('Company');?>" id="<?php echo $this->get_field_id('Company');?>" value="<?php echo $Company; ?>"></p>
		</label>
		
		<label for="<?php echo $this->get_field_id('Designation');?>">Designation: 
		<p><input class="widefat" type="text" name="<?php echo $this->get_field_name('Designation');?>" id="<?php echo $this->get_field_id('Designation');?>" value="<?php echo $Designation; ?>"></p>
		</label>

		<label for="<?php echo $this->get_field_id('image');?>">image: 
		<p><input class="widefat photo" type="text" name="<?php echo $this->get_field_name('image');?>" id="<?php echo $this->get_field_id('image');?>" value="<?php echo $image; ?>"></p>
		</label>
		<button class="image-upload">Upload image</button>
		<p>
		<label for="<?php echo $this->get_field_id('photocheck');?>"> Show Photo</label>
		<input type="checkbox" <?php checked('$photocheck',1); ?> id="<?php echo $this->get_field_id('photocheck');?>" name="<?php echo $this->get_field_name('photocheck'); ?>" value="1"></p>

	<?php }




	public function update($new_instance,$old_instance){
		$instance = $old_instance;

	    $instance['title']=$new_instance['title'];
		$instance['Company']=$new_instance['Company'];
		$instance['Designation']=$new_instance['Designation'];
		$instance['image']=$new_instance['image'];
		$instance['photocheck']=$new_instance['photocheck'];

		return $instance;

	}
}


function Admin_widget(){
	register_widget('spceial');
}
add_action('widgets_init','Admin_widget');













function image_function(){
	wp_register_script('image',get_template_directory_uri().'/widget/image.js',array('media-upload','thickbox'));

	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_enqueue_style('thickbox');
	wp_enqueue_script('image');

}
add_action('admin_enqueue_scripts','image_function');








?>