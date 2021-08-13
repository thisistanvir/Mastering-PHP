<?php
//Switch Issue
// It can be wrong results

$string = '8balls';

switch ($string) {
   case "9balls":
      echo "Nine Balls";
      break;
   case 8:
      echo 8;
      break;
   case "8balls":
      echo "Eight Balls";
}
echo "\n";

switch ($string) {
   case (string)"9balls":
      echo "Nine Balls";
      break;
   case (string)8:
      echo 8;
      break;
   case (string)"8balls":
      echo "Eight Balls";
}
