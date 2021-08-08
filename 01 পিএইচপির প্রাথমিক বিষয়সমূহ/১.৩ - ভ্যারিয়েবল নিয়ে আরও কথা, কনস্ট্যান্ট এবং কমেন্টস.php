<?php
// Value Change
$task = 'read';
echo $task;
echo "\n";

$task = 'write';
echo $task;
echo "\n";

// Define Constant
define('PI', 3.14159);
$constant = 'constant';


echo 'Value of PI is= {PI}';
echo "\n";
echo PI;
echo "\n";
echo constant('PI');
echo "\n";
echo 'Value of PI is= ' . PI;
echo "\n";
echo "Value of PI is= {$constant('PI')}";
