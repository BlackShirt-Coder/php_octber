<?php
$number=5;
$num=10;
$show=function() use($number){
    echo "closure {$number}";
};
$show();
$doIt=function() use ($num){
    echo $num;
};
echo "<hr>";
$doIt();