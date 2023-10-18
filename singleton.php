<?php
class  singleton{
    public static $name="mgmg";
    public static $instance;
    private function __construct()
    {
      return  self::$name;
    }
    public static function getInstance(){
       if(self::$instance==null){
          self::$instance= new singleton();
       }
       return self::$instance;
    }
    public function getName(){
       return  self::$name="aung aung";
    }

}
$obj=singleton::getInstance();
echo $obj->getName();


