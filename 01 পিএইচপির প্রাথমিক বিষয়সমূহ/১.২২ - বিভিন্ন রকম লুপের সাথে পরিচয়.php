<?php
// Loop

//for loop
for ($i = 1; $i <= 10; $i++) {
   echo $i;
   echo PHP_EOL;
}

echo "Odd Number \n";
for ($i = 1; $i <= 10; $i += 2) {
   echo $i;
   echo PHP_EOL;
}

echo "Loop star \n";
for ($i = 1; $i <= 10; $i++) {
   for ($j = 1; $j <= $i; $j++) {
      echo "*";
   }
   echo PHP_EOL;
}

// While loop
echo "While loop \n";

$i = 0;
while ($i < 10) {
   $i++;
   echo $i . PHP_EOL;
}


// Do While Loop
echo "Do While Loop \n";
$n = 0;
do {
   $n++;
   echo $n . PHP_EOL;
} while ($n < 10);


// Go to 
echo "Go To \n";
$i = 0;
a:
$i++;
echo $i . PHP_EOL;
if ($i < 10) goto a;
