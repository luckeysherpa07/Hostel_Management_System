<?php 

	$con = mysqli_connect("localhost","root","");
	if(!@mysqli_select_db($con,"hmssite"))die("Database Error");

	session_start();
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$q = "SELECT * FROM `admin` WHERE 1";
	$res = mysqli_query($con,$q);
	$row = mysqli_fetch_array($res);

	$r = "SELECT * FROM `students` WHERE 1";
	$resp = mysqli_query($con,$r);
	$n = mysqli_num_rows($resp);
	
	if($username== $row['username'] && $password==$row['password']){
		header("Location: dashboard.php");
		exit(0);
	}

	for($i=1;$i<=$n;$i++){
		$row2 = mysqli_fetch_array($resp);
		if($username==$row2['username'] && $password==$row2['password']){
			$_SESSION['id'] = $row2['id'];
			header("Location: dashboardforstudent.php?id=$id");
			exit(0);
		}
	}

	if($username!=$row['username'] && $password!=$row['password']){
		header("Location: login.php?error=yes");
	}

?>
