<?php
	session_start();
	session_destroy();
	echo "logout successful";
	/*$userType = $_COOKIE['userType'];
	$username = $_COOKIE['username'];
	$password = $_COOKIE['password'];
	setcookie('userType', $userType, time()-1);
	setcookie('username', $username, time()-1);
	setcookie('password', $password, time()-1);*/
	header("location: login.php");
?>