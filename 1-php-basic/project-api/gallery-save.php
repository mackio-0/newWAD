<?php

header("Content-Type:application/json");

// print_r(json_encode($_SERVER));
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    $message = json_encode(["message" => "POST method only"]);
    die($message);
}

if (empty($_FILES["photo"])) {
    $message = json_encode(["message" => "Reqired to upload a photo"]);
    die($message);
}

$saveFolder = "photos";

if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777);
}

$ext = pathinfo($_FILES["photo"]["name"])["extension"];
$saveFielPath = $saveFolder . "/" . uniqid() . "." . $ext;
// print($ext);

if (move_uploaded_file($_FILES["photo"]["tmp_name"], $saveFielPath)) {
    $message = json_encode(["message" => "Photo saved"]);
    die($message);
}
