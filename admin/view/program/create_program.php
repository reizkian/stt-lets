<?php
include '../../db.php';

$program_level = $_POST['program_level'];
$program_name = $_POST['program_name'];
$program_description = $_POST['program_description'];
$program_vision = $_POST['program_vision'];
$program_mission = $_POST['program_mission'];

$sql = "INSERT INTO program (program_level, program_name, program_description, program_vision, program_mission) VALUES ('$program_level','$program_name','$program_description','$program_vision', '$program_mission')";
$connection->query($sql);
$connection->close();

header("location:/new/admin/view/program/");