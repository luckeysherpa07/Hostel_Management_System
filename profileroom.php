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
    		$q = "SELECT * FROM `rooms` WHERE `id`='$id'";
    		$res = mysqli_query($con,$q);
	    	$row = mysqli_fetch_array($res);
	    	$roomforstudent = $row['roomno'];

				$r = "SELECT * FROM `students` WHERE `roomno`='$roomforstudent'";
	    		$res2 = mysqli_query($con,$r);
	    		$m = mysqli_num_rows($res2); 
    	?>
    	<div class="row">
    		<div class="col s9">
    			<h4 align="center">Room Details</h4>	
    			<table class="bordered">
				    <thead>
				      <tr>
				          <th>Room No.</th>
				          <td><?php echo $row['roomno'] ?></td>
				      </tr>
				    </thead>

				    <tbody>
				      <tr>
				        <th>Seater</th>
				        <td><?php echo $row['seater']?></td>
				      </tr>

				      <tr>
				        <th>Seats Taken</th>
				        <td><?php echo $m; ?></td>
				      </tr>

				      <tr>
				        <th>Cost</th>
				        <td><?php echo $row['cost']?></td>
				      </tr>

				      <tr>
				        <th>Name Student</th>
				        <td>
					          <ol>
						          	<?php 
							          	for($j=1;$j<=$m;$j++){
						    				$row2 = mysqli_fetch_array($res2);
						    				$fullname = $row2['firstname'] . " " . $row2['lastname'];
						          	?>
					          			<li><a href="profile.php?id=<?php echo $row2['id'] ?>"> <?php echo $fullname; ?></a></li>
					          		<?php
					          			}
					          		?>
					          </ol>
				        </td>
				      </tr>

				    </tbody>
				</table>
    		</div>
    		<div class="col s3">
    			PHOTO
    			<img src="#">
    		</div>
    	</div>

	  <a class="waves-effect waves-light btn" href="addstudent.php?id=<?php echo $row['id'] ?>">Add Student</a>
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