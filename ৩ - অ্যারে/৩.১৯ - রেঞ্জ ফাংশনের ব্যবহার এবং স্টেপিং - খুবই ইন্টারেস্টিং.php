<?php

/**
 * Range Function and Stepping
 */
// $numbers = [12, 13, 14, 15, 16, 17, 18, 19, 20];

// $numbers = [];

// for ($i = 12; $i <= 20; $i++) {
//   array_push($numbers, $i);
// }
// print_r($numbers);


// $numbers = range(11, 20, 2);
// print_r($numbers);


foreach (range(0, 50, 7) as $number) {
  if ($number > 0) {
    echo $number . "\n";
  }
}
print_r($number);
