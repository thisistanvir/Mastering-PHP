<?php

/**
 * Factorial using recursive function
 */

function factorial($n)
{
   if ($n <= 1) {
      return 1;
   }
   return $n * factorial($n - 1);

   factorial($n);
}
echo factorial(5);
