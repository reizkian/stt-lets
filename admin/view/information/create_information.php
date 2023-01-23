<?php
include '../../db.php';

$author = $_POST["author"];
$title = $_POST["title"];
$content = $_POST["content"];
$created = $_POST["created"];

echo $author;
echo $title;

echo "<p>" . $content . "</p>";

echo nl2br($created, true);
// header("location:/admin/view/home");