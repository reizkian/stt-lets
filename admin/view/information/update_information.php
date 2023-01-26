<?php
include '../../db.php';

$id= $_GET["id"];
$author = $_POST["author"];
$title = $_POST["title"];
$content = $_POST["content"];
$created = $_POST["created"];

$sql = "UPDATE information SET author='$author', title='$title', content='$content', created='$created' WHERE id=$id";

$connection->query($sql);
$connection->close();
header("location:/new/admin/view/information/");