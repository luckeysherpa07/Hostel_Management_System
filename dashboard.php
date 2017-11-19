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
	    <div class="row">
	        <div class="col s12 m6">
	          <div class="card blue-grey darken-1">
	            <div class="card-content white-text">
	              <span class="card-title">Rooms</span>
	              <p>Details of the rooms are given.</p>
	              <h3 align="center">4 Rooms</h3>
	            </div>
	            <div class="card-action">
	              <a href="rooms.php">Visit Rooms</a>
	            </div>
	          </div>
	        </div>

	        <div class="col s12 m6">
	          <div class="card blue-grey darken-1">
	            <div class="card-content white-text">
	              <span class="card-title">Students</span>
	              <p>Details of the students are given.</p>
	              <h3 align="center">10 Students</h3>
	            </div>
	            <div class="card-action">
	              <a href="addstudent.php">Add Student</a>
	              <a href="students.php">Show Students Details</a>
	            </div>
	          </div>
	        </div>

	        
	    </div>
    </div>

    <?php
    //	include('include/jsscript.php');
    ?>
    </body>
  </html>