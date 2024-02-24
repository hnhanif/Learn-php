<?php
//multidimeinal array
$furits = [
    ['apple', 'red'],
    ['orange', 'orange'],
    ['banana', 'yellow']
];
echo "<pre>";
var_dump($furits);
echo "</pre>";
echo "<br>";
//get value
echo $furits[0][0];
echo "<br>";
echo $furits[0][1];
echo "<br>";
echo $furits[1][0];
echo "<br>";

// multidimeinsonal x associative array
$users = [
    [
        "username" => "user1",
        "password" => "user123",
    ],
    [
        "username" => "user2",
        "password" => "user123",
    ],
    [
        "username" => "user3",
        "password" => "user123",
    ],
];

//get value from multidimensional associative array
var_dump($users[0]["username"]);
