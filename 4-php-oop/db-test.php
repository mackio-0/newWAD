<?php

echo "<pre>";

$serverName = "localhost";
$username = "mkk";
$password = "asdffdsa";
$dbname = "wad_school";

$conn = new mysqli($serverName, $username, $password, $dbname);
print_r($conn);

$conn->close();

print_r($conn);

// $sql = "SELECT * FROM courses"; 
// $query = $conn->query($sql);
// // print_r($query);

// // print_r($query->fetch_assoc());
// // print_r($query->fetch_assoc());

// // print_r($query->fetch_object());
// // print_r($query->fetch_object());

// $first = $query->fetch_object();
// print_r($first);
// echo $first->title;
// echo "<br>";
// echo $first->short;