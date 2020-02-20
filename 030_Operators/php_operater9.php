<?php

$x = 100;
$y = &$x;    //取址

$y = 200;
echo "x = $x </br>";

unset($x);              //清楚記憶體
echo "y = $y </br>";

?>