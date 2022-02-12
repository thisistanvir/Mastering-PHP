<?php

/**
 * indexed and associated array sorting
 */

$fruits = ['a' => 'apple', 'b' => 'banana', 'o' => 'orange', 'p' => 'plum', 'd' => 'dates', 'c' => 'mango'];
$number = [12, 90, 34, 22, 45];

// sort($fruits);
// rsort($fruits);


// sort($number, SORT_STRING);

// asort($fruits);
// arsort($fruits);

// ksort($fruits);
// krsort($fruits);

// print_r($fruits);

$random = ['apple', 'Apple', 'banana', 'Banana', 'Pineapple'];
sort($random, SORT_STRING | SORT_FLAG_CASE);
print_r($random);
