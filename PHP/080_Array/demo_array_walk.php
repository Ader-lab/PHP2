<?php
$result = '';
function glue ($val)
{
	global $result;
	$result .= $val;
}
$array = array ('a', 'b', 'c', 'd');
//array_walk把arrayㄉ內容餵到後面的方兄
array_walk ($array, 'glue');
echo $result;
?>