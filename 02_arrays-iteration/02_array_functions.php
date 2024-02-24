<?php
$ids = [10, 23, 2, 4];
$users = ['user1', 'user2', 'user3'];

//reverse sort
rsort($ids); //modify original array
echo var_dump($ids);

//sort
sort($ids); // it's modify original array

//add element at the end by push
array_push($ids, 32);

//pop
array_pop($ids); //remove last element

//array shift one index
array_shift($ids); //modifys original array

//add the beginning by unshift method
array_unshift($ids, 100);

//like sub string we can do it in array but using array_slice function here
$ids2 = array_slice($ids, 2, 3); //doesn't modify original array


//array replace by slice method
array_splice($ids, 1, 1, "new"); //replace position 1 of length of to 'new'
array_splice($ids, 1, 1, 3); //replace position 1 of length of to 3;

//return array_sum
$sum_of_ids = array_sum($ids);

//array search return index if found else null
echo "<br>";
echo (array_search(3, $ids));
echo "<br>";
echo (array_search(31, $ids));

//explode -> strings turns into array
$tags = "one,two,three";
$tags_array = explode(",", $tags);
var_dump($tags);
echo "<br>";
var_dump($tags_array);
echo "<br>";


//check array is exisit or not
var_dump(in_array(100, $ids));
echo "<br>";
var_dump(in_array(101, $ids));

//show aray as string
echo "<br>";
var_dump(implode(", ", $ids));
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array functions</title>
</head>

<body>
    <h1>Learning array functions</h1>
    <hr>
    <p><?= "get array element count: " . count($ids) ?></p> <!-- similar to len function in python -->
    <p><?= "sorted id arrays: " . var_dump($ids) ?></p>
    <p><?= var_dump($ids2) ?></p>
    <p><?= $sum_of_ids ?></p>
</body>

</html>