<?php

/**
 * Discuss about empty value
 *
 */
$name = '';

if (isset($name)) {
  echo "Name is set";
} else {
  echo "Not Set";
}

echo "\n";

if (empty($name)) {
  echo "Name is Empty";
} else {
  echo "Not Empty";
}

echo "\n";

if (isset($name) && (is_numeric($name) || $name != '')) {
  echo "Name is set and it's not empty";
} else {
  echo "Name is either not set or it's empty";
}
