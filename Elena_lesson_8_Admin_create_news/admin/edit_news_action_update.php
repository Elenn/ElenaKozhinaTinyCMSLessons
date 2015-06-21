<?php
	include("../config.php");
	include("admin_functions.php");	
	
	$title = filter_data($_POST['title']);
	$summary = filter_data($_POST['summary']);
	$full = $_POST['full'];
	$type = $_POST['type']; 
	$id = intval($_POST['id']);
	$q = mysql_query("UPDATE articles SET title='$title',summary='$summary',full='$full',type='$type' WHERE id='$id'",$db);
	if($q==true) {
		header("Location: ../index.php");  
	}
	else {
		mysql_error();
	}
?>