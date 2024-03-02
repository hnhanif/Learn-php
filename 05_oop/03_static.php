<?php
class Circle
{
    public const PI = 3.14;
    public static $radius;

    public function __construct($radius)
    {
        self::$radius = $radius;
    }

    public static function getCircumference()
    {
        return 2 * self::PI * self::$radius;
    }
}


$circle = new Circle(50);
echo $circle->getCircumference();
