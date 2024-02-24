<?php

/**Associative array is like javascript object
 * -------------------------------------------
 * very useful when dealing with database
 */

$user = [
    "username" => "aliensarmy",
    "email" => "aliensarmy2500@gmail.com",
    "password" => "whoknows123",
    "hobbies" => ["Watch movies", "play clash of clans", "Watch anime"],
];
echo "<pre>";
var_dump($user);
echo "</pre>";

//get value of specific key, if specific index not found then it will give undefined key error
var_dump($user["username"]);
echo "<br>";
var_dump($user['hobbies'][2]);

//add element in associative array
$user['cool'] = "awesome";
echo "<br>";
var_dump($user);
