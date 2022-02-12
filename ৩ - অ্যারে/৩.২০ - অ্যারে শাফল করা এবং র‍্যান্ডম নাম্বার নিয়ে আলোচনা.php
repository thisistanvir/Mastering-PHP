<?php

/**
 * Array shuffle
 * 
 * random pick
 */

$numbers = range(40, 72);

$random = rand(0, 32);

echo $numbers[$random] . "\n";

// if ($numbers[$random] % 2 == 0) {
//   echo "Head";
// } else {
//   echo "Tail";
// }

shuffle($numbers);
echo $numbers[3];
