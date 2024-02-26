<?php
$isLoggedIn = true;
$name = "Awesome";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional output in hmtl</title>
</head>

<body>
    <!-- we can do it here by:  "isset($name)" as well -->
    <?php if ($isLoggedIn && $name) : ?>
        <h1>Hey, <?= $name ?>! Welcome to your website</h1>
    <?php elseif ($isLoggedIn) : ?>
        <h1>Welcome to the website</h1>
    <?php else : ?>
        <h1>Please man logged in first.</h1>
    <?php endif; ?>
</body>

</html>