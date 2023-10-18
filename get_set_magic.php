<?php
class get_set_magic{
public function __get(string $name)
{
   echo "Your trying to get non-exist value ".$name;
}
public function __set(string $name, $value): void
{
    echo "<br>Your trying to set non-exit method ".$name ." with value ".$value;
}
}
$obj=new get_set_magic();
$obj->name="Mg Mg";
$obj->age=30;