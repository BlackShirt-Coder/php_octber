<?php
abstract class showSalary{
    public abstract function saySalary();
    public function sayWife(){
        echo "my wife is daw mya";
    }

}
interface TestInter{
    public function introduce();
}
interface JobInter{

    public function work();
}

class Papa extends showSalary implements TestInter,JobInter {

    public function introduce()
    {
       echo "Hi I'm Papa";
    }

    public function work()
    {
        echo "I go to school";
    }

    public function saySalary()
    {
        echo "I got 20 dollars";
    }
}
$obj=new Papa();
$obj->saySalary();
echo "<br>";
$obj->sayWife();