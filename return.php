<?php
class Dog{


    public function getName(bool $age):bool
    {

        return $age;
        # "12"
    }
}
$obj=new Dog();
echo $obj->getName("gfs");
