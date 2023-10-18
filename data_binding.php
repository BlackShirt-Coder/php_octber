<?php
class Three{
    public static $name;
    public static function setName(){
       return  static::$name="htin ";
    }
    public static function getName(){
        return static::setName();
    }
}
class Four extends  Three{
    public static function setName()
    {
      return   Three::getName() ." and oo htut";
    }
}
echo Four::getName();