<?php
$ary=["one"=>1,"two"=>2,"three"=>3];
$my_func=function($value,$key){
    echo "key is ${key} value is ${value} <br>";
};
array_walk($ary,function($value,$key){
    echo "key is ${key} value is ${value} <br>";
});