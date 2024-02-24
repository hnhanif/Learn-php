<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 3; $j++) {
        print("$i - $j <br>");
    }
    print("<br>");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning nested loops</title>
</head>

<body>
    <h2>Nested loops in html</h2>
    <ul>
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <?php for ($j = 0; $j < 3; $j++) : ?>
                <li>item <?= "$i - $j" ?></li>
            <?php endfor; ?>
            <br>
        <?php endfor; ?>
    </ul>
</body>

</html>