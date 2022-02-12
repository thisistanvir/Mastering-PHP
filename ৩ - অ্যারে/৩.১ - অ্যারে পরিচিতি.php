<?php

/**
 * About Array
 */

// $students = array(
//   'rahim',
//   'karim',
//   'rafiq',
//   123
// );


$students = [
  'rahim',
  'karim',
  'rafiq',
  123
];

$n = count($students);
// for ($i = 0; $i < $n; $i++) {
//   echo $students[$i] . "\n";
// };

for ($i = $n - 1; $i >= 0; $i--) {
  echo $students[$i] . "\n";
}
