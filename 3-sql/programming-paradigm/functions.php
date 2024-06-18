<?php

function view(string $file, array $data = null): bool
{
    // echo __DIR__;
    // echo "./views/". $file . ".php";
    if (!is_null($data)) {
        // $data htal ka content ko variable a ny nae htote py 
        extract($data);
    }
    require_once __DIR__ . "/views/" . $file . ".php";
    return true;
}

function controller(string $fileFun): bool
{
    $arr = explode("@", $fileFun);
    // print_r($arr);

    $controllerFile = $arr[0];
    $controllerFunction = $arr[1];

    // echo $controllerFile;
    // echo "<br>";
    // echo $controllerFunction;

    require_once __DIR__ . "/controller/" . $controllerFile . ".php";

    call_user_func($controllerFunction);

    return true;
}

function routing($routes): void
{
    $path = $_SERVER["PATH_INFO"] ?? "/";

    $current = $routes[$path] ?? false;     // If there is no valid path, the PHP undefined array in routes warning will pop up so i placed false to catch the warning.
    // print $current;

    if ($current) {
        controller($current);
    } else {
        view("not-found");
    }
}


function asset(string $filePath): string
{

    $fullUrl = isset($_SERVER["HTTPS"]) ? "https" : "http" . "://" . $_SERVER["HTTP_HOST"] . "/" . ltrim($filePath, "/");

    return $fullUrl;
}

function url(string $filePath, array $data = null): string
{

    $fullUrl = isset($_SERVER["HTTPS"]) ? "https" : "http" . "://" . $_SERVER["HTTP_HOST"] . "/" . ltrim($filePath, "/") . (is_null($data) ? "" : "?" . http_build_query($data));

    return $fullUrl;
}


function template(string $name): void
{
    require_once __DIR__ . "/views/templates/" . $name . ".php";
}

// Die, Dump
function dd($data)
{
    echo '<div style="background-color: #121212; color: #ebebeb; line-height: 2; padding: 30px; border-radius: 10px; margin: 20px;">';
    echo "<pre>";
    print_r($data);
    echo '</div>';
    die();
}


//  DB functions

function connect(): object
{
    global $configs;

    return mysqli_connect($configs["db_host"], $configs["db_user"], $configs["db_password"], $configs["db_name"]);
}

function runQuery(string $sql): mixed
{
    $con = connect();
    $query = mysqli_query($con, $sql);

    return $query;
}

function first(string $sql): mixed
{
    $query = runQuery($sql);
    $row = mysqli_fetch_assoc($query);

    return $row;
}

function get(string $sql)
{
    $query = runQuery($sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $rows[] = $row;
    }

    return $rows;
}

// Redirect

function redirect(string $url): void
{
    header("Location:$url");
}
