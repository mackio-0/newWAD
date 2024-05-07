<?php

$conn = mysqli_connect("localhost", "mkk", "asdffdsa", "wad_school");

if (!$conn) {
    die("Connection Failed " . mysqli_connect_error());
}