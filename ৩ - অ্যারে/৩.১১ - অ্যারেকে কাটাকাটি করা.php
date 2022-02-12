<?php

/**
 * extract some value removing from original array.
 * insert new data
 */

$fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];

// $someFruits = array_splice($fruits, 2, 2);

$newFruits = ['jackfruit', 'tamarind', 'pineapple'];

$someFruits = array_splice($fruits, 2, 2, $newFruits);

print_r($someFruits);
print_r($fruits);
