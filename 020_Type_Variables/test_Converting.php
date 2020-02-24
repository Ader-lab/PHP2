<?php

$a = 12;
$b = "34";

$result = $a + $b; // 46
echo $result, "<br>";
$result = $a . $b; // 1234
echo $result, "<br>";
$result = $a + intval($b);  // 46

echo $result;

?>