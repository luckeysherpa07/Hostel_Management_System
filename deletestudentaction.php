<?php 

	$con = mysqli_connect("localhost","root","");
	if(!@mysqli_select_db($con,"hmssite"))die("Database Error");

	session_start();
	$id = $_GET['id'];

	$q = "DELETE FROM `students` WHERE `id`='$id'";
	$res = mysqli_query($con,$q);

	header("Location: students.php");




?>
