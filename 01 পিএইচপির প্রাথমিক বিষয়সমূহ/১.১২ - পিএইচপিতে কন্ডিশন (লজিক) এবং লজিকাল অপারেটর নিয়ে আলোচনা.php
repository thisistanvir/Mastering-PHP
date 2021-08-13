<?php

/**
 * Logical Operators
 * ==
 * >
 * <
 * >=
 * <=
 * &&
 * ||
 */

// $n = 10;

// if ($n % 2 == 0) {
//    echo "$n is even number";
// } else {
//    echo "$n is odd number";
// }


$rahim = 100;
$karim = 900;

if ($rahim == $karim) {
   echo "Rahim and Karim has same amount of money";
} elseif ($rahim >= $karim) {
   echo "Rahim has more amount of money than karim";
} elseif ($rahim <= $karim) {
   echo "Karim has mare amount of money than Rahim";
} else {
   echo "We don't make any decision yet";
}
echo "\n";



$age = 13;
if ($age >= 13 && $age <= 19) {
   echo "This person is Teenager";
} else {
   echo "This person is not Teenager";
}
echo "\n";



$food = 'tuna';
if ('tuna' == $food || 'salmon' == $food) {
   echo "{$food} has Vitamin D";
} elseif ('apple' == $food) {
   echo "Apple doesn't contains Vitamin D";
} else {
   echo "We don't know if {$food} contains Vitamin D";
}
