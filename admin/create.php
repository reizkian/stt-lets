<?php
    include './db.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    echo($username);
    // $sql = "insert into user (username, password) values ('$username', '$password')";

    // $connection->query($sql);
    // $connection->close();

    header("location: index.php")
?>