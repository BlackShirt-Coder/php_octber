<?php
// non-static -> static
// static-> non-static  all properties should be static
class staticModifier{
    public static $name;
    public static $age;
    public function setName(){
        self::$name="mgmg";
    }
    public static function setAge()
    {
        self::$age=20;
    }



}
$obj=new staticModifier();
$obj::setAge();
echo $obj::$age;