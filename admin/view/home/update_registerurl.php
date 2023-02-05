<?php
include '../../db.php';

$content = $_POST["content"];
$sql = "UPDATE home set content='$content' where identifier='registration-url'";
$result = $connection->query($sql);
$connection->close();

header("location:/new/admin/view/home/");