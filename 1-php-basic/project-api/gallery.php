<?php

header("Content-Type:application/json");

// print_r(json_encode($_SERVER));
if ($_SERVER['REQUEST_METHOD'] != "GET") {
    $message = json_encode(["message" => "GET method only"]);
    die($message);
}

$photos = array_filter(scandir("photos"), fn ($el) => $el != "." && $el != "..");

echo json_encode(array_values($photos));
