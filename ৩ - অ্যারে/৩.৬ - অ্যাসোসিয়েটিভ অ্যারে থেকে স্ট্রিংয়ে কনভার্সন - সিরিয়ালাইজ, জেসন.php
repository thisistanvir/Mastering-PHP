<?php

/**
 * Associative Array to String Conversion - serialize, json
 */
$students = [
  'fname' => 'Jamal',
  'lname' => 'Ahmed',
  'age' => 15,
  'class' => 8,
  'section' => 'B'
];

print_r($students);
echo $students['fname'] . " " . $students['lname'] . "\n";
printf("%s %s \n", $students['fname'], $students['lname']);

// serialized
// echo join($students);
$serialized = serialize($students);
echo $serialized;
echo "\n";

$newStudents = unserialize($serialized);
print_r($newStudents);


//json
$jsonData = json_encode($students);
echo $jsonData;
echo "\n";

$studentsNew = json_decode($jsonData, true);
print_r($studentsNew);
