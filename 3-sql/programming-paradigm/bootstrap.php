<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/router/web.php";

routing($routes);

// echo "I am index";

// Path-based Routing
// "/" => views/home.php
// "/about-us" => views/about.php
// "/contact-us" => views/contact.php

// echo "<pre>";

// print_r($_SERVER);
// // REQUEST_URI, PATH_INFO

// echo "</pre>";

// echo $_SERVER["REQUEST_URI"];
// echo "<br>";
// echo $_SERVER["PATH_INFO"] ?? "/";

// $path = $_SERVER["PATH_INFO"] ?? "/";

// echo $path;
// if ($path === "/") {
//     $file = "./views/home.php";
// } else if ($path === "/about-us") {
//     $file = "./views/about.php";
// } else if ($path === "/contact") {
//     $file = "./views/contact.php";
// } else {
//     $file = "./views/not-found.php";
// }

// easy and newer method

// function view(string $file): bool 
// {
//     // echo __DIR__;
//     // echo "./views/". $file . ".php";
//     require_once __DIR__. "/views/". $file . ".php";
//     return true;    
// }


// echo $routes[$path] ?? "not-found";
// view($routes[$path] ?? "not-found");


// Procedural tha baw tha yrr a ya procedure tawe ko su htr tl, functions.php htalhmr
