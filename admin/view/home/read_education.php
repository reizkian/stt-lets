<?php
include '../../db.php';

$sql = "SELECT * FROM home";
$result = $connection->query($sql);
$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    if($row["identifier"] == "education-text"){
        echo "<form method='POST' action='./home/update_education.php'>";
        echo "<textarea rows='8' name='content'>" . $row['content'] . "</textarea>";
        echo "<button type='submit'>save</button>";
        echo "</form>";
    }
}else{
    echo "<form method='POST' action='./home/create_education.php'>";
    echo "<textarea rows='8' name='content'></textarea>";
    echo "<button type='submit'>save</button>";
    echo "</form>";
}