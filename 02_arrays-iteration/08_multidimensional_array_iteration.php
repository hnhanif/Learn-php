<?php
$students = [
    [
        'name' => 'John',
        'grades' => [85, 90, 92, 88]
    ],
    [
        'name' => 'Jane',
        'grades' => [95, 88, 91, 87]
    ],
    [
        'name' => 'Joe',
        'grades' => [75, 82, 79, 88]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping multidimensional array</title>
</head>

<body>
    <h2>Student info</h2>
    <ul>
        <?php foreach ($students as $student) : ?>
            <li>
                Name: <?= $student['name'] ?> <br>
                Grade Marks: <?= implode(", ", $student['grades']) ?> <br>
                Total Marks: <?= array_sum($student['grades']) ?>
            </li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>

</html>