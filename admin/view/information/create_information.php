<?php
include '../../db.php';

$author = $_POST["author"];
$title = $_POST["title"];
$content = $_POST["content"];
$created = $_POST["created"];

$sql = "INSERT INTO information (author, title, content, created) VALUES ('$author','$title','$content','$created')";
$connection->query($sql);
$connection->close();

header("location:/new/view/information");