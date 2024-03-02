<?php
function greeting($name)
{
    echo "Hello " . $name . " ! <br>";
}

greeting("samar");

function addAllNumbers(...$numbers)
{
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    echo "total: $total <br>";
}

addAllNumbers(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
