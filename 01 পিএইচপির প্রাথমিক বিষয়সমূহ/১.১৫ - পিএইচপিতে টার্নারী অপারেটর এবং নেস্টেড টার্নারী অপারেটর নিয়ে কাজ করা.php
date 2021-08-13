<?php

//Ternary Operator

$n = 10;

if (10 == $n) {
   echo "Ten";
} else if (12 == $n) {
   echo "Twelve";
} else {
   echo "A Number";
}
echo "\n";


// $numberInWord = (10 == $n) ? "Ten" : "A Number";
$numberInWord = (10 == $n) ? "Ten" : ((12 == $n) ? "Twelve" : "A Number");
echo $numberInWord;

echo "\n";

if ($n % 2 == 0) {
   echo "Even Number";
} else {
   echo "Odd Number";
}

echo "\n";

$result = ($n % 2 == 0) ? "Even Number" : "Odd Number";
echo $result;
