<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
    
print_r($season);   //把資料秀出來
echo "<hr>";
var_dump($season);  //把資料秀出來
?>