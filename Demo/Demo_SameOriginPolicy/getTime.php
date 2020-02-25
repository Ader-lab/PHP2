<?php
header("Access-Control-Allow-Origin: *"); //跨域要允許

$curDate = date('Y-m-d H:i:s');
echo '{"time": "' . $curDate . '"}';
?>
