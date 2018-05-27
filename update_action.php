<?php 
include_once ('config.php');
include ('avr_viewroom_2.php');

	$res_name = $_SESSION['res_name'];
	$res_teacher = $_POST['res_teacher'];
	$res_venue = $_POST['viewing_room'];
	$res_date_start = $_POST['res_date_start'];
	$res_date_end = $_POST['res_date_end'];
	$res_time_start = $_POST['res_time_start'];
	$res_time_end = $_POST['res_time_end'];
	$res_remarks = $_POST['res_remarks'];

	$query = "UPDATE reservation SET res_teacher = '$res_teacher', res_venue = '$res_venue', res_date_start ='$res_date_start', res_date_end = '$res_date_end', res_time_start = '$res_time_start', res_time_end = '$res_time_end', res_remarks = '$res_remarks' WHERE res_name = '$res_name'";
	mysqli_query($link, $query);
	

	echo "<br>";
	print "<h1 style='margin-top: 80px;'>Record has been updated.</h1> <br>";
?>

<h1 style="width: 15%;">
	<a href="avr_viewroom_1.php" style="padding: 9px; text-align: center; margin: 0 auto 0 auto; font-family: tahoma; font-size: 18px; font-weight: bold;">Go Back</a>
</h1>