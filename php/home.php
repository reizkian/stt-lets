<?php
include 'db.php';

function readEducationText($connection)
{
    $sql = "SELECT * FROM home";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        if ($row["identifier"] == "education-text") {
            echo $row['content'];
        }
    }
}