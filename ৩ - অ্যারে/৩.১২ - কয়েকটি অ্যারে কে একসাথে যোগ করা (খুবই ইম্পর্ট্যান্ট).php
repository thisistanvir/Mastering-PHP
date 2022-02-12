<?php

/**
 * marge the array
 */

$fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];
$random = ['a' => 12, 'b' => 13, 'c' => 35, 'd' => 40, 'e' => 50, 'f' => 30, 12 => 40, 'g' => 10];


$newFruits1 = array_slice($fruits, 0, 2, true);
$newFruits2 = array_slice($fruits, 4, null, true);

$newFruits = array_merge($newFruits1, $newFruits2);
$newFruitsPlus = $newFruits1 + $newFruits2; // have to preserve offset
// print_r($newFruitsPlus);


// $randomData = array_splice($random, 1, 3, array('h' => 10, 'i' => '40'));
// print_r($randomData);
// print_r($random);

//right way

$r1 = array_slice($random, 1, 3, true);
$r2 = array_slice($random, 6, null, true);
$r3 = array('h' => 10, 'i' => '40');

// $randomDataCorrectWay = array_merge($r1, $r2, $r3);
$randomDataCorrectWay = $r1 + $r2 + $r3;

print_r($randomDataCorrectWay);
