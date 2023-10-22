<?php
error_reporting(0);
try {
   if( fopen("test.txt","r")){
       echo "aung tal";
   }
   else{
       echo "file not found sir";
   }

}

catch (Exception $e){
    echo $e->getMessage();
} finally {

}