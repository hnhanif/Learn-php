<?php
class User
{
    public $name;
    public $age;

    public function info()
    {
        echo $this->name . " " . $this->age . "<br>";
    }
}

$user1 = new User();
$user1->name = "Lora";
$user1->age = 12;

var_dump($user1);
echo "<br>";

class People
{
    public $firstName;
    public $lastName;
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function fullName()
    {
        echo $this->firstName . " " . $this->lastName;
    }
}

$people = new People("Lora", "Khan");
$people->fullName();
