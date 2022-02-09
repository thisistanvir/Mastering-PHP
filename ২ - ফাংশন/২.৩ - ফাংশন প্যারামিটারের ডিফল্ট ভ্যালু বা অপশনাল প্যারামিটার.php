<?php

/**
 * Function parameter default value
 */

// function serve($foodType, $numberOfItem)
// {
//    echo "{$numberOfItem} of {$foodType} has/have been served.";
// };

// $f = "coffee";
// $n = "2 cups";

// serve($f, $n);

function serve($foodType='Coffee', $numberOfItem='1 cup')
{
   echo "{$numberOfItem} of {$foodType} has/have been served.";
};

// $f = "coffee";
// $n = "2 cups";

serve();
