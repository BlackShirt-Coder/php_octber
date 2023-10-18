<?php
class One{
    public static function className(){
        return __CLASS__;
    }
    public  function getClassName(){
       return static::className();
       // return self::className();
       // return static::className();
    }
}
class Two extends One{
    public static function className()
    {
        return __CLASS__;
    }
}
$one=new One();
echo $one->getClassName();
echo "<hr>";
$two=new Two();
echo $two->getClassName();

