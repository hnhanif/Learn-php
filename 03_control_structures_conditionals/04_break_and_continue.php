<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break and continue</title>
</head>

<body>
    <h2>Break</h1>
        <ul>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <?php if ($i == 3) break ?>
                <li>itme: <?= $i ?></li>
            <?php endfor; ?>
        </ul>

        <h2>Continue</h2>
        <ul>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <?php if ($i == 3) continue ?>
                <li>itme: <?= $i ?></li>
            <?php endfor; ?>
        </ul>
</body>

</html>