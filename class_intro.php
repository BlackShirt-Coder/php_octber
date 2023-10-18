<?php

trait class_intro{
    public function doIt(){
        echo "coding is working";
    }
}
trait Miba{
    public function working(){
        echo "code is work from Miba    ";
    }
}
trait first {
use class_intro,Miba;
}
class second{
    use first;
    public function Second(){
        echo "<br>second code is work";
    }
}
$second=new second();
$second->doIt();
echo"<br>";
$second->working();
$second->Second();