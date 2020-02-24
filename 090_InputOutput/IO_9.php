<?php
header("Content-Type: image/png");

$filename = "cc.png";
//rb: read二元檔案
$fileHandle = fopen($filename, "rb");
echo fread($fileHandle, filesize($filename));
fclose($filename);

?>