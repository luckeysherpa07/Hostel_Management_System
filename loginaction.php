<?php 
	session_start();
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	echo $username;
	echo $password;

	if($username=="admin" && $password=="admin"){
		header("Location: dashboard.php");
		exit(0);
	}else{
		header("Location: login.php?err_1=yes");
		exit();
	}
?>
