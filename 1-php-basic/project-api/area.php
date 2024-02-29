<?php

header("Content-Type:application/json");

// print_r(json_encode($_SERVER));
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    $message = json_encode(["message" => "POST method only"]);
    die($message);
}

if (empty($_POST["width"]) || empty($_POST["breadth"])) {
    $message = json_encode(["message" => "Reqired to fill both width and breadth!!"]);
    die($message);
    // header("Location:index.php");
}

$area = $_POST["width"] * $_POST["breadth"];
$_POST['area'] = $area . " sqft";

echo json_encode($_POST);
