<?php
// Null coalesce Operator
// ??

$default_lat = 22.9;
$default_lon = 10.9;

$user_lat;

if (isset($user_lat)) {
   $lat = $user_lat;
} else {
   $lat = $default_lat;
}
echo $lat . "\n";

$lat = isset($user_lat) ? $user_lat : $default_lat;
echo $lat . "\n";


// Null coalesce Operator
// ??
$lat = $user_lat ?? $default_lat;
echo $lat;
