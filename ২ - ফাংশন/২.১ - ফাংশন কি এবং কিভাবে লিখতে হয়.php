<?php

/**
 * Determine is the argument is Even or Odd
 * 
 */

function isEven($n) //$n parameter
{
   if ($n % 2 == 0) {
      return true;
   }
   return false;
}


$x = 13;
if (isEven($x)) { //$x argument
   echo "{$x} is an Even Number";
} else {
   echo "{$x} is an Odd Number";
}
