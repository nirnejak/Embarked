<?php
	
	include 'authFunctions.php';

	session_start();
	$user_name=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	validateUser($user_name, $password);
	
?>