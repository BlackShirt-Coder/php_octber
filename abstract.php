<?php
abstract class Papa{
   // public abstract function sayHi();
    private function greeting(){
        echo "hello everybody";
    }
    public function getGreeting(){
       return  self::greeting();
    }
}
class Khalay extends Papa{


//    public function sayHi()
//    {
//        echo "hi";
//    }
    public function greeting(){
        parent::getGreeting();
    }

}


$kl=new Khalay();
$kl->greeting();