<?php

     function  heyNow(){
        echo "Hey";
    }
 $hello=create_function('','echo "hello world"') ;

heyNow();
echo "<br>";
$hello();