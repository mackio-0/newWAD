<?php

// $randArr = ["apple", "mango", "b", "f", 1, 1.2, 2, "+" ];
// // sort($randArr);
// rsort($randArr);
// print_r($randArr);


// $assoc = [
//     "myName" => "MKK",
//     "myAge" => 25,
//     "myJob" => "developer",
//     "gf" => "Wint Wint San",
//     "isHandsome" => "yes"
// ];

// asort($assoc);
// // ksort($assoc);
// // arsort($assoc);
// // krsort($assoc);
// print_r($assoc);


// $items = array(
//     array("name" => "Apple", "price" => 1.25),
//     array("name" => "Orange", "price" => 0.75),
//     array("name" => "Banana", "price" => 1.00),
// );

// array_multisort($items, SORT_ASC);
// print_r($items);

// $items will now be sorted by name (ascending) and then by price (descending)


$a1 = array("Dog", "Cat");
$a2 = array("Fido", "Missy");
array_multisort($a1, SORT_ASC, $a2, SORT_ASC);
print_r($a1);
print_r($a2);
