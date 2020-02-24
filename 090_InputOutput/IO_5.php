<?php
	$contents = file_get_contents('data.txt');
	//\r\n windows的換行方法
	//echo $contents;
	echo (str_replace("\r\n", "<br />", $contents));
?>
