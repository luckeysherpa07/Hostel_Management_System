<?php 

	$con = mysqli_connect("localhost","root","");
	if(!@mysqli_select_db($con,"hmssite"))die("Database Error");

	session_start();
	$id = $_SESSION['id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$regno = $_POST['regno'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$enrolldate = $_POST['enrolldate'];
	$roomno = $_POST['roomno'];
	$fee = $_POST['fee'];

	$q = "UPDATE `students` SET `firstname`='$firstname',`lastname`='$lastname' , `username`='$username' , `password`='$password' ,`regno`='$regno',`roomno`='$roomno',`gender`='$gender',`dob`='$dob',`contact`='$contact',`email`='$email',`address`='$address',`enrolldate`='$enrolldate',`fee`='$fee' WHERE `id`='$id'";
	$res = mysqli_query($con,$q);

	header("Location: profileforstudent.php?id=$id");
?>
