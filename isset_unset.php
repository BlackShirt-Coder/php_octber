<?php
class isset_unset{
  public function __isset(string $name)
  {
     echo "Your trying to check set or not of <b>".$name. " </b>property";
  }
  public function __unset(string $name): void
  {
      echo "<hr>Your trying to check unset property of <b>". $name ."</b>";
  }
}
$obj=new isset_unset();
isset($obj->login);
unset($obj->database);
