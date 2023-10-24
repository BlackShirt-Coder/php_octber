<?php
require_once "vendor/autoload.php";
$home=new Home();
$home->sayHome();
$best=new Best();
$best->sayBest();

$end=new End();
$end->sayEnd();
$start=new Start();
$start->sayStart();
$help=new Helper();
$help->sayHelper();