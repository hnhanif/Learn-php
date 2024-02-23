<?php

/**
 * php Data Types:
 * ---------------
 * String: Sequence of chracters. Enclosed in quotes
 * Integer: Whole number. It can be positive or negative
 * Float: Number with a decimal point
 * Boolean: True or False
 * Array: Holds multiple values
 * Object: Collection of properties and methods
 * Null: Represents a variables with no value
 * Resource: Represents external resource like (file,image, video etc.)
 */

/**
 * php is loosely typed language
 * which means unlike java and c we don't need type of our variables
 * in java -> `String fullName = "Rifat Khan";`
 * but in php -> `$fullName = "Rifat Khan"`
 */


//String
$firstName = "Lora";
$lastName = "Khan";
var_dump($firstName); // check data type and if it is string display length as well
//var_dump built in function is really useful when handling -> array and objects (for debug)
echo "<br>";
echo getType($lastName); // another way to get type of $variable
echo "<br>";

//Integer
$age = 20;
var_dump($age);
echo "<br>";

//Flaot
$rating = 4.5;
var_dump($rating);
echo "<br>";

//Boolean
$isOnline = true;
var_dump($isOnline);
echo "<br>";

//Array
$data = ["John", "Jane", 123, 4.5, true];
var_dump($data);
echo "<br>";

//Object
$obj = new stdClass();
var_dump($obj);
echo "<br>";


//Resource
$file = fopen("sample.txt", "r"); //fopen is a builtin resource function (it takes filepathe, file mode and more...) our cae file mode is "r" which means reading
var_dump($file);
echo "<br>";
fclose($file);// when open a file after finishing it's job is better to close it and it is really good practice else can be save from unexpected error that could be happend due to open exisiting file.
