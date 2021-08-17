<?php
// Multiple Stepping

// for ($i = 0; $i < 100; $i += 7) {
//    echo $i . "\n";
// }

// for ($i = 0; $i < 100; $i++) {
//    if ($i % 7 == 0) echo $i . "\n";
// }

// for ($i = 0; $i < 100; $i++) {
//    if ($i % 7 == 0) echo $i . "\n";
//    if ($i % 11 == 0) echo $i . "\n";
// }

for ($i = 0, $j = 0; $i < 100; $i += 7, $j += 11) {
   echo $i . "\n";
   echo $j < 100 ? $j . "\n" : "";
}
