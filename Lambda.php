<?php
function doIt($func){
    $func();
};
$ani=function (){
    echo "Hi Anonymous";
};
doIt($ani);
echo "<hr>";

function Hey($param1,$param2,$param3){
    $result =$param1+$param2;
    $param3($result);
}
$var=function ($var){
    echo "Hey I'm Lambda ${var}";
};
Hey(2,3,$var);
echo "<hr>";
$hi=function ($p1,$p2,$p3){
  $res=$p1+$p2;
  $p3($res);
};
$hello =function ($say){
    echo "Lambda ${say}";
};
$hi(4,5,$hello);