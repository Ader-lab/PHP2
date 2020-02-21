<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";
		 //htmlspecialchars 會把html會使用到的語法<>等等變回網頁看得到的狀態		
	}

?> 