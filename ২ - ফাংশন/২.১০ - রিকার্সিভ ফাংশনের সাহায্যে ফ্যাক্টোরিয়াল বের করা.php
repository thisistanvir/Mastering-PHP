<?php
//Factorial using recursive

function factorial($n)
{
   if ($n <= 1) {
      return 1;
   }
   return $n * factorial($n - 1);
}
echo factorial(3);


// 5*4*3*2*1