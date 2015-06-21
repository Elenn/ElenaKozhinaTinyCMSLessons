<?php
	session_start();
	header("Content-Type: text/html; charset=utf-8");
	include("../config.php");
	
	$password = $_POST['password'];
	$r_password = $_POST['r_password'];
	$login = $_POST['login'];
	$email = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$sex = $_POST['sex'];
	if($password!=$r_password) {
		exit ("Пароли должны совпадать");
	}
	if(strlen($login)<3 or strlen($login) > 15) {
		exit("Логин должен быть не меньше 3х символов и не больше 15");
	}	
	if(strlen($first_name)<2 or strlen($first_name) > 20) {
		exit("Имя должно быть не меньше 2х символов и не больше 20");
	}
	if(strlen($last_name)<3 or strlen($last_name) > 25) {
		exit("Фамилия должна быть не меньше 3х символов и не больше 25");
	}
	if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i",$email)) {
		exit ("Почта неверная");
	}
	$login = mysql_real_escape_string($login);
	$first_name = mysql_real_escape_string($first_name);
	$email = mysql_real_escape_string($email);
	$last_name = mysql_real_escape_string($last_name);
	$password = mysql_real_escape_string($password);
	
	$login = htmlspecialchars($login);
	$first_name = htmlspecialchars($first_name);
	$email = htmlspecialchars($email);
	$last_name = htmlspecialchars($last_name);
	$password = htmlspecialchars($password);
	
	$login = trim($login);
	$first_name = trim($first_name);
	$email = trim($email);
	$last_name = trim($last_name);
	$password = trim($password);
	
	
	$first_name = ucfirst($first_name);
	$last_name = ucfirst($last_name);
	$q = mysql_query("SELECT login FROM users WHERE login='$login'",$db) or die(mysql_error());
	$r = mysql_fetch_array($q);
	if(!empty($r['login'])) {
		exit("Такой логин уже есть");
	} 
	
	$q2 = mysql_query("SELECT email FROM users WHERE email='$email'",$db) or die(mysql_error());
	$r2 = mysql_fetch_array($q2);
	if(!empty($r2['email'])) {
		exit("Такой email уже есть");
	}
	$password = md5($password);
	$password = strrev($password);	
    $password = $password."ygtr7ur56378238";
	
	$date = time();
	
	$save_user = mysql_query("INSERT INTO users (login, email, password, first_name, last_name, sex, date) VALUES('$login','$email','$password','$last_name','$last_name','$sex', '$date')",$db);

	if($save_user==true)
	{
		header("Location: ../index.php");
	}
	else {
		header("Location: ../index.php?page=reg");
	}
?>