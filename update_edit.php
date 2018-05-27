<?php
require ("avr_viewroom_2.php");
include_once ('config.php');

	$res_name = $_SESSION['res_name'];
	$query = "SELECT * FROM reservation WHERE res_name = '$res_name'";
	$result = mysqli_query($link, $query);
	$num_rows = mysqli_num_rows($result);

	$row_array = mysqli_fetch_array($result);

?>

<h1>Update Reservation</h1>
<br>
<form action = "update_action.php" method="post" name = "updateform">
	<table border="1" align="center" style="background-color: white" cellpadding="5" cellspacing="5">
		<tr>
			<td>Name:</td>
			<td><input type="text" name="res_name" style="width: 300px;" value="<?php print "{$row_array['res_name']}" ?>" readonly></TD>
		</tr>

		<tr>
			<td>Teacher/Professor:</td>
			<td><input type="text" name="res_teacher" style="width: 300px;" value="<?php print "{$row_array['res_teacher']}" ?>" required></TD>
		</tr>

		<tr>
			<td>Reservation Venue:</td>
			<td><select name="viewing_room" id="selector" required>
					<option>Current Reservation: <b><?php print "{$row_array['res_venue']}" ?></b></option>
					<option> - - - - - - - - - - - - - - - - - - - - - - - </option>
					<option value="AVR - VR 1">AVR - Viewing Room 1</option>
					<option value="AVR - VR 2">AVR - Viewing Room 2</option>
					<option value="AVR - VR 3">AvR - Viewing Room 3</option>
					<option value="AVR - VR 4">AVR - Viewing Room 4</option>
					<option value="AVR - VR 5">AVR - Viewing Room 5</option>
					<option value="AVR - VR 6">AVR - Viewing Room 6</option>
					<option value="IBED - VR 1">IBED - Viewing Room 1</option>
					<option value="IBED - VR 2">IBED - Viewing Room 2</option>
					<option value="IBED - VR 3">IBED - Viewing Room 3</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Start Date:</td>
			<td><input type="date" name="res_date_start" style="width: 150px; font-family: 'times new roman'; font-size: 14px;" value="<?php print "{$row_array['res_date_start']}" ?>" required></TD>
		</tr>

		<tr>
			<td>End Date:</td>
			<td><input type="date" name="res_date_end" style="width: 150px; font-family: 'times new roman'; font-size: 14px;" value="<?php print "{$row_array['res_date_end']}" ?>" required></TD>
		</tr>

		<tr>
			<td>Start Time:</td>
			<td><input type="time" name="res_time_start" style="width: 150px; font-family: 'times new roman'; font-size: 14px;" value="<?php print "{$row_array['res_time_start']}" ?>" required></TD>
		</tr>

		<tr>
			<td>End Time:</td>
			<td><input type="time" name="res_time_end" style="width: 150px; font-family: 'times new roman'; font-size: 14px;" value="<?php print "{$row_array['res_time_end']}" ?>" required></TD>
		</tr>

		<tr>
			<td>Remarks:</td>
			<td><input type="text" name="res_remarks" style="width: 300px; height: 80px; padding: none; word-wrap: break-word;" value="<?php print "{$row_array['res_remarks']}" ?>" required></TD>
		</tr>

	</table>
	<p align="center"><input type="submit" name="update" value="Update" style="border-radius: 25px 25px 25px 25px; border: 2px solid black; padding: 9px; background-color: white; font-weight: bold; width: 170px; font-family: tahoma; font-size: 16px;"></p>
</form>
