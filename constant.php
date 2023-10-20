<?php
class Main{
    const host="localhost";
    public function getHostName(){
        echo self::host;
    }
}
$obj=new Main();
$obj->getHostName();