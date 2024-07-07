<?php

// $words = ["pp", "hard", "hi", "subscribe", "pp", "hard", "subscribe", "pp"];
// $frequent = [];
// $counts = array_count_values($words); // Count occurrences of each word
// // var_dump($counts); // return the associative array with repeated word as key and total repeat count as number

// foreach ($counts as $word => $count) {
//     // echo $word . " -- " . $count . "\n";
//     if ($count > 1) { // Check if word count is greater than 1 (frequent)
//         $frequent[] = $word;
//     }
// }

// print_r($frequent);

$words = ["pp", "hard", "hi", "subscribe", "pp", "hard", "subscribe", "pp"];
$frequent = [];
$seen = []; // Store unique words encountered so far

foreach ($words as $word) {
    if (!in_array($word, $seen)) {
        $seen[] = $word; // Add the word to the seen list
    } else if (!in_array($word, $frequent)) { // Check if seen but not yet added as frequent
        $frequent[] = $word; // If seen before and not yet frequent, add it once
    }
}

print_r($frequent);
