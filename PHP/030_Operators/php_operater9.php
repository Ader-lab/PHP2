<?php

$x = 100;
$y = &$x; //&:address of $x 　//$y是$x的分身

$y = 200; //$y的變動也會被$x拿來處理
echo "x = $x </br>";

unset($x); //清除記憶體 //分身消失了的話會被當來本尊處理
echo "y = $y </br>";

?>