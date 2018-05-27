<?php 
include_once ('config.php');
include ('avr_viewroom_2.php');

	$res_venue = $_SESSION['viewing_room'];	
	$query = "DELETE FROM reservation WHERE res_venue = '$res_venue'";
	mysqli_query($link, $query);
	

	echo "<br>";
	print "<h1 style='margin-top: 80px;'>Record has been deleted</h1> <br>";
?>

<h1 style="width: 15%;">
	<a href="avr_viewroom_1.php" style="padding: 9px; text-align: center; margin: 0 auto 0 auto; font-family: tahoma; font-size: 18px; font-weight: bold;">Go Back</a>
</h1>