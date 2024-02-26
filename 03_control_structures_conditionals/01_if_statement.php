<?php
$age = 19;
//if statement
//f or single line of code don't need curly braces
if ($age > 18)
    print("you are an adult");
else if ($age > 10 && $age < 15) {
    print("You are a teenager <br>");
    print("this is another line");
} else
    print("I don't know you");
