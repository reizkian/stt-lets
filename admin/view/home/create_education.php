<?php
include '../../db.php';

$content = $_POST["content"];
$sql = "INSERT INTO home (identifier,content) values ('education-text','$content')";
$result = $connection->query($sql);
$connection->close();

echo $content;
header("location:/new/admin/view/home/");