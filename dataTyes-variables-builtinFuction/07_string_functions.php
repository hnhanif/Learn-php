<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn String functions</title>
</head>

<body>
    <h1>Built in String functions</h1>
    <hr>
    <p><?= "get length of string by -> strlen('1234') -> " . strlen("1234") ?></p>
    <p><?= "get word count by -> str_word_count('Hello, world cool') -> " . str_word_count("Hello, world cool") ?></p>
    <p><?= "get string starting position -> strpos('hello world','world') -> " . strpos("hello world", "world") ?></p>
    <p><?= "get specific char by index -> 'macbook'[2]: " . "macbook"[2] ?></p>
    <p><?= "get sbustring by using -> substr(string,start,end): " . substr("Hello, world, this is me.", 5, 5) ?></p>
    <p><?= "get sbustring by using -> substr(string,start) without end means start to rest of the string: " . substr("Hello, world, this is me.", 5) ?></p>
    <!-- substr , replace_str,strtolower,strtoupper copy of oringal string not modify origin-->
    <p><?= "we can replace string using -> str_replace(target_string,replace_string,original_string): " . str_replace("world", "dunia", "Hello, world") ?></p>
    <p><?= "strtolower -> " . strtolower("HelloBeda") ?></p>
    <p><?= "strtoupper -> " . strtoupper("HelloBeda") ?></p>
    <p><?= "ucwords : it is capitalize word -> " . ucwords("i am from bangladesh") ?></p>
    <p><?= "trim : removes extra space -> " . trim("       Hello     ") ?></p>
</body>

</html>