<?php
for ($i = 0; $i < 10; $i++) {
    print "<pre>";
    print "I love you: $i";
    print "</pre>";
}
$i = 0;
while ($i < 4) {
    print "<pre>";
    print "You are cool: $i";
    print "</pre>";
    $i++;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning basic loops</title>
</head>

<body>
    <h2>for loops in html</h2>
    <ul>
        <?php for ($i = 1; $i <= 10; $i++) : ?>
            <li>item <?= $i ?></li>
        <?php endfor; ?>
    </ul>
    <h2>while loops in html</h2>
    <ul>
        <?php $i = 0;
        while ($i < 3) : ?>
            <li>item <?= $i ?></li>
        <?php $i++;
        endwhile; ?>
    </ul>
</body>

</html>