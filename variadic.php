<?php
function doIt(...$var){
    echo "<pre>";
    print_r($var);
    echo "<hr>";
    echo $var[3]["alphard"];
}
doIt("one","two","three",["white"=>001,"alphard"=>"white"],12,"gray");