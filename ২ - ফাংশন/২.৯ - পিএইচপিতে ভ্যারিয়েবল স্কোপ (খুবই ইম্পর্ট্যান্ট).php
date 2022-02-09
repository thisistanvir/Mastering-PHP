<?php

/**
 * Variable scope
 */

// global scope
$name = "Earth";
function doSomething()
{
   // global $name;
   // echo $name;
   echo $GLOBALS['name'];
}
// doSomething();

// local scope
function doAnything()
{
   // global $name1;
   $name1 = "Planet"; //local scope
   echo $name1;
}
// doAnything();
// echo $name1;

// static scope
function doExtra()
{
   static $i;
   $i = $i ?? 0;
   $i++;
   echo $i . "\n";
}
doExtra();
doExtra();
doExtra();
