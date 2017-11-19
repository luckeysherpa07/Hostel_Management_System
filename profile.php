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
    		include('include/navbar.php')
    	?>

    <div class="wrapper">
   		<?php 
    		$q = "SELECT * FROM `students` WHERE `id`='$id'";
    		$res = mysqli_query($con,$q);
	    	$row = mysqli_fetch_array($res);
    	?>
    	<div class="row">
    		<div class="col s9">
    			<h4 align="center">Student Profile</h4>	
    			<table class="bordered">
				    <thead>
				      <tr>
				          <th>Name</th>
				          <td><?php echo $row['firstname'] . " " . $row['lastname'] ?></td>
				      </tr>
				    </thead>

				    <tbody>
				      <tr>
				        <th>Reg No.</th>
				        <td><?php echo $row['regno']?></td>
				      </tr>

				      <tr>
				        <th>Room No.</th>
				        <td><?php echo $row['roomno']?></td>
				      </tr>

				      <tr>
				        <th>Gender</th>
				        <td><?php echo $row['gender']?></td>
				      </tr>

				      <tr>
				        <th>DOB</th>
				        <td><?php echo $row['dob']?></td>
				      </tr>

				      <tr>
				        <th>Contact No.</th>
				        <td><?php echo $row['contact']?></td>
				      </tr>

				      <tr>
				        <th>Email</th>
				        <td><?php echo $row['email']?></td>
				      </tr>

				      <tr>
				        <th>Address</th>
				        <td><?php echo $row['address']?></td>
				      </tr>

				      <tr>
				        <th>Enroll Date</th>
				        <td><?php echo $row['enrolldate']?></td>
				      </tr>

				      <tr>
				        <th>Fees</th>
				        <td><?php echo $row['fee']?></td>
				      </tr>

				    </tbody>
				</table>
    		</div>
    		<div class="col s3">
    			PHOTO
    			<img src="#">
    		</div>
    	</div>

	  <a class="waves-effect waves-light btn" href="studentedit.php?id=<?php echo $row['id'] ?>">Edit Student</a>
    </div>



      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      	$(document).ready(function() {
		    $('select').material_select();
		  });
      </script>

    </body>
  </html>