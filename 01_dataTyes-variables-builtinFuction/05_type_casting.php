<?php

/**There are two type of casting:
 * ------------------------------
 * 1) implicit -> php compiler handle
 * 2) explicit -> we developer explicty cast
 */
$number1 = 10;
$number2 = 20;
$number3 = '50';

//implicit conversion
$result = $number1 + $number2;
$result2 = $number1 + $number3; // string + int if string has number then automatic cast happen. this case only for if first expression is integer.
$result3 = "30" + "5"; // if both string contains string number then they can implicit cast to int
$result4 = (int)$number3 + $number2; //here first expression is not integer that's why we got error.so for solve this we can use explict type cast
$result5 = 5 + true; // int+bol = int (true means 1, so 5+1 = 6)
$result6 = 6 + false; // int+bol = int (false means 0, so 6+0 = 6)
$result7 = 10 + null; // int + null = int

$result8 = 0 + true; // 0 + bol(true)=> 1 so, 0 + 1 = 1;
$result9 = 0 + false; // 0 + bol(false)=> 0 so, 0 + 0 = 0;
$result10 = (bool) 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Casting</title>
</head>

<body>
    <h3>Sum is : <?= $result ?></h3>
    <h3>Sum2 is : <?= $result2 ?></h3>
    <h3>Sum3 is : <?= $result3 ?></h3>
    <h3>Sum4 is : <?= $result4 ?></h3>
    <h3>Sum5 is : <?= $result5 ?></h3>
    <h3>Sum6 is : <?= $result6 ?></h3>
    <h3>Sum7 is : <?= $result7 ?></h3>
    <h3>Sum8 is : <?= $result8 ?></h3>
    <h3>Sum9 is : <?= $result9 ?></h3>
    <h3>expresion is : <?= (bool)"hello" ?></h3>
    <h3>expresion is : <?= (bool)33 ?></h3>
    <h3>expresion is : <?= var_dump((bool)"") ?></h3>
    <h3>expresion is : <?= var_dump((bool)0) ?></h3>
    <h3>expresion is : <?= (bool)1 ?></h3>

</body>

</html>