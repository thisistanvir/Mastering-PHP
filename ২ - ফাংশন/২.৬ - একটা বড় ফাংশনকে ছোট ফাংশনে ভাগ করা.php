<?php

// function doTheLargeTask()
// {
//    echo "Step A Done \n";
//    echo "Step B Done \n";
//    echo "Step C Done \n";
//    echo "Step D Done \n";
// }
// doTheLargeTask();

function doTaskA()
{
   echo "Step A Done \n";
}
function doTaskB()
{
   echo "Step B Done \n";
}
function doTaskC()
{
   echo "Step C Done \n";
}
function doTaskD()
{
   echo "Step D Done \n";
}

function doTheLargeTask()
{
   doTaskA();
   doTaskB();
   doTaskC();
   doTaskD();
}
doTheLargeTask();
