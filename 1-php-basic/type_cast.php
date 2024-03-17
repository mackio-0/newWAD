<?php
system("clear");
// $weight = (string) 136.54;
// $weight = (int) 136.54;

// print($weight);
// print("\n");
// var_dump($weight);

// $car = (object) [
//     "id" => 12,
//     "model" => "Toyota Land Cruiser",
//     "brand" => "Toyota",
//     "type" =>  "diesel"
// ];

// var_dump($car);
// print($car["model"]);
// print($car->model);

function area(int $w, int $h):int {
    return $w * $h;
};

// print(area("a", "b"));
// print(area(10, 10));

function sum(array $arr):int {
    return array_sum($arr);
};

// print(sum(1,2,3));
// print(sum([1, 2, 3, 4]));


// gettype() settype()

$x = 3.12;
$y = "123jd";
$z = true;

settype($x, "float");
settype($y, "integer");
settype($z, "string");

echo $x;
echo "\n";
echo $y;
echo "\n";
echo $z;
echo "\n";

var_dump( 5 === "5");