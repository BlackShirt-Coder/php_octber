<?php
$ary=[
  ["one"=>1],
  ["two"=>2],
  ["three"=>3],
  ["four"=>4]
];
echo "<pre>";
print_r($ary);
echo "</pre>";
echo "<hr>";
$aa=serialize($ary);
echo "<pre>";
echo $aa;
echo "</pre>";
echo "<hr>";
$bb=unserialize($aa);
echo "<pre>";
print_r($bb);
