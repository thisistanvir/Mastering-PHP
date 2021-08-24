<?php
// Scoping

//Global Scope
$name = "Earth";

function doSomething()
{
   // global $name;
   // echo $name;
   echo $GLOBALS['name'];
}
doSomething();

echo "\n";

// Local Scope
function doAnything()
{
   $name = "Tanvir";
   echo $name . "\n";
}
doAnything();


//Static Scope
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
