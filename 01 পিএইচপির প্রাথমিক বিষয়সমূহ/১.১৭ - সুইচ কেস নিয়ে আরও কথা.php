<?php
//Nested Switch

$n = 12;
$r = $n % 2;

switch ($r) {
   case 0:
      switch (true) {
         case $n > 0:
            echo "$n is positive Even Number";
            break;
         case $n < 0:
            echo "$n is negative Even Number";
            break;
      }
      break;
   default:
      switch (true) {
         case $n > 0:
            echo "$n is positive Odd Number";
            break;
         case $n < 0:
            echo "$n is negative Odd Number";
            break;
      }
}
echo "\n";


switch (true) {
   case 0 == $r && $n > 0:
      echo "$n is positive Even Number";
      break;
   case 1 == $r && $n > 0:
      echo "$n is positive Odd Number";
      break;
   case 0 == $r && $n < 0:
      echo "$n is negative Even Number";
      break;
   case -1 == $r && $n < 0:
      echo "$n is negative Odd Number";
}
