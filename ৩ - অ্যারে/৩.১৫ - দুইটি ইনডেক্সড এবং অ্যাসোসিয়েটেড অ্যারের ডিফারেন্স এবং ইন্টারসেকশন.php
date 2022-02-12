<?php

/**
 * Array differences
 * interaction
 */

$number1 = [1, 4, 3, 6, 54, 7, 23, 1, 2];
$number2 = [88, 3, 21, 3, 28, 1, 2, 7];

$fruits = ['a' => 'apple', 'b' => 'banana', 'o' => 'orange', 'p' => 'plum', 'd' => 'dates', 'c' => 'lemon'];
$fruits2 = ['d' => 'lemon', 'b' => 'banana', 'f' => 'grapes', 'c' => 'lemon'];


$common = array_intersect($number1, $number2);
$commonf = array_intersect($fruits, $fruits2);
// print_r($common);
// print_r($commonf);
$commonff = array_intersect_assoc($fruits, $fruits2);
// print_r($commonff);

$diff = array_diff($number1, $number2);
$difff = array_diff($fruits, $fruits2);
print_r($diff);
print_r($difff);
$diffff = array_diff_assoc($fruits, $fruits2);
print_r($diffff);
