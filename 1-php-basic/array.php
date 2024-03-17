<?php

system("clear");

// index array
// $arr = array("a", "b", "c", "d");
// $x = ["x", "y", "z"];


// assoc array, key => value
// $assoc = array(
//     "myName" => "MKK",
//     "myAge" => 25,
//     "myJob" => array("Student", "Developer"),
//     "gf" => "Wint Wint San",
//     "isHandsome" => true
// );

// echo array_search(25, $assoc);
// echo "\n";
// echo array_search("MKK", $assoc);
// echo "\n";

// echo array_key_exists("gf", $assoc);
// echo "\n";


// print_r(array_keys($assoc));
// print_r(array_values($assoc));

// $assoc = [
//     "myName" => "MKK",
//     "myAge" => 25,
//     "myJob" => array("Student", "Developer"),
//     "gf" => "Wint Wint San",
//     "isHandsome" => true
// ];

// print_r($assoc);
// print($assoc["myName"]);
// print($assoc["myAge"]);


// print("Hello");
// echo "\n";
// print_r($arr);
// print_r($x);

// echo $arr[0];
// echo "\n";
// echo $arr[1];

// // Array functions

// $arr = [];
// $arr[1] = "a";
// $arr[2] = "b";
// $arr[3] = "c";

// print_r($arr);

// $assocArr = [];

// $assocArr["name"] = "Mkk";
// $assocArr["age"] = 25;
// $assocArr["gender"] = "male";

// $arr = [];

// array_push($arr, "a");
// array_push($arr, "b");
// array_push($arr, "c");
// array_unshift($arr, "a");
// array_unshift($arr, "b");
// array_unshift($arr, "c");

// print_r($arr);

// $x = ["x", "y", "z"];

// echo array_pop($x);
// echo array_shift($x);
// echo "\n";

// print_r($x);


// $arr = ["a", "b", "c", "d", "e", "f"];
// 
// print_r(array_chunk($arr, 2));

// $array1 = array(
//     "color" => "red",
//     2,
//     4
// );
// $array2 = array(
//     "a",
//     "b",
//     "color" => "green",
//     "shape" => "trapezoid",
//     4
// );
// $result = array_merge($array1, $array2);
// print_r($result);

// result
// Array
// (
//     [color] => green
//     [0] => 2
//     [1] => 4
//     [2] => a
//     [3] => b
//     [shape] => trapezoid
//     [4] => 4
// )

// $a = [2, 4, 6, 8];

// echo "Array product : " . array_product($a);
// echo "\n";
// echo "Array sum : " . array_sum($a);
// echo "\n";

// $arr = ["a", "b", "c", "d", "e", "f"];

// echo $arr[array_rand($arr)];
// echo "\n";
// print_r(array_rand($arr, 3));

// $extracted = array_splice($arr, 1, 3);

// print_r($extracted);
// print_r($arr);

// echo $arr[0];
// echo current($arr);
// echo "\n";
// // echo $arr[count($arr) - 1];
// echo "\n";
// echo end($arr);
// echo "\n";
// echo current($arr);
// echo "\n";

// // .include() in js
// // similar is array_search(), for assoc value's key name of search value
// // and array_key_exits(), for assoc array key true false
// echo in_array("z", $arr);
// echo "\n";

// // array destructuring
// $info = ["coffee", "milk", "tea"];
// list($x, $y) = $info;
// echo $x;
// echo "\n";

// // generate a list of elements inside an array
// print_r(range(0, 100, 10));

// shuffle($arr);
// $r = array_reverse($arr);
// print_r($arr);
// print_r($r);

// $arr = ["a", "b", "c", "d", "e", "f", "a", "c", "d"];
// $arrUni = array_unique($arr);
// print_r($arrUni);

// // array to string
// echo join(" - ", $arr);
// echo "\n";
// // string to array
// print_r(explode(" ", "San Kyi Tar"));
// echo "\n:";

// $assoc = array(
//     "myName" => "MKK",
//     "myAge" => 25,
//     "myJob" => array("Student", "Developer"),
//     "gf" => "Wint Wint San",
//     "isHandsome" => true
// );

// echo array_search(25, $assoc);
// echo "\n";
// echo array_search("MKK", $assoc);
// echo "\n";

// echo array_key_exists("gf", $assoc);
// echo "\n";
 
// print_r(array_keys($assoc));
// print_r(array_values($assoc));


// array map, filter, reduce

$nums = [5, 13, 10, 2, 7];

// $twoxNums = array_map(fn($el) => $el * 2 ,$nums);
// $twoxNums = array_map(function($el) {
//     return $el * 2;
// }, $nums);

$filteredArr = array_filter($nums, fn($el) => $el <= 10);
// $reducedArr = array_reduce($nums, fn($pv, $cv) => $pv + $cv, 0);

// print_r($nums);
// print_r($twoxNums);
// print("Filtered - ");
print_r($filteredArr);
// print("Reduced - ");
// print_r($reducedArr);
// print("\n");


// JSON decode and encode
// $json = file_get_contents("https://jsonplaceholder.typicode.com/todos/1");

// // echo $json;
// // echo "\n";

// $assocJson = json_decode($json, true);
// print_r($assocJson);

// echo "\n";
// echo $assocJson["userId"];
// echo "\n";
// echo $assocJson["title"];
// echo "\n";


// $assoc = array(
//     "myName" => "MKK",
//     "myAge" => 25,
//     "myJob" => array("Student", "Developer"),
//     "gf" => "Wint Wint San",
//     "isHandsome" => true
// );

// echo json_encode($assoc);

// Predefined Variables

// print_r($GLOBALS);
// print_r($_SERVER);

// $GLOBALS["MY_NAME"] = "Minn Khant Ko";
// // print_r($GLOBALS);

// function run() {
//     return "My name is " . $GLOBALS["MY_NAME"] . ".";
// }

// echo run();