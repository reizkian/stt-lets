<?php
include '../../db.php';

$id = $_GET["id"];
$name = $_POST["name"];
$role = $_POST["role"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$data_order = $_POST["data_order"];
$file_name = "staff0.png";

$sql = "UPDATE staff SET staff_name='$name', staff_role='$role', email='$email', staff_subject='$subject', data_order='$data_order' WHERE id=$id";

$connection->query($sql);
$connection->close();
header("location:/admin/view/staff");