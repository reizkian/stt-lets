<?php
include 'db.php';

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM user WHERE  username='$username'";
$result = $connection->query($sql);
$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    if ($password == $row["password"]) {
        header("location:/new/view/home");
        echo $row["username"];
        echo $row["password"];
    } else {
        header("location:/admin?notfound=1");
    }
} else {
    header("location:/admin?notfound=1");
}
