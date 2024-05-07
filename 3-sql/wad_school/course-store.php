<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// echo phpinfo();

echo "<pre>";
require_once "./db_connect.php";

// print_r($_POST);
// die();


$title = $_POST["title"];
$short = $_POST["short"];
$fee = $_POST["fee"];

// SQL 

$sql = "INSERT INTO courses (title, short, fee) VALUES ('$title', '$short', $fee)";
// echo $sql;

$query = mysqli_query($conn, $sql);

// var_dump($query);

if ($query) {
    header("Location:course-create-list.php");
}
