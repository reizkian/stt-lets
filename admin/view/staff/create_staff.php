<?php
include '../../db.php';

$name = $_POST["name"];
$nidn = $_POST["nidn"];
$role = $_POST["role"];
$position = $_POST["position"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$data_order = $_POST["data_order"];
$file_name = "staff0.png";

$sql = "INSERT INTO staff (staff_name, staff_role, email, staff_subject, data_order, file_name, staff_position, staff_nidn) VALUES ('$name','$role','$email','$subject', '$data_order', '$file_name', '$position', '$nidn')";
$connection->query($sql);
$connection->close();

header("location:/new/admin/view/staff/");