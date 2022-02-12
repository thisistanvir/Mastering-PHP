<?php

/**
 * Associative Array
 * 
 * Key => value;
 */

$students = [
  '12' => 'kamal',
  '13' => 'karim',
  '14' => 'jalal'
];
// echo $students['13'];

$foods = [
  'vegetables' => 'brinjal, brocolli, carrot, capsicam',
  'fruits' => 'orange, banana, apple',
  'drinks' => 'water, milk',
];

// $foods['drinks'] = $foods['drinks'] . ", orange juice";
$foods['drinks'] .= ", orange juice";

// echo $foods['vegetables'];

// foreach ($foods as $key => $value) {
//   echo $key . "=>" . $value . "\n";
// }

$keys = array_keys($foods);
// print_r($keys);

// for ($i = 0; $i < count($keys); $i++) {
//   $key = $keys[$i];
//   echo $foods[$key] . "\n";
// }

$values = array_values($foods);
// print_r($value);
for ($i = 0; $i < count($values); $i++) {
  $value = $values[$i];
  echo $value . "\n";
}
