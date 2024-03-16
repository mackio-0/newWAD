<?php

// print_r($_GET);

// Connection
$conn = mysqli_connect("localhost", "mkk", "asdffdsa", "wad_shop");

if (!$conn) {
    die("Connection Failed " . mysqli_connect_error());
}

// Get the id from GET
$id = $_GET['row_id'];

// SQL statement
$sql = "DELETE FROM products WHERE id = $id";

// SQL query
$query = mysqli_query($conn, $sql);

if ($query) {
    header("Location:index.php");
}