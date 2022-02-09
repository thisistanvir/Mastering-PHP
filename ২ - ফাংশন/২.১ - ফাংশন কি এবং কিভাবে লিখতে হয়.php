<?php

/**
 * What is function?
 * How function write?
 * 
 * encapsulation
 */

/**
 * Function definition
 * 
 * Determine if the argument is Even or Odd
 */
function isEven($n)
{ // parameter
   if ($n % 2 == 0) {
      return true;
   }
   return false;
}

$x = 10;

if (isEven($x)) { // arguments
   echo "{$x} is an Even Number";
} else {
   echo "{$x} is a Odd Number";
}
