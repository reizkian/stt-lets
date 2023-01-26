<?php
include '../../db.php';

$target_dir = "../../../document/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$id=$_GET['id'];
$fileName = $_FILES["fileToUpload"]["name"];
echo "$id";
echo "$fileName";
$sql = "UPDATE program SET program_document='$fileName' WHERE id=$id";

$connection->query($sql);
$connection->close();

header("location:/new/admin/view/program/open_program.php?id=$id");
?>