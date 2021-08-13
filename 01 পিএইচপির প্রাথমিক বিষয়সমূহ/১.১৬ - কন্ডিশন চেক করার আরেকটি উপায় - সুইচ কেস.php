<?php
//Switch 

$n = 11;
$r = $n % 2;

switch ($r) {
   case 0:
      echo "{$n} is an Even Number \n";
      break;
   default:
      echo "{$n} is an Odd Number \n";
}


$color = 'black';
switch ($color) {
      /*case "red":
      echo "$color is our favorite color";
      break;
   case "green":
      echo "$color is our favorite color";
      break;*/
   case "red":
   case "green":
      echo ucwords("$color is our favorite color");
      break;
   case "blue":
      echo "$color is not our favorite color";
      break;
   default:
      echo "This color is Ok";
}
