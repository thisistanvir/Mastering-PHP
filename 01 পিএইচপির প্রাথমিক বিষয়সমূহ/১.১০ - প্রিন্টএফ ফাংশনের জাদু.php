<?php
$fname = 'isaac';
$mname = 'nothing';
$lname = 'newton';


printf('His name is %3$s, %1$s %2$s', $fname, $mname, $lname);
echo "\n";


printf('The binary equivalent of %1$d is %1$b', 12);
echo "\n";


$n = 123.126; //show 2 fraction number
printf('%.2f', $n);
echo "\n";


$n = 123; //0123
$m = 12; //0012
printf("%04d \n", $n);
printf("%04d \n", $m);


$n = 123.246; //0123.25
$m = 12.246; //0012.25
printf("%07.2f \n", $n);
printf("%07.2f \n", $m);
