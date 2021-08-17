<?php
// Fibonacci Series
// 0 1 1 2 3 5 8 13 21 34 55 89 144

$veryold = 0;
$old = 1;
$new = 1;

for ($i = 0; $i < 10; $i++) {
   echo $veryold . " ";
   $veryold = $old;
   $old = $new;
   $new = $old + $veryold;
}

/**
 * Initial
 * v = 0
 * o = 1
 * n = 1
 * 
 * 1st loop
 * v = 1
 * o = 1
 * n = 2
 * 
 * 2nd loop
 * v = 1
 * o = 2
 * n = 3
 * 
 * 3rd loop
 * v = 2
 * o = 3
 * n = 5
 * 
 * 4th loop
 * v = 3
 * o = 5
 * n = 8
 */
