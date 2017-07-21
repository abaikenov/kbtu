<?php
$a = 17;
$b = 14;

list($a, $b) = [$b, $a];

echo "A = " . $a . PHP_EOL;
echo "B = " . $b . PHP_EOL;
