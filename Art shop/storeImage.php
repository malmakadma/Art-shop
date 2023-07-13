<?php
session_start();

$image = $_FILES["document"]["tmp_name"];
$targetPath = "uploads/" . basename($_FILES["document"]["name"]);
move_uploaded_file($image, $targetPath);

$_SESSION["Img"] = $targetPath;

header("location: userProfile.php");
?>
