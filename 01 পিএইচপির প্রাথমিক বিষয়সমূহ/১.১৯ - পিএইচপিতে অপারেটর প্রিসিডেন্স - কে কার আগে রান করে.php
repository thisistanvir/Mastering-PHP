<?php

// $f = false || true; // $f = (false || true) => true
// $e = false or true; // ($e = false) or true => false

$f = true && false; // $f = (true && false) => false
$e = true and false; // ($e = true) and false => true

var_dump($f, $e);
