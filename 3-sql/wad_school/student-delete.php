<?php

// print_r($_GET);

// Connection
require_once "./db_connect.php";

// Get the id from GET
$id = $_GET['row_id'];

// SQL statement
$sql = "DELETE FROM batches WHERE id = $id";

// SQL query
$query = mysqli_query($conn, $sql);

if ($query) {
    header("Location:batch-list.php");
}
