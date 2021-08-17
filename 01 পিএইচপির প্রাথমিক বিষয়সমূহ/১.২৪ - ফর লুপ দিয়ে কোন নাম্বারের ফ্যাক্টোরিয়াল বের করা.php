<?php
// Factorial

$n = 3;
$factorial = 1;

for ($i = $n; $i >= 1; $i--) {
   // $factorial = $factorial * $i;
   $factorial *= $i;
}
printf("Factorial of %d is %d", $n, $factorial);
