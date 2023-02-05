<?php
include '../../db.php';

$sql = "SELECT * FROM staff ORDER BY data_order";
$result = $connection->query($sql);

while($row = $result->fetch_assoc()){
    echo "<hr>";
    echo "<div class='staff'>";
    echo "<img src='/new/img/staff/" . $row['file_name'] ."' alt=''/>";
    echo "<div class='text'>";
    echo "<h3 class='staff-name'>" . $row['data_order']."# " .$row['staff_name'] . "</h3>";
    echo "<p>" . $row['staff_role']. "</p>";
    echo "<p>" . $row['email']. "</p>";
    echo $row['staff_position'] == "Dosen" ? "<p class='subject'>Mata Kuliah</p>" : "";
    echo "<p class='staff-subject'>" . $row['staff_subject']. "</p>";
    echo "<a class='update' btn btn-primary href='/new/admin/view/staff/open_staff.php?id=" . $row['id'] . "'role='button'>update</a>";
    echo "<a class='delete' btn btn-primary href='/new/admin/view/staff/delete_staff.php?id=" . $row['id'] . "'role='button'>delete</a>";
    echo "</div>";
    echo "</div>";
}

$connection->close();