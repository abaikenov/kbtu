<?php
$a = [
    8, 10, 3, 1, 4, 20, 12, 5, 6
];

// Сдвиг на X элементов
$x = 4;

// Направление: 1 - вправо, -1 - влево
$direction = 1;


function rotate(&$a, $x, $direction)
{
    if (1 === $direction) {
        while ($x--) {
            $b = array_pop($a);
            $a = array_reverse($a);
            array_push($a, $b);
            $a = array_reverse($a);
        }
    } else {
        while ($x--) {
            $a = array_reverse($a);
            $b = array_pop($a);
            $a = array_reverse($a);
            array_push($a, $b);
        }
    }
}

echo 'DIRECTION = '. $direction . PHP_EOL;
echo 'X = '. $x . PHP_EOL;
echo 'BEFORE = ' . implode(', ', $a) . PHP_EOL;
rotate($a, $x, $direction);
echo 'AFTER = ' . implode(', ', $a);