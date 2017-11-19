<?php 

	$con = mysqli_connect("localhost","root","");
	if(!@mysqli_select_db($con,"hmssite"))die("Database Error");

	session_start();
	$id = $_SESSION['id'];
	$roomno = $_POST['roomno'];
	$seater = $_POST['seater'];
	$cost = $_POST['cost'];

	$q = "UPDATE `rooms` SET `roomno`='$roomno',`seater`='$seater',`cost`='$cost' WHERE `id`='$id'";
	$res = mysqli_query($con,$q);

	header("Location: rooms.php");




?>
