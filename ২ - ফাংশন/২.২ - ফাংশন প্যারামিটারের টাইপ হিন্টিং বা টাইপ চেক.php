<?php

//Factorial Function

function factorial(int $n) //typing hint for php 7.x
{
   //strict for number for old version php
   // if (gettype($n) != "integer") {
   //    return "Invalid";
   // }

   $factorial = 1;
   for ($i = $n; $i >= 1; $i--) {
      //$factorial = $factorial * $i; 
      $factorial *= $i;
   }
   return $factorial;
}

$x = 3;
echo "Factorial of {$x} is " . factorial($x);
