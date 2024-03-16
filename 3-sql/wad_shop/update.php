<?php

$conn = mysqli_connect("localhost", "mkk", "asdffdsa", "wad_shop");

if (!$conn) {
    die("Connection failed " . mysqli_connect_error());
}

$id = $_POST["row_id"];
$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$sql = "UPDATE products SET name = '$name', price = $price, stock = $stock WHERE id = $id";
// echo $sql;  // *** always check SQL UPDATE statement before executing query

$query = mysqli_query($conn, $sql);

if ($query) {
    header("Location:index.php");
}