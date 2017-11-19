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
    		include('include/navbar.php')
    	?>

    <div class="wrapper">
    	<?php 
    		$q = "SELECT * FROM `rooms` WHERE 1";
    		$res = mysqli_query($con,$q);
    		$n = mysqli_num_rows($res);

    	?>

	 <table class="bordered">
	    <thead>
	      <tr>
	          <th>S.No</th>
	          <th>Room No.</th>
	          <th>Seater</th>
	          <th>Seat Taken</th>
	          <th>Cost</th>
	          <th>Action</th>
	      </tr>
	    </thead>

	    <tbody>
		    <?php
	    		for($i=1;$i<=$n;$i++){
	    			$row = mysqli_fetch_array($res);
	    			$roomforstudent = $row['roomno'];


    				$r = "SELECT * FROM `students` WHERE `roomno`='$roomforstudent'";
		    		$res2 = mysqli_query($con,$r);
		    		$m = mysqli_num_rows($res2);


		    ?>
	      <tr>
	        <td><?php echo $i;?></td>
	        <td><a href="profileroom.php?id=<?php echo $row['id'];?>"><?php echo $row['roomno']; ?></a></td>
	        <td><?php echo $row['seater']; ?></td>
	        <td><?php echo $m; ?></td>
	        <td><?php echo $row['cost']; ?></td>
	        <td>
	        	<a href="roomedit.php?id=<?php echo $row['id'];?>">Edit</a>
	        </td>
	      </tr>
			<?php
				}
			?>

	    </tbody>
	  </table>
    </div>



      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>