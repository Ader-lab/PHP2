<?php


// $s = "陳政德";  //中文要*3
// $i = strlen($s);
// echo $i;

$s = "0123456789";
echo substr($s,2,4); //從第二個位置往後取四個
echo "<br>";

$str = "01234abc56789";
echo str_replace("abc","-",$s);  //把abc替換成-
echo "<br>";

$n = 1;
$formal = "零一二三";
echo substr($formal,$n*3,3);  //中文取一個要乘三
echo "<br>";

$ss = "0123456789";
$test = strpos($ss, "2");  //找到對象的起始位置,如果找不到會傳回false,echo因為是傳字串所以會是空字串
echo $test;                //所以判斷要用===,0和false才不會相等
echo "<br>";

$sss = "abcde";
$pos = strpos($sss, "xsd");
if ($pos !== false)  // found
  echo $pos;
else
  echo "not found";

?>