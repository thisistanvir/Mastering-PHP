<?php
$n = 10;
// $n++;

$m = $n++;
/**
 * $m = $n++;
 * $m = $n;
 * $n = $n + 1;
 */
echo $m, "\n", $n, "\n";


$number = 7;

$m1 = ++$number;
/**
 * $m = $number+1;
 * $number = $number+1;
 */

echo $m1, "\n", $number;
