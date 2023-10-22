<?php
function doIt($func){
    $i=0;
    $sum=0;
    while ($i<10000){
        $sum+=$i;
        $i++;
    }
    $func($sum);
}
function showResult($res){
    echo "the sum result is ${res}";
}
doIt("showResult");