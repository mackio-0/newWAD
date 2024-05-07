<?php

echo "<pre>";

$conn = mysqli_connect("localhost", "mkk", "asdffdsa", "wad_shop");

if (!$conn) {
    die("Connection Failed " . mysqli_connect_error());
}

// SQL statement as php string
$sql = "SELECT * FROM products";

// do the actual query with mysqli_query()
$query = mysqli_query($conn, $sql);

// Data fetching from database

while ($row = mysqli_fetch_assoc($query)) {
    print_r($row);
}

// show only one row wiht column name
// need to run it again and agin so "while loop"
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
// var_dump(mysqli_fetch_assoc($query));
