<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);
for ($iPos = 0; $iPos < $iLen; $iPos++)  //跑的次數等於$sData的長度
{
	$ch = substr($sData, $iPos, 1);  //$sData從0開始跑完整條陣列
	// echo $ch;
	// echo "<br>";
	$result = $ch . str_replace($ch, "", $result);  // 把字串放到最前面

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>