<?php
error_reporting(0);
if($_POST["user_register"]){
	include_once('Signup.php');
	$user = new Signupmanager;
	$user->verifyCredentials();
	
	}
else if($_POST["user_login"]){
	include_once('authenticate.php');
	$user = new loginManager;
	$user->verifyCredentials();
}
?>