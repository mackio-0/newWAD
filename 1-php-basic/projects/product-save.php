<?php

echo "<pre>";
print_r($_POST);
print_r($_FILES);

$productPicSaveFolder = "product-photos";
$productInfoSaveFolder = "products";

if (!is_dir($productPicSaveFolder)) {
    mkdir($productPicSaveFolder, 0777);
}

if (!is_dir($productInfoSaveFolder)) {
    mkdir($productInfoSaveFolder, 0777);
}

// For product image FILE info
$ext = pathinfo($_FILES["product_image"]["name"])["extension"];
$productPicPath = $productPicSaveFolder . "/" . uniqid() .".". $ext;

if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $productPicPath)) {
    $_POST['product_photo'] = $productPicPath;
}
// print_r($_POST);

// encode in JSON so we can read easily
$json = json_encode($_POST);

// For product POST form info
$productInfoPath = $productInfoSaveFolder ."/". uniqid() ."_". $_POST["product_name"] .".json";

// Create the file in that path
touch($productInfoPath);

// Write the json data into that file
file_put_contents($productInfoPath, $json);

// Redirect to the original create page after the creation
header("Location:product.php");