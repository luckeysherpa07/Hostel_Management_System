<?php
    //$id= $_GET['id'];
    //$session_['id']= $id;
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
    		include('include/navbarforstudent.php');
    	?>

    <div class="wrapper">
	    <div class="row">
	        <div class="col s12 m6">
	          <div class="card blue-grey darken-1" align="center">
	            <div class="card-content white-text">
	              <span class="card-title">Welcome to the dashboard.</span>
	              <p>You Student.</p>
	            </div>
	          </div>
	        </div>
       
	    </div>
    </div>

    <?php
    	include('include/jsscript.php');
    ?>
    </body>
  </html>