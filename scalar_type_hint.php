<?php
class scalar_type_hint{
    public function getVarialbe( $num){
        var_dump( is_bool($num));
    }
}
$obj=new scalar_type_hint();
$obj->getVarialbe("");