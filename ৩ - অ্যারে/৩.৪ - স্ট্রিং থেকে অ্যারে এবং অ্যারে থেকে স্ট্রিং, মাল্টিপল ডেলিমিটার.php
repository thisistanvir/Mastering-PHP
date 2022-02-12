<?php

/**
 * Multiple delimeter
 */

$vegetables = 'brinjal, brocolli, carrot, capsicam';

$veg = explode(', ', $vegetables);

// var_dump($veg);
// echo $veg[1];

$vegString = join(', ', $veg);
// echo $vegString;

// Multiple Delimeter
$fruits = 'apple, orange, banana,mango, jackfruit';

$fruits = preg_split('/(, |,)/', $fruits);

print_r($fruits);
echo count($fruits);
