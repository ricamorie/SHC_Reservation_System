<?php 
include_once ('config.php');
include ('avr_viewroom_2.php');

	$res_venue = $_POST['viewing_room'];
	$query = "SELECT * FROM reservation WHERE res_venue = '$res_venue'";
	$result = mysqli_query($link, $query);
	$num_rows = mysqli_num_rows($result);

	echo "<br>";

	print "There are $num_rows records.";
	print "<table border = '1'>";

	while ($a_row = mysqli_fetch_row($result)) {
		print "<tr>";
		foreach ($a_row as $field) {
			print "<td>";
			print $field;
			print "</td>";
		} print "</tr>";
	} print "</table>";

 ?>