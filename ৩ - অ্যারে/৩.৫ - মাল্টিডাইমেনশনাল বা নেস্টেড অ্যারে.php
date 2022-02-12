<?php

/**
 * Multidimensional and Nested array.
 */

$foods = [
  'vegetables' => explode(', ', 'brinjal, brocolli, carrot,capsicam'),
  'fruits' => explode(', ', 'orange, banana, apple'),
  'drinks' => explode(', ', 'water, milk'),
];

// print_r($foods);

array_push($foods['drinks'], 'orange juice');

// print_r($foods);
// echo $foods['fruits'][1];


$sample = [
  'test' => [
    'test-again' => [
      'a',
      'b',
      'c'
    ]
  ]
];
// print_r($sample);
// echo $sample['test']['test-again'][1];


$sample2 = [
  [1, 2, 3],
  [11, 22, 33,],
  [111, 222, 333],
  [1111, 2222, 3333, [5, 6, 7]]
];
print_r($sample2);
echo $sample2[3][3][2];
