<?php

$x = 100;
$y = $x;
echo $y;
echo "<br>";

$y = "$x";
echo $y;
echo "<br>";

//雙引號的時候變數還會為持變數的值
$y = "x = $x";
echo $y;
echo "<br>";

//單引號的時候則會原本打出來的字
$y = 'x = $x';
echo $y;
echo "<br>";

?>