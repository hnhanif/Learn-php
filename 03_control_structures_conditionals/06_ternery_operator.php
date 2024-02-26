<?php
$isLoggedIn = true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternery opertor</title>
</head>

<body>
    <h1><?= $isLoggedIn ? "You are Logged In" : "Please logged in" ?></h1>
</body>

</html>