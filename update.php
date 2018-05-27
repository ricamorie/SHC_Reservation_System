<?php 
require ("avr_viewroom_2.php");
include_once ('config.php');

	$res_name = $_POST['res_name'];
	$_SESSION['res_name'] = $res_name;
	$query = "SELECT * FROM reservation WHERE res_name = '$res_name'";
	$result = mysqli_query($link, $query);
	$num_rows = mysqli_num_rows($result);

	echo "<br>";
?>

<html>
<head>
	<style type="text/css">
		table {
			border: 3px solid black;
			border-radius: 25px 25px 25px 25px;
			background-color: white;
			font-size: 25px;
		}
	</style>
</head>
<form action="update_edit.php" method="post">
<?php 
	print "<table border='1' align='center' cellpadding='3' style='background-color: white; width: ; font-size: 16px; '>";
	print "<tr class='notme'>";
	print "<th style='background-color: #B9B9B9; font-size: 19px;'>Reservation Date</th>";
	print "<th style='background-color: #B9B9B9; font-size: 19px;'>Reservation Venue</th>";
	print "<th style='background-color: #B9B9B9; font-size: 19px;'>Name</th>";
	print "<th style='background-color: #B9B9B9; font-size: 19px;'>Teacher</th>";
	print "<th style='background-color: #B9B9B9; font-size: 19px;'>Date<br>From</th>";
	print "<th style='background-color: #B9B9B9; font-size: 19px;'>Date<br>End</th>";
	print "<th style='background-color: #B9B9B9; font-size: 19px;'>Time<br>From</th>";
	print "<th style='background-color: #B9B9B9; font-size: 19px;'>Time<br>End</th>";
	print "<th style='background-color: #B9B9B9; font-size: 19px;'></th>";
	print "<th style='background-color: #B9B9B9; font-size: 19px;'>Remarks</th>";


	while ($a_row = mysqli_fetch_row($result)) {
		print "<tr>";
		foreach ($a_row as $field) {
			print "<td>";
			print $field;
			print "</td>";
		} print "</tr>";
	} print "</table <br> <br>";


 ?>

	<p align="center"><a href="update_edit.php" name="update" style="border-radius: 25px 25px 25px 25px; border: 2px solid black; padding: 9px; background-color: white; font-weight: bold; font-family: tahoma; font-size: 16px;">Update</a></p>
</form>
</html>