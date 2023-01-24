<?php
include '../../db.php';

$id = $_GET['id'];
echo "$id";

$sql = "DELETE FROM staff WHERE id=$id";
$connection->query($sql);
$connection->close();

header("location:/new/admin/view/staff");