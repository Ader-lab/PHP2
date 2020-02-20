<?php
  $d = mktime(13, 30, 0, 9, 10, 2012);   //製造時間戳記
  //           時分秒  /  月日年
  echo $d;
  echo "<br>";
  echo date("Y-m-d H:i:s", $d);
  echo "<br>";
  echo gmdate("Y-m-d H:i:s");
?>
