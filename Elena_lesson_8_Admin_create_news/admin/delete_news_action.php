<?php
	include("../config.php");
	$id = $_GET['id'];
	if(is_numeric($id)) {
		if($id!=-1) {
			$q = mysql_query("DELETE FROM articles WHERE id='$id'",$db);
			if($q==true) {
				header("Location: ../index.php");  
			} else {
				mysql_error();
			}
		}
		else {
			$q = mysql_query("DELETE FROM articles",$db);
			if($q==true) {
				header("Location: ../index.php");  
			} else {
				mysql_error();
			}
		}
	}
?>