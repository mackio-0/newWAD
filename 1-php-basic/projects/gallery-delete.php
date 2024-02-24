<?php

// echo "<pre>";
// print_r($_GET);

$folderName = "photos";
$fileName = $_GET["file_name"];
// echo $fileName;

// var_dump(unlink($folderName."/".$fileName));

if (unlink($folderName."/".$fileName)) {
    header("Location:gallery.php");
}
