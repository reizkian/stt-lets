<?php
include '../../db.php';

$name = $_POST["name"];
$role = $_POST["role"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$data_order = $_POST["data_order"];
$file_name = "staff0.png";

$sql = "INSERT INTO staff (staff_name, staff_role, email, staff_subject, data_order, file_name) VALUES ('$name','$role','$email','$subject', '$data_order', '$file_name')";
$connection->query($sql);
$connection->close();

header("location:/admin/view/staff");