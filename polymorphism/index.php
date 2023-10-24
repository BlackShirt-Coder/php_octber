<?php

use app\Circle;
use app\gen\Shape;
use app\Square;

require_once "vendor/autoload.php";

class Index
{
    public function __construct()
    {
        $circle = new Circle(10);
        echo $circle->getArea();
        echo "<hr>";
        $square = new Square(30, 20);
        echo $square->getArea();
        echo "<hr>";
        $this->getPrice($circle);
        echo "<hr>";
        $this->getPrice($square);
    }

    public function getPrice(Shape $shape)
    {

        echo "Your price is ".$shape->getArea()*17;
    }
}

new Index();