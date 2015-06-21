<?php
	include("../config.php");
	include("admin_functions.php");
	
	$title = filter_data($_POST['title']);
	$summary = filter_data($_POST['summary']);
	$full = $_POST['full'];
	$img_url = $_POST['img_url'];
	$type = $_POST['type'];
	$date = time();
	$id = $_POST['id'];
	$q = mysql_query("INSERT INTO articles SET title='$title',summary='$summary',full='$full',date='$date',type='$type',img_url='$img_url',id_author='$id'",$db);
	if($q==true)
	{
		header("Location: ../index.php");
	}
	else {
		mysql_error();
	}
?>