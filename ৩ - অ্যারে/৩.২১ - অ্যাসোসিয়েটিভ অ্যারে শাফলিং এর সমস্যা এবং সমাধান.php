<?php

/**
 * Associative Array shuffle
 */

$fruits = [
  'a' => 'Apple',
  'b' => 'Banana',
  'c' => 'Cherry',
  'd' => 'Dates'
];

// we loss the array key
// shuffle($fruits);
// print_r($fruits);

$key = array_rand($fruits);
// echo $fruits[$key];

$_fruits = $fruits;
shuffle($_fruits);
print_r($_fruits);
