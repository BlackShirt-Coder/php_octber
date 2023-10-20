<?php
class TestObj{
public $name="mgmg";
}
class  Cat{

}
class array_obj_type{
    public function getMembers( Cat $boj){
      echo "<pre/>";
      print_r($boj );
      echo "<hr>";
    }
}
$cat=new Cat();
$tobj=new TestObj();
$obj=new array_obj_type();
$obj->getMembers($cat);