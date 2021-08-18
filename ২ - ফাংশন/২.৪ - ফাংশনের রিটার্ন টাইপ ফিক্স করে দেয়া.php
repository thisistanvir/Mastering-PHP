<?php
// Return type fixed

//type hint
// fix return type
function sum(int $x, int $y, int $z): int
{
   return $x + $y + $z;
}

echo sum(5.3, 6, 7);
