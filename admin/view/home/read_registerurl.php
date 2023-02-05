<?php
include '../../db.php';

$sql = "SELECT * FROM home WHERE identifier='registration-url' ";
$result = $connection->query($sql);
$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    if ($row["identifier"] == "registration-url") {
        echo "<form method='POST' action='/new/admin/view/home/update_registerurl.php'>";
        echo "<input type='text' name='content' id='content' value='" . $row['content'] . "' required>";
        echo "<button type='submit'>save</button>";
        echo "</form>";
    } else {
        echo "<form method='POST' action='/new/admin/view/home/create_registerurl.php'>";
        echo "<input type='text' name='content' id='content' required>";
        echo "<button type='submit'>save</button>";
        echo "</form>";
    }
} else {
    echo "<form method='POST' action='/new/admin/view/home/create_registerurl.php'>";
    echo "<input type='text' name='content' id='content' required>";
    echo "<button type='submit'>save</button>";
    echo "</form>";
}

$connection->close();
