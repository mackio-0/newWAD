<?php

require_once "./db_connect.php";

$id = $_POST["row_id"];
$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$sql = "UPDATE products SET name = '$name', price = $price, stock = $stock WHERE id = $id";
// echo $sql;  // *** always check SQL UPDATE statement before executing query

$query = mysqli_query($conn, $sql);

if ($query) {
    header("Location:product-create-list.php");
}