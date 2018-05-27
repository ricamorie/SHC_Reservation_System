<?php 
require ("avr_viewroom_2.php");
include_once("config.php");

$query = "SELECT res_date, res_teacher, res_venue, res_date_start, res_time_start, res_time_end, res_remarks FROM reservation ORDER BY res_date";
$result = mysqli_query($link, $query);
$num_rows = mysqli_num_rows($result);

print "<table border='1' align='center' cellpadding='3' style='background-color: white; width: ; font-size: 16px; '>";
print "<tr class='notme'>";
print "<th style='background-color: #B9B9B9; font-size: 19px;'>Reservation Date</th>";
print "<th style='background-color: #B9B9B9; font-size: 19px;'>Teacher</th>";
print "<th style='background-color: #B9B9B9; font-size: 19px;'>Reservation Venue</th>";
print "<th style='background-color: #B9B9B9; font-size: 19px;'>Date<br>From</th>";
print "<th style='background-color: #B9B9B9; font-size: 19px;'>Time<br>From</th>";
print "<th style='background-color: #B9B9B9; font-size: 19px;'>Time<br>End</th>";
print "<th style='background-color: #B9B9B9; font-size: 19px;'>Remarks</th>";

	while ($a_row = mysqli_fetch_row($result)) {
		print "<tr>";
		foreach ($a_row as $field) {
			print "<td>";
			print $field;
			print "</td>";
		} print "</tr>";
	} print "</table>";

 ?>

 <h1 style=" margin-top: 10px; width: 15%;">
	<a href="avr_viewroom_1.php" style="padding: 9px; text-align: center; margin: 0 auto 0 auto; font-family: tahoma; font-size: 18px; font-weight: bold;">Go Back</a>
</h1>