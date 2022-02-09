<?php

/**
 * Divide big function into small function 
 */

// function doTheLargerTask()
// {
//    echo "Step A done \n";
//    echo "Step B done \n";
//    echo "Step C done \n";
//    echo "Step D done \n";
// }
// doTheLargerTask();

function doTaskA()
{
   echo "Step A done \n";
}
function doTaskB()
{
   echo "Step B done \n";
}
function doTaskC()
{
   echo "Step C done \n";
}
function doTaskD()
{
   echo "Step D done \n";
}

function doTheLargerTask()
{
   doTaskA();
   doTaskB();
   doTaskC();
   doTaskD();
}
doTheLargerTask();
