<?php
$ary=["one"=>1,"two"=>2,"three"=>3,"four"=>"testing"];
var_dump($ary);
echo "<hr>";
$obj=(object)$ary;
var_dump($obj);
echo "<hr>";
echo $ary["one"];
echo "<hr>";
echo $obj->four;