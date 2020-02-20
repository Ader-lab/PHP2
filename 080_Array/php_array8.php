<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	var_dump($testArray);  //以字串排序,小到大  2 > 1
	//"A1" "A18" "A2" 
	
	echo "<br />";
	
	natsort($testArray);  // 以數字排序,小到大 18 > 2
	//"A1" "A2" "A18"
	var_dump($testArray);
?>
