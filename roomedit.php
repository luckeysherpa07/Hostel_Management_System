<?php
	$con = mysqli_connect("localhost","root","");
	if(!@mysqli_select_db($con,"hmssite"))die("Database Error");

	session_start();
	$id=$_GET['id'];
	$_SESSION['id'] = $id;
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
    		$q = "SELECT * FROM `rooms` WHERE id='$id'";
    		$res = mysqli_query($con,$q);
	    	$row = mysqli_fetch_array($res);
	    	$roomforstudent = $row['roomno'];

				$r = "SELECT * FROM `students` WHERE `roomno`='$roomforstudent'";
	    		$res2 = mysqli_query($con,$r);
	    		$m = mysqli_num_rows($res2); 
    	?>
    <div align="center"><h3>Edit Room</h3></div>
		  <div class="row">
		    <form class="col s12" action="editroomaction.php" method="post">
		      <div class="row">
		        <div class="input-field col s12">
		          <input name="roomno" id="roomno" type="text" class="validate" value="<?php echo $row['roomno']?>">
		          <label for="roomno">Room No.</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input name="seater" id="seater" type="text" class="validate" value="<?php echo $row['seater']?>">
		          <label for="seater">Seater</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input name="cost" id="cost" type="text" class="validate" value="<?php echo $row['cost']?>">
		          <label for="cost">Cost</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <h6>Students</h6>
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
		        </div>
		      </div>

		      <br>
			  <input class="waves-effect waves-light btn" type="submit" name="submit">
		    	
		    </form>
		  </div>
    </div>



      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      	//Drop Down Select JS Code
      	$(document).ready(function() {
		    $('select').material_select();
		  });

      	//Date Picker JS Code
      	$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 15, // Creates a dropdown of 15 years to control year,
		    today: 'Today',
		    clear: 'Clear',
		    close: 'Ok',
		    closeOnSelect: false // Close upon selecting a date,
		  });
      </script>

    </body>
  </html>