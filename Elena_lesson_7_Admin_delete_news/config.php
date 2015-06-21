<?php  
	$db = @mysql_connect("localhost","root","");
	mysql_select_db("tutorial",$db);

    mb_internal_encoding("UTF-8");
	error_reporting(E_ALL);	
	
?>