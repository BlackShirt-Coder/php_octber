<?php
class One{
    public static  $name;
    public static function  Author()
    {
       return static::$name="htin oo htut";
    }
   public static function getAuthorName(){
      return   static::Author();
   }

}
class Two extends One{
  public static function getAuthorName()
  {
      return static::Author()." and auu htut";
  }
}
echo One::getAuthorName();
echo" <hr>";
echo Two::getAuthorName();