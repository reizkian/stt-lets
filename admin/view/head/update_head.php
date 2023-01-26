<?php
include '../../db.php';

$id = $_GET["id"];
$head_name = $_POST["name"];
$head_role = $_POST["role"];
$head_message = $_POST["message"];

$sql = "UPDATE head SET head_name='$head_name', head_role='$head_role', head_message='$head_message' WHERE id=$id";

$connection->query($sql);
$connection->close();
header("location:/new/admin/view/head/");