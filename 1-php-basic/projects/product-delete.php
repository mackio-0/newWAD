<?php

// echo "<pre>";
// print_r($_GET);

$productInfoSaveFolder = "products";
$productInfoFile = $_GET["productInfoFile"];
$productPhoto = $_GET["product_photo"];     // alrady a path string to the photo

if(unlink($productInfoSaveFolder."/". $productInfoFile) && unlink($productPhoto)) {
    header("Location:product.php");
}