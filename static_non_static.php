<?php
class static_non_static
{
    public function __call(string $name, array $arguments)
    {
        echo "your calling non existing method  with arguments  ";
        echo "<pre>";
        print_r($arguments);
        echo "</pre>";
    }
    public static function __callStatic(string $name, array $arguments)
    {
        echo "your calling static non-existing method with arguments";
        echo "<pre>";
        print_r($arguments);
        echo "</pre>";
    }
}

$obj=new static_non_static();
$obj->hey("mgmg");
static_non_static::hello("hello","world");