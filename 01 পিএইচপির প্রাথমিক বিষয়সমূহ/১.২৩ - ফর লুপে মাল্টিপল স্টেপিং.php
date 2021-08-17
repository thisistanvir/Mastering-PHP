<?php
// for loop stepping
for ($i = 0, $j = 10; $i < 10; $i++, $j--) {
   echo $i . " : " . $j;
   echo PHP_EOL;
}

echo PHP_EOL;
for ($i = 0; $i < 10; $i++) {
   echo $i . " : " . (10 - $i);
   echo PHP_EOL;
}
