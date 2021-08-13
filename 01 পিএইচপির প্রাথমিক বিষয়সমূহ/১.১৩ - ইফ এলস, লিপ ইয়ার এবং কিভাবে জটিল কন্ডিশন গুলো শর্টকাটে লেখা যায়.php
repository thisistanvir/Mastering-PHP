<?php

/**
 * 1- Divisible by 4?
 * 2- Divisible by 100?
 * 3- Divisible by 400?
 */

$year = 2020;

//Readable Code
if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
   echo "{$year} is a leap year";
} elseif ($year % 4 == 0 && $year % 100 == 0) {
   echo "{$year} is not a leap year";
} elseif ($year % 4 == 0) {
   echo "{$year} is a leap year";
} else {
   echo "{$year} is not a leap year";
}

echo "\n";

//Short Code
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
   echo "{$year} is a leap year";
} else {
   echo "{$year} is not a leap year";
}
