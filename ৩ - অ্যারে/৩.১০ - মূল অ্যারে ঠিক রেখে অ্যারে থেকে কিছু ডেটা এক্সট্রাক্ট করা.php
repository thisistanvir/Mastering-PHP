<?php

/**
 * how to extract some data from array
 */

$fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];


// $someFruits = array_slice($fruits, 2, 2);
// $someFruits = array_slice($fruits, 2, -1);
// $someFruits = array_slice($fruits, -5, -1);
// $someFruits = array_slice($fruits, -5, 3);
// $someFruits = array_slice($fruits, 3, 2, true); // set index
// print_r($someFruits);

$random = ['a' => 12, 'b' => 13, 'c' => 35, 'd' => 40, 'e' => 50, 'f' => 30, 12 => 40, 'g' => 10];

// $randomData = array_slice($random, 5, 2, true);
// $randomData = array_slice($random, 2, 4);
// $randomData = array_slice($random, 5, -1);
$randomData = array_slice($random, -5, -1, true);
print_r($randomData);
