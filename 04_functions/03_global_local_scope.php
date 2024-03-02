<?php
$name = "Lora"; //global
function one()
{
    $name = "Sam"; //local scope
    echo "My name is $name <br>";
}

function two()
{
    global $name; //in order to access it i have to initialize from global as global keyword
    echo "My name is : $name <br>";
}

one();
two();
