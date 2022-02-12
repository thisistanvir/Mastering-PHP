<?php

/**
 * Remove data from associative array.
 */

$person = [
  'fname' => 'Tanvir',
  'lname' => 'Ahamed',
];
print_r($person);

unset($person['lname']);
print_r($person);
