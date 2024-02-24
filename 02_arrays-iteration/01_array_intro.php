<?php

/**
 * Creating Arrays:
 * ----------------
 * $numbers = array(1,2,3);
 * $numbers = [1,2,3]; ✔
 * 
 * Accessing Array Values:
 * -----------------------
 * echo $name[1]; // 2
 * 
 * 
 * die() function:
 * --------------
 * very useful when dealing with database.
 * it is literally terminate to show html content.
 */

function inspect($array)
{
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    echo "<br>";
}

$numbers = [1, 2, 3, 4];

// echo $numbers //-> ❌ not work in array
echo $numbers[1]; // -> ✅ but we can able to get indesx value 

echo "<br>";
print_r($numbers);
echo "<br>";

inspect($numbers);
inspect(["a", 'b', 'c', 'd', 'e']);

//add element to the array
$numbers[] = 5; //add at the last
$numbers[] = 'new'; //add at the last

//change value from specific position
$numbers[3] = "There go Four";
inspect($numbers);

//removing element
unset($numbers[2]); //index gone as well
inspect($numbers);

//to re arange index
$numbers = array_values($numbers);
inspect($numbers);

die("this program is done here.");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Array Basic</title>
</head>

<body>
    <h2>Hello</h2>
</body>

</html>