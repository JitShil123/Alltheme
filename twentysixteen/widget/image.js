jQuery(document).ready(function(){

	jQuery('.image-upload').click(function(){
		tb_show('','media-upload.php?post_id=437&type=image&TB_iframe=1');

		return false;
	});

	window.send_to_editor = function(html){

		// alert('ami perci...');
		var imagelink = jQuery('img', html).attr('src'); 
		jQuery('.photo').val(imagelink);
		tb_remove();
	}

	 
})