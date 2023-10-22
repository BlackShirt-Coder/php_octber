<?php
require_once "autoload/loader.php";
class  index{
    public function __construct()
    {
        loader::load("Helper");
        $helper =new Helper();
        $helper->Helping();

        loader::load("Hello/Hello");
        $hello=new Hello();
        $hello->sayHello();

        loader::load("Hello/Lohel/Lohel");
        $lohel=new Lohel();
        $lohel->sayLohel();
    }
}
new index();