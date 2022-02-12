<?php

/**
 * Array Utility Function
 * 
 * array reduce
 */

$number = [1, 2, 3, 4, 5];

function sum($oldValue, $newValue)
{
  if ($newValue % 2 == 0) {
    return $oldValue + $newValue;
  }
  return $oldValue;
}

$sum = array_reduce($number, 'sum');
echo $sum;
