<?php
include '../../db.php';

$id= $_GET["id"];
$program_level = $_POST['program_level'];
$program_name = $_POST['program_name'];
$program_description = $_POST['program_description'];
$program_vision = $_POST['program_vision'];
$program_mission = $_POST['program_mission'];

$sql = "UPDATE program SET program_level='$program_level', program_name='$program_name', program_description='$program_description', program_vision='$program_vision', program_mission='$program_mission' WHERE id=$id";
$connection->query($sql);
$connection->close();

header("location:/new/admin/view/program/");