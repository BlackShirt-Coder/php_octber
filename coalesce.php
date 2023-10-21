<?php
$var=10;
$func=function (){
   // global $var;
   //var_dump($var);
    // null => right hand side
    // !null =>left hand side;
    echo $var ?? "hello world";
};
$func();