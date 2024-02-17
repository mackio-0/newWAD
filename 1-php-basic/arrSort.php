<?php

// $randArr = ["apple", "mango", "b", "f", 1, 1.2, 2, "+" ];
// // sort($randArr);
// rsort($randArr);
// print_r($randArr);

$assoc = [
    "myName" => "MKK",
    "myAge" => 25,
    "myJob" => "developer",
    "gf" => "Wint Wint San",
    "isHandsome" => "yes"
];

// asort($assoc);
// ksort($assoc);
// arsort($assoc);
krsort($assoc);
print_r($assoc);