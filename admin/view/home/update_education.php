<?php
include '../../db.php';

$content = $_POST["content"];
$sql = "UPDATE home set content='$content' where identifier='education-text'";
$result = $connection->query($sql);
$connection->close();

header("location:/new/admin/view/home/");