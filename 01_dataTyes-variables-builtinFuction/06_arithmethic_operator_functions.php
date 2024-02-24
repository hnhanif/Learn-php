<?php
$num1 = 20;
$num2 = 10;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmethic operation</title>
</head>

<body>
    <h2>Basic Math</h2>
    <p><?= "$num1 + $num2 = " . $num1 + $num2 ?></p>
    <p><?= "$num1 - $num2 = " . $num1 - $num2 ?></p>
    <p><?= "$num1 * $num2 = " . $num1 * $num2 ?></p>
    <p><?= "$num1 / $num2 = " . $num1 / $num2 ?></p>
    <p><?= "$num1 % $num2 = " . $num1 % $num2 ?></p><!-- Reminder-->

    <h2>Assignment Operator</h2>
    <p><?= "$num1 += $num2 => " . $num1 += $num2 ?></p>
    <p><?= "$num1 -= $num2 => " . $num1 -= $num2 ?></p>
    <p><?= "$num1 *= $num2 => " . $num1 *= $num2 ?></p>
    <p><?= "$num1 /= $num2 => " . $num1 /= $num2 ?></p>
    <p><?= "$num1 %= $num2 => " . $num1 %= $num2 ?></p>

    <h2>Built in php function</h2>
    <p><?= "rand() -> get aribiatry value: " . rand() ?></p>
    <p><?= "getrandmax() -> always get max constant: " . getrandmax() ?></p>
    <p><?= "rand(1,10) -> range between 1 to 10: " . rand(1, 10) ?></p>
    <p><?= "round(5.3) -> below .5 is absolute value and .5 and higher or equal it's max possible integer: " . round(5.3) ?></p>
    <p><?= "round(5.5) -> below .5 is absolute value and .5 and higher or equal it's max possible integer: " . round(5.5) ?></p>
    <p><?= "Always round upper value: ceil(3.2) -> " . ceil(3.2) ?></p>
    <p><?= "Always round lower value: floor(3.2) -> " . floor(3.2) ?></p>
    <p><?= "Squrre root of 64 by -> sqrt(64): " . sqrt(64) ?></p>
    <p><?= "get pi value by -> pi(): " . pi() ?></p>
    <p><?= "get absolute value value by -> abs(-4.2): " . abs(-4.2) ?></p>
    <p><?= "max in max(1,2,3,10,4): " . max(1, 2, 3, 10, 4) ?></p>
    <p><?= "max in max([1,2,3,10,4]): " . max([1, 2, 3, 10, 4]) ?></p>
    <p><?= "min in min(1,2,3,10,4): " . min(1, 2, 3, 10, 4) ?></p>
    <p><?= "min in min([1,2,3,10,4]): " . min([1, 2, 3, 10, 4]) ?></p>
    <p><?= "number_format(float,decimal_places,decimal_separator,thousand_separtor) -> number_format(123567.443322) : ", number_format(123567.443322, 2, ".", ",") ?></p>


</body>

</html>