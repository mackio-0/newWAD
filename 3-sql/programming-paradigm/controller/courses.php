<?php

function index() {
    // $conn = mysqli_connect("localhost", "mkk", "asdffdsa", "wad_school");

    // $sql = "SELECT * FROM courses LIMIT 10";
    // $query = mysqli_query($conn, $sql);

    // $rows = [];
    // while($row = mysqli_fetch_assoc($query)) {
    //     array_push($rows, $row);
    // }

    // header("Content-Type: application/json");
    // echo json_encode($rows);

    // echo "<pre>";
    // print_r($rows);

    $rows = get("SELECT * FROM courses LIMIT 10");

    return view("courses/index", ["courses" => $rows]);
}

function store() {

}

function delete() {

}