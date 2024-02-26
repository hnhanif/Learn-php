<?php
$numbers = ['one', 'two', 'three', 'four', 'five'];
$users = [
    [
        'user' => 'user1',
        'email' => 'user1@email.com'
    ],
    [
        'user' => 'user2',
        'email' => 'user2@email.com'
    ],
    [
        'user' => 'user3',
        'email' => 'user3@email.com'
    ],
    [
        'user' => 'user4',
        'email' => 'user4@email.com'
    ],
    [
        'user' => 'user5',
        'email' => 'user5@email.com'
    ],
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Through Array</title>
</head>

<body>
    <h2>Array-loop using formmal forloop</h2>
    <ul>
        <?php for ($i = 0; $i < count($numbers); $i++) : ?>
            <li><?= $numbers[$i] ?></li>
        <?php endfor; ?>
    </ul>
    <h2>Array-Loop using foreach loop</h2>
    <ul>
        <?php foreach ($numbers as $number) : ?>
            <li><?= $number ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>foreach loop including index</h2>
    <ul>
        <?php foreach ($numbers as $index => $number) : ?>
            <li>index (<?= $index ?>) : <?= $number ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>foreach loop in associate array</h2>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li>username: <?= $user['user'] ?> | email: <?= $user['email'] ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>Getting keynames and value from assoicated arrays</h2>
    <ul>
        <?php foreach ($users as $user) : ?>
            <?php foreach ($user as $key => $value) : ?>
                <li><?= $key . " : " . $value ?></li>
            <?php endforeach; ?>
            <br>
        <?php endforeach; ?>
    </ul>
</body>

</html>