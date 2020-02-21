<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
//以/n為分隔做成一個陣列
$dataArray = explode("\n", $sData);
$f = fopen("data2.txt", "w");
foreach ($dataArray as $line) {
	//(寫到哪裡, 內容 ,內容多長)
	fputs($f, $line . "\n", strlen($line) + 1);
}
fclose($f);
echo "-- Done --"

?>
