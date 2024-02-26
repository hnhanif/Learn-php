<?php

/**It is basically ternery operator but it could be more easy to use
 * it works if value is not null then it will genearte particular condition value or it will execute as default value
 */
// $fav_color = "green";
$second_fav_color  = "gray";
$color = $fav_color ?? "red";
echo ($color);

$bg_color = $fav_color ?? $second_fav_color ?? "black";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null Coalescing Operator</title>
</head>
<style>
    body {
        background-color: <?= $bg_color ?>;
    }

    h1 {
        color: #fff;
    }
</style>

<body>
    <h1>Hello There I am awesome.</h1>
</body>

</html>