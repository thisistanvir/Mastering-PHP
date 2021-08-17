<?php

$n = 11;

$result = ($n % 2 == 0) ? "A" : (($n % 2 == 1) ? "B" : "C");
echo $result;
echo PHP_EOL;

$result1 = (12 == $n) ? "Twelve" : ((10 == $n) ? "Ten" : ((13 == $n) ? "Thirteen" : "Unknown"));
echo $result1;
