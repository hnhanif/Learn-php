<?php

/**
 * Variable Rules
 * --------------
 * Prefixed with $ (Dollar sign)
 * Must start with a letter or an underscore
 * Can not start with a number
 * Can only contain letters, numbers and underscores
 * Are case sensitive ($Name and $name are not the same)
 */

/**
 * Varaible Naming Convention:
 * --------------------------
 * unserscore: $first_name ✔
 * camlecase: $firstName ✔
 * pascalcase: $FirstName ✔(for class)
 * lowercase: $firstname
 */

/**
 * <?php ?> and <?= ?> are same for just in html content
 * this is very useful specially we write php code insde html
 * this is shorter and robust for html inside php
 */

$title = "Variables";
$heading = "I'm learning variables";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <h1><?= $heading ?></h1>
</body>

</html>