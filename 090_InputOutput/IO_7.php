<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
//r讀 w寫
$f = fopen("data.txt", "r");
while (!feof($f)) //如果沒有到file end of file
{
	$line = fgets($f);
	//Trim用來刪除字串前後的空白區域
	$sData .= Trim($line) . "<br>";
}
fclose($f);
echo $sData;

?>
