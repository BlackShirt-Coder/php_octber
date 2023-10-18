<?php
include_once "sheInter.php";
include_once "heInter.php";
class deepInter implements sheInter ,heInter {

    private $items;
    public function heGoToSchool($items)
    {
        $this->items=$items;

    }

    public function sheGoToSchool($items)
    {
        $this->items=$items;
    }

    public function busy()
    {

      echo "This person is busy with ".$this->items[count($this->items)-1];
    }
}
$obj=new deepInter();
$sheItems=["pen","ruler","bags","cosmetics"];
$heItems=["ruler","pen","bags","cigarettes"];
$obj->heGoToSchool($heItems);
$obj->busy();