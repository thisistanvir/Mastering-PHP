<?php

/**
 * Type hinting
 * 
 * Determine the factorial function
 */

function factorial(int $n)
{
   // if(gettype($n) != 'integer'){
   //    return 'Invalid';
   // }
   $result = 1;
   for ($i = $n; $i > 1; $i--) {
      $result *= $i;
   }
   return $result;
}

$x = 5;

echo "Factorial of {$x} is " . factorial($x);
