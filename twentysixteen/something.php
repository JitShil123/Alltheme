<?php
/*
Template Name: database


*/

	

	// global $wpdb;
	// $tbpre= $wpdb->prefix.'jit';
	// require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

	// dbDelta("CREATE TABLE $tbpre(id INT AUTO_INCREMENT, name varchar(30), UNIQUE KEY id(id)) " );

	

	?>
<form action="" method="POST">
	<input type="text" name="name" placeholder="Enter your name">
	<input type="submit" name="submit" value="submit" >
</form>

 <?php
	global $wpdb;
	$tablename= $wpdb->prefix.'jit';
	// echo $wpdb-> get_var("SELECT * FROM $tablename WHERE id='1'",1);
	$allinfo= $wpdb-> get_results("SELECT * FROM $tablename");
	foreach($allinfo as $value){
		$id= $value->id;
		$edit= '?edit='.$id;
		$delete= '?delete='.$id;
		echo $id.'  '.$value->name.'        '.'<a href='.$edit.'>edit</a>'.' '. '<a href='.$delete.'>delete</a>'."<br>";
	}	


if(isset($_GET['edit'])):
	$id= $_GET['edit'];
	$value= $wpdb->get_var("SELECT name FROM $tablename WHERE id= $id");
?>
<form action="" method="POST">
	<input type="text" name="update_name" value="<?php echo $value ?>" placeholder="Enter your name">
	<input type="submit" name="update" value="update" >
</form>


<?php endif;

if(isset($_GET['delete'])){
	$id= $_GET['delete'];
	$wpdb->delete($tablename, array(
		'id'=>$id,
	));
	global $POST;
	$id= $POST->id;
	wp_redirect(get_page_link());
}
