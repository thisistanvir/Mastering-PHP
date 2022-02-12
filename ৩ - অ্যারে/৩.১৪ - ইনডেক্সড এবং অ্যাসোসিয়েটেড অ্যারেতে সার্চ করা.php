<?php

/**
 * Array Search
 */

$fruits = ['a' => 'apple', 'b' => 'banana', 'o' => 'orange', 'p' => 'plum', 'd' => 'dates', 'c' => 'mango'];
$number = [12, 90, 34, 22, 45];

// find
if (in_array(22, $number)) {
  echo "22 is found \n";
}

// position find
$offset = array_search(22, $number);
echo $offset . "\n";

// key find
if (key_exists('o', $fruits)) {
  echo "key Exist \n";
}
