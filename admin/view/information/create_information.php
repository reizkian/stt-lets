<?php
include '../../db.php';

$author = $_POST["author"];
$title = $_POST["title"];
$content = $_POST["content"];
$created = $_POST["created"];

$sql = "INSERT INTO information (author, title, content, created) VALUES ('$author','$title','$content','$created')";
$connection->query($sql);
$connection->close();

// echo $author;
// echo $title;

// echo "<p>" . nl2br(htmlentities($content, ENT_QUOTES, 'UTF-8')) . "</p>";

// echo nl2br($created, true);
header("location:/admin/view/information");