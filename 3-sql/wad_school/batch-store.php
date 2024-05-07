<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// print_r($_POST);
echo "<pre>";

require_once "./db_connect.php";

// echo phpinfo();
// die();

$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

// SQL 

$sql = "INSERT INTO products (name, price, stock) VALUES ('$name', $price, $stock)";
// echo $sql;

$query = mysqli_query($conn, $sql);

// var_dump($query);

if ($query) {
    header("Location:product-create-list.php");
}
