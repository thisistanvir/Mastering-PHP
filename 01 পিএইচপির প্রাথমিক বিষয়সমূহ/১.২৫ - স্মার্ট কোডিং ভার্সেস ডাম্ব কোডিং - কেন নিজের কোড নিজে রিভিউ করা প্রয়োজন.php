<?php
<?php

// Primitive Data Type
/**
 * String
 * Integer
 * Double / Float
 * Boolean
 * Array
 * NULL
 * Object
 * Resource
 */

$name = 'Earth';
$uname = strtoupper($name);
echo "we are living on {$uname}\n";
printf("we are living on %s \n", $name);
printf("we are living on %s \n", strtoupper($name));

$fname = 'tanvir';
$lname = 'ahamed';
printf("His name is %s %s \n", $fname, $lname);
printf("His %sname is %s %s \n", 'full', $fname, $lname);


$planet1 = 'Mercury';
$planet2 = 'Jupiter';
echo "The smallest planet is " . $planet1 . " and the biggest planet is " . $planet2 . "\n";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2} \n";
printf("The smallest planet is %s and the biggest planet is %s", strtoupper($planet1), strtoupper($planet2));
