<?php 
require ("avr_viewroom_1.html");
include_once("config.php");

$query = "SELECT * FROM reservation";
$result = mysqli_query($link, $query);
$num_rows = mysqli_num_rows($result);

print "<table border='1' cellpadding='3' style='background-color: white; width: fixed; font-size: 16px; '>";
print "<tr class='notme'>";
print "<th style='background-color: #B9B9B9'>Reservation Date</th>";
print "<th style='background-color: #B9B9B9'>Reservation Venue</th>";
print "<th style='background-color: #B9B9B9'>Name</th>";
print "<th style='background-color: #B9B9B9'>Teacher/Professor</th>";
print "<th style='background-color: #B9B9B9'>Reserve<br>From</th>";
print "<th style='background-color: #B9B9B9'>Reserve<br>To</th>";
print "<th style='background-color: #B9B9B9'>Reservation Time<br>Start</th>";
print "<th style='background-color: #B9B9B9'>Reservation Time<br>End</th>";
print "<th style='background-color: #B9B9B9'>Equipments</th>";
print "<th style='background-color: #B9B9B9'>Remarks</th></tr>";
	while ($a_row = mysqli_fetch_row($result)) {
		print "<tr>";
		foreach ($a_row as $field) {
			print "<td>";
			print $field;
			print "</td>";
		} print "</tr>";
	} print "</table>";
 ?>