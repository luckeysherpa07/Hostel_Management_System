<?php
	$con = mysqli_connect("localhost","root","");
	if(!@mysqli_select_db($con,"hmssite"))die("Database Error");
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
    		include('include/navbar.php');
    	?>

    <div class="wrapper">
    	<?php 
    		$q = "SELECT * FROM `students` WHERE 1";
    		$res = mysqli_query($con,$q);
    		$n = mysqli_num_rows($res);
    	?>


	 <table class="bordered">
	    <thead>
	      <tr>
	          <th>S.No</th>
	          <th>Student Name</th>
	          <th>Reg. No.</th>
	          <th>Room No.</th>
	          <th>Gender</th>
	          <th>Contact No.</th>
	          <th>Fees</th>
	          <th>Enroll Date</th>
	          <th>Action</th>
	      </tr>
	    </thead>

	    <tbody>
		    <?php
	    		for($i=1;$i<=$n;$i++){
	    			$row = mysqli_fetch_array($res);
	    			$fullname = $row['firstname'] . " " . $row['lastname'];
		    ?>
			      <tr>
			        <td><?php echo $i ?></td>
			        <td><a href="profile.php?id=<?php echo $row['id'];?>"><?php echo $fullname;?></a></td>
			        <td><?php echo $row['regno'] ?></td>
			        <td><?php echo $row['roomno'] ?></td>
			        <td><?php echo $row['gender'] ?></td>
			        <td><?php echo $row['contact'] ?></td>
			        <td><?php echo $row['fee'] ?></td>
			        <td><?php echo $row['enrolldate'] ?></td>
			        <td>
			        	<a href='studentedit.php?id=<?php echo $row['id'];?>'>Edit</a> | 
			        	<a href="deletestudentaction.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
			        </td>
			      </tr>
			<?php
				}
			?>

	    </tbody>
	  </table>

	  <br>
	  <a class="waves-effect waves-light btn" href="addstudent.php">Add Student</a>

    </div>


    <?php
    	include('include/jsscript.php');
    ?>
    </body>
  </html>