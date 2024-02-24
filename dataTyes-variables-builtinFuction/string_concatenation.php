<?php
$firstName = "John";
$lastName = "Doe";

$fullName = $firstName . " " . $lastName; //in java we use + operator to connect string but here . (dot)
/**Fact about single and double quotation
 * In single Quotation ('') -> Can't parse varaible
 * In double Quotation ("") -> variable parse automatically including html tag as well
 */

$q1 = "Quotation sign insde string 'hello'";
$q2 = "Hey There \"Lora\", I hope you are doing well...";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Concatenation</title>
</head>

<body>
    <h1><?= $fullName ?></h1>
    <h2><?= "My first name is <i>$firstName</i>" ?></h2>
    <h3><?= 'My last name is weired $lastName' ?></h3>
    <h4><?= $q1 ?></h4>
    <h5><?= $q2 ?></h5>
</body>

</html>