<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$addTwo = fn ($one, $two) => $one + $two;

echo $addTwo(10, 10) . "<br>";
$result = array_map(fn ($number) => $number + 3, $numbers);
print_r($result);
