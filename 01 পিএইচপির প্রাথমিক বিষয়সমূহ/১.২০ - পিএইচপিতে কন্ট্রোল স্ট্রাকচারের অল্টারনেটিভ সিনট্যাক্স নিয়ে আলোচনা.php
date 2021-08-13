<?php
//Alternative Syntax

$n = 12;

if ($n % 2 == 0) :
   echo "Even Number";
   echo PHP_EOL;
   echo "some text";
else :
   echo "Odd Number";
   echo PHP_EOL;
   echo "some text++";
endif;
echo PHP_EOL;


switch ($n % 2):
   case 0:
      echo "even Number";
      echo PHP_EOL;
      break;
   default:
      echo "odd Number";
      echo PHP_EOL;
endswitch;
