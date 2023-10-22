<?php


class loader
{
    public static function load($className)
    {
        require_once "${className}" . ".php";
    }

}