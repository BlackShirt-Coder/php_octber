<?php
$num=10;
$ary=["one"=>1,"two"=>2,"three"=>3 ];
array_walk($ary,function ($val,$key) use(&$num){
   ++$num;
   echo "key is ${key} and value is ${val}  and current value is ${num}  <br>";
});
//array_walk / closure / lambda = anonymous func