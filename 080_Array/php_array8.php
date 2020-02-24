<?php
	$testArray = array("A1", "A2", "A18");
	//sort以字串的方式判斷前後
	sort($testArray);
	var_dump($testArray);
	
	echo "<br />";
	
	//natsort 盡量把0~9的符號當成數字
	natsort($testArray);
	var_dump($testArray);
?>
