<?php
	session_start();
	include ("../config.php");
	
	$login = $_POST['login'];
	$password = $_POST['password'];
	$login = trim($login);
	$password = trim($password); 
	 
	$password = md5($password);
	$password = strrev($password);
	$password = $password."ygtr7ur56378238"; 
	
	$result_user = mysql_query("SELECT * FROM users WHERE login='$login' AND password='$password'",$db);
	$r_user_panel = mysql_fetch_array($result_user);
	if(empty($r_user_panel['id']))
	{
	    header("Location: ../index.php"); 
		
	} else {
	
		$_SESSION['login'] = $r_user_panel['login'];
		$_SESSION['id'] = $r_user_panel['id']; 
	}
	
	header("Location: ../index.php");
	 
?>