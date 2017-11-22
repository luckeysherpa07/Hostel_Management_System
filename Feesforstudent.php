<?php
	$con = mysqli_connect("localhost","root","");
	if(!@mysqli_select_db($con,"hmssite"))die("Database Error");

	$id=$_GET['id'];

?>
<!DOCTYPE html>
  <html>
    <head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/main.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    	<?php 
    		include('include/navbarforstudent.php')
    	?>

    <div class="wrapper">
    	<?php 
    		$q = "SELECT * FROM `students` WHERE `id`='$id'";
    		$res = mysqli_query($con,$q);
	    	$row = mysqli_fetch_array($res);
    	?>
    	<h4 align="center">Student Fees Detail</h4>
    	<h5 align="center">Student Name: <?php echo $row['firstname']; ?></h5>
    	<h5 align="center">Room No: <?php echo $row['roomno']; ?></h5>

	 <table class="bordered">
	    <thead>
	      <tr>
	          <th>S.No</th>
	          <th>Month</th>
	          <th>Fees</th>
	          <th>Paid</th>
	          <th>Due</th>
	          <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<tr>
		    	<td>1</td>
		    	<td>Sep 2017</td>
		    	<td>4000</td>
		    	<td>3500</td>
		    	<td>500</td>
		    	<td><a href="#">Edit</a></td>
	    	</tr>
	    	<tr>
		    	<td>2</td>
		    	<td>Oct 2017</td>
		    	<td>4000</td>
		    	<td>3000</td>
		    	<td>1000</td>
		    	<td><a href="#">Edit</a></td>
	    	</tr>
	    	<tr>
		    	<td>2</td>
		    	<td>Nov 2017</td>
		    	<td>4000</td>
		    	<td>3500</td>
		    	<td>500</td>
		    	<td><a href="#">Edit</a></td>
	    	</tr>
	  </table>

	  <br>
	  <a class="waves-effect waves-light btn" href="addmonthforstudent.php">Add Month</a>

    </div>



      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>