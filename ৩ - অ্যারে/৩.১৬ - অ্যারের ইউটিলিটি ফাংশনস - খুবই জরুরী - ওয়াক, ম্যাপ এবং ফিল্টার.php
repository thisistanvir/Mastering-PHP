<?php

/**
 * Array Utility function
 * 
 * Array walk
 * Array Map
 * Array filter
 */

$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

function square($n)
{
  printf("Square of %d is %d \n", $n, $n * $n);
}

function cube($n)
{
  return $n * $n * $n;
}

function even($number)
{
  return $number % 2 == 0;
}
function odd($number)
{
  return $number % 2 == 1;
}

// array_walk($number, 'square');
// $newArray = array_map('cube', $number);
// $evenNumbers = array_filter($number, 'even');
// $oddNumbers = array_filter($number, 'odd');

// print_r($evenNumbers);
// print_r($oddNumbers);

$person = ['sujon', 'emon', 'kamrul', 'selim', 'samim'];

function filterByS($name)
{
  return $name[0] == 's';
}

$newPerson = array_filter($person, 'filterByS');
print_r($newPerson);
