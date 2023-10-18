<?php
class sleep_awake{
public function __sleep():array
{
   echo "your calling object<hr>";
    return [];
}
 public function __wakeup(): void
 {
    echo "your calling deserialize object";
 }
}
$obj=new sleep_awake();
$aa=serialize($obj);
unserialize($aa);