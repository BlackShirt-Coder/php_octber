<?php

use app\Circle;
use app\Square;

require_once "vendor/autoload.php";
class Index{
    public function __construct()
    {
        $circle=new Circle(10);
        echo $circle->getArea();
        echo "<hr>";
       $square=new Square(30,20);
       echo $square->getArea();
    }
}
new Index();