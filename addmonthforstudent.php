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
    <div align="center"><h3>Add Month</h3></div>
		  <div class="row">
		    <form class="col s12" action="addmonthforstudentaction.php" method="post">
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="month" id="month" type="text" class="validate">
		          <label for="month">Month</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="fees" id="fees" type="text" class="validate">
		          <label for="fees">Fees</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="paid" id="paid" type="text" class="validate">
		          <label for="paid">Paid</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="due" id="due" type="text" class="validate">
		          <label for="due">Due</label>
		        </div>
		      </div>
		      <div class="input-field col s12">
			    <select name="action" id="action">
			      <option value="" disabled selected>Action</option>
			      <option value="Paid">Paid</option>
			      <option value="Unpaid">Unpaid</option>
			    </select>
			  </div>

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