<?php 

	$con = mysqli_connect("localhost","root","");
	if(!@mysqli_select_db($con,"hmssite"))die("Database Error");

	session_start();
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$regno = $_POST['regno'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$enrolldate = $_POST['enrolldate'];
	$roomno = $_POST['roomno'];
	$fee = $_POST['fee'];



	$q = "INSERT INTO `students`(`id`, `firstname`, `lastname`, `username` , `password` , `regno`, `roomno`, `gender`, `dob`, `contact`, `email`, `address`, `enrolldate`, `fee`) VALUES ('' , '$firstname' , '$lastname', '$username' , '$password' , '$regno' , '$roomno' , '$gender' , '$dob' , '$contact' , '$email' , '$address' , '$enrolldate' , '$fee')";
	$res = mysqli_query($con,$q);

	header("Location: students.php");




?>
