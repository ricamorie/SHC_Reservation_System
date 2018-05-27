<?php 
require("view.php");
include_once("config.php");

$res_date = $_POST['res_date'];
$res_venue = $_POST['viewing_room'];
$res_name = $_POST['namer'];
$res_teacher = $_POST['teacher'];
$res_date_start = $_POST['date_start'];
$res_date_end = $_POST['date_end'];
$res_time_start = $_POST['time_start'];
$res_time_end = $_POST['time_end'];
$res_equipment = $_POST[''];
$res_remarks = $_POST['remarks'];

	$query = "INSERT INTO reservation(res_date, res_venue, res_name, res_teacher, res_date_start, res_date_end, res_time_start, res_time_end, res_equipment, res_remarks) VALUES ('$res_date', '$res_venue', '$res_name', '$res_teacher', '$res_date_start', '$res_date_end', '$res_time_start', '$res_time_end', '$res_equipment', '$res_remarks')";

	mysqli_query($link,$query);
?>