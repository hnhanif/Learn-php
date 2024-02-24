<?php

/**
 * `Y` - The year
 * `m` - The month
 * `m` - The Full month short
 * `d` - The day
 * `D` - The day of the week short name
 * `l` - The full day of the week name
 * `h` - The hour
 * `i` - The minute
 * `s` - The second
 * `a` - AM/PM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and timestamp</title>
</head>

<body>
    <h2>Learn Date and timestamp</h2>
    <hr>
    <p><?= "get year: " . date("Y") ?></p>
    <p><?= "get year by timestamp: " . date("Y", 1342423423) ?></p>
    <p><?= "get year by timestamp from strtotime: " . date("Y", strtotime("2011-01-01")) ?></p>
    <p><?= "get year by timestamp from strtotime: " . date("M", strtotime("2011-01-01")) ?></p>
    <p><?= "My customize : " . date('Y-M-D-i-s-a') ?></p>
    <h3>Today is : <?= date("d M, Y") ?></h3>
    <h4>Time is now by default: <?= date("h:i a") ?></h4>
    <!-- now it will give bangladeshi time -->
    <?php date_default_timezone_set("Asia/Dhaka") ?>
    <h5>Bangladesh time is : <?= date("h:i A") ?></h5>
</body>

</html>