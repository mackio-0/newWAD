<?php

header("Content-Type:application/json");

// print_r(json_encode($_SERVER));
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    $message = json_encode(["message" => "POST method only"]);
    die($message);
}

if (empty($_POST["amount"]) || empty($_POST["from_currency"]) || empty($_POST["to_currency"])) {
    $message = json_encode(["message" => "Reqired to fill all amount, from_currency and to_currency!!"]);
    die($message);
    // header("Location:index.php");
}

// echo json_encode($_POST);
$rateJSON = file_get_contents("http://forex.cbm.gov.mm/api/latest");
$rateArr = json_decode($rateJSON, true);
$rates = $rateArr["rates"];
// echo json_encode($rates);

$amount = $_POST["amount"];

$from = $_POST["from_currency"];
$fromRate = str_replace(",", "", $rates[$from]);
$to = $_POST["to_currency"];
$toRate = str_replace(",", "", $rates[$to]);
// echo $fromRate;

$result = round(($amount * $fromRate) / $toRate, 2);
// echo $result;

$_POST["result"] = $result . " " . $to;
echo json_encode($_POST);
