<?php
$day = "monday";
$message = null;
$bg_color = null;

switch (strtolower($day)) {
    case 'saturday':
        $message = "Ola la Today is Saturday";
        $color = "blue";
        break;
    case 'sunday':
        $message = "Today is Holiday";
        $color = "green";
        break;
    case 'monday':
        $message = "Today is Monday";
        $color = "cyan";
        break;
    case 'tuesday':
        $message = "Today is Tuesday";
        $color = "teal";
        break;
    case 'wednesday':
        $message = "Today is Wednesday";
        $color = "yellow";
        break;
    case 'thursday':
        $message = "Today is Thursday";
        $color = "pink";
        break;
    case 'friday':
        $message = "Today is Friday";
        $color = "gray";
        break;
    default:
        $message = "invalid message";
        $color = "red";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swtitch statments</title>
</head>

<style>
    body {
        background-color: <?= $color ?>;
    }
</style>

<body>
    <h1><?= $message ?></h1>
</body>

</html>