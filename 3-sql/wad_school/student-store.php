<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// print_r($_POST);
// echo phpinfo();
// die();

require_once "./db_connect.php";

// echo "<pre>";
// print_r($_POST);
// die();

$name = $_POST["name"];
$course_id = $_POST["course_id"];
$start_date = $_POST["start_date"];
$start_time = $_POST["start_time"];
$end_time = $_POST["end_time"];
$student_limit = $_POST["student_limit"];
$is_register_open = isset($_POST["is_register_open"]) ? $_POST["is_register_open"] : 0;

// SQL 

$sql = "INSERT INTO batches (name, course_id, start_date, start_time, end_time, is_register_open, student_limit) VALUES ('$name', $course_id, '$start_date', '$start_time', '$end_time', $is_register_open, $student_limit)";
// echo $sql;

// die();

$query = mysqli_query($conn, $sql);

// var_dump($query);

if ($query) {
    header("Location:batch-list.php");
}
