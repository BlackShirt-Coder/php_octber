<?php
abstract class Teststract{
    const name="mgmg";
    public function getName(){
        return self::name;
    }
    public function concrete(){
        echo "I'm concrete method";
    }
    public abstract function hey();
}
class Bestract extends Teststract {

    public function hey()
    {
        echo "hey";
    }
}
class Castract extends Bestract{

}
$obj=new Castract();
echo $obj->getName();