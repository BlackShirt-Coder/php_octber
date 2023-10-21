<?php
$func=function(){
    echo "I'm anonymous function";
};
//$func();
$aa=function($num){
    echo "Hi Mr. Anonymous {$num}  ";
};
//$aa(10);

$num=20; //global
echo $num ."<hr>";
$bb=function (&$var){
    //local scope
    //global $num;
    $var=30;
    echo $var."<hr>";
};
$bb($num);
echo $num;