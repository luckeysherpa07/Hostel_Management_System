<?php
	session_start();
	$id = $_SESSION['id'];
?>
<nav>
	<div class="nav-wrapper">
	  	<a href="dashboardforstudent.php" class="brand-logo"> Hostel Management System</a>
	  	<ul id="nav-mobile" class="right hide-on-med-and-down">
	    	<li><a href="profileforstudent.php?id=<?php echo $id ?>">Profile</a></li>
	    	<li><a href="feesforstudent.php?id=<?php echo $id ?>">Fees</a></li>
	  	</ul>
	</div>
</nav>