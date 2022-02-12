<?php

/**
 * Array Manipulation
 */

$students = [
  'rahim',
  'karim',
  'rafiq',
  123
];
$students[3] = "shafiq";

// remove fist element and return array.
// $student = array_shift($students);

// remove last element and return the array.
// $student = array_pop($students);

// added new element in last
// $student = array_push($students, "Tanvir");
// $students[] = "jamal";

// added new element in fist
// $student = array_unshift($students, 'Tanvir');


$n = count($students);
for ($i = 0; $i < $n; $i++) {
  echo $students[$i] . "\n";
};
