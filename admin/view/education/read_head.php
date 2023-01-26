<?php
include '../../db.php';

$sql = "SELECT * FROM head WHERE id=1";
$result = $connection->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<img src='../../../img/head.png' alt=''style='margin-bottom:2rem;'/>";
    echo "<form action='./education/update_image.php?file_name=head.png' method='POST' enctype='multipart/form-data'>";
    echo "Select image to upload (recomended size: 347x431 px)";
    echo "<span>" . $row['file_name'] . "</span>";
    echo "<input class='button-choose' type='file' name='fileToUpload' id='fileToUpload'>";
    echo "<input class='button-upload' type='submit' value='Upload Image' name='submit'>";
    echo "</form>";


    echo "<form class='head-form' method='POST' action='./education/update_head.php?id=1'>";

    echo "<label for='name'>Head Name</label>";
    echo "<input type='text' name='name' id='name' value='" . $row['head_name'] . "' required>";

    echo "<label for='role'>Head Role</label>";
    echo "<input type='text' name='role' id='role' value='" . $row['head_role'] . "' required>";

    echo "<label for='message'>Head Role</label>";
    echo "<textarea name='message' id='message' rows='6' required>" . $row['head_message'] . "</textarea>";

    echo "<button type='submit' style='margin-top:1rem'>save</button>";
    echo "</form>";

    echo "<hr>";

    echo "<img src='../../../img/s1.png' alt=''style='margin-bottom:2rem;'/>";
    echo "<form action='./education/update_image.php?file_name=s1.png' method='POST' enctype='multipart/form-data'>";
    echo "Select image to upload (recomended size: 347x431 px)";
    echo "<span>s1.png</span>";
    echo "<input class='button-choose' type='file' name='fileToUpload' id='fileToUpload'>";
    echo "<input class='button-upload' type='submit' value='Upload Image' name='submit'>";
    echo "</form>";

    echo "<hr>";

    echo "<img src='../../../img/s2.png' alt=''style='margin-bottom:2rem;'/>";
    echo "<form action='./education/update_image.php?file_name=s2.png' method='POST' enctype='multipart/form-data'>";
    echo "Select image to upload (recomended size: 347x431 px)";
    echo "<span>s2.png</span>";
    echo "<input class='button-choose' type='file' name='fileToUpload' id='fileToUpload'>";
    echo "<input class='button-upload' type='submit' value='Upload Image' name='submit'>";
    echo "</form>";

    echo "<hr>";

    echo "<img src='../../../img/s3.png' alt=''style='margin-bottom:2rem;'/>";
    echo "<form action='./education/update_image.php?file_name=s3.png' method='POST' enctype='multipart/form-data'>";
    echo "Select image to upload (recomended size: 347x431 px)";
    echo "<span>s3.png</span>";
    echo "<input class='button-choose' type='file' name='fileToUpload' id='fileToUpload'>";
    echo "<input class='button-upload' type='submit' value='Upload Image' name='submit'>";
    echo "</form>";
}
