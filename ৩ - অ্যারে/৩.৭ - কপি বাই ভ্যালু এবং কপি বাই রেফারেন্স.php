<?php

/**
 * Copy by Value and Copy by Reference
 */

//copy by value / deep copy
$person = ['fname' => 'Hello', 'lname' => 'world'];

$newPerson = $person;
$newPerson['lname'] = 'Pluto';
print_r($person);
print_r($newPerson);

echo "******************** \n";
function printData($person)
{
  $person['lname'] .= ' Changed';
  print_r($person);
}
printData($person);
print_r($person);
echo "========================= \n";


// copy by reference / shallow copy
$example = [
  'fname' => 'Tanvir',
  'lname' => 'Ahmed',
];
$newExample = &$example;
$newExample['lname'] = 'Hossain';

print_r($example);
print_r($newExample);
echo "========================= \n";
function sampleData(&$example)
{
  $example['lname'] .= " Changed";
  print_r($example);
}

sampleData($example);
print_r($example);
