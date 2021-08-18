<?php
// Default value pass

function serve($foodType, $numberOfItems = "One cup") //optional parameters
{
   echo "{$numberOfItems} of {$foodType} has/have been served.";
}

serve("Coffee");
