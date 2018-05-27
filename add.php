<?php 
require("avr_viewroom_2.php");
include_once("config.php");

$res_date = $_POST['res_date'];
$res_venue = $_POST['viewing_room'];
$res_name = $_POST['namer'];
$res_teacher = $_POST['teacher'];
$res_date_start = $_POST['date_start'];
$res_date_end = $_POST['date_end'];
$res_time_start = $_POST['time_start'];
$res_time_end = $_POST['time_end'];

$res_remarks = $_POST['remarks'];

	$query = "INSERT INTO reservation(res_date, res_venue, res_name, res_teacher, res_date_start, res_date_end, res_time_start, res_time_end, res_remarks) VALUES ('$res_date', '$res_venue', '$res_name', '$res_teacher', '$res_date_start', '$res_date_end', '$res_time_start', '$res_time_end', '$res_remarks')";

	mysqli_query($link,$query);

	echo "<br>";
	print "<h1 style='margin-top: 80px;'>1 record has been added.</h1> <br>";
?>
<h1 style=" margin-top: 10px; width: 15%;">
	<a href="view.php" style="padding: 9px; text-align: center; margin: 0 auto 0 auto; font-family: tahoma; font-size: 18px; font-weight: bold;">View Records</a>
</h1>
<br>

<h1 style="width: 15%;">
	<a href="avr_viewroom_1.php" style="padding: 9px; text-align: center; margin: 0 auto 0 auto; font-family: tahoma; font-size: 18px; font-weight: bold;">Go Back</a>
</h1>