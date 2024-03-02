<?php
class Admin
{
    public $user;
    public $isLoggedIn;

    public function __construct($user, $isLoggedIn)
    {
        $this->user = $user;
        $this->isLoggedIn = $isLoggedIn;
    }
    public function information()
    {
        echo $this->user . " is logged in: " . $this->isLoggedIn . " <br>";
    }
}

class SuperUser extends Admin
{
    public $specialAblility;
    public function __construct($user, $isLoggedIn, $specialAblility)
    {
        $this->specialAblility = $specialAblility;
        parent::__construct($user, $isLoggedIn);
    }
    public function info()
    {
        echo "user: " . $this->user . " isLoggedIn: " . $this->isLoggedIn . " specialAbility: " . $this->specialAblility . "<br>";
    }
}

$supe = new SuperUser("Lora", true, "yes");
$supe->information();
$supe->info();
