<?php
  $d = mktime(13, 30, 0, 9, 10, 2012);
  //離1997-01-01差幾秒
  echo $d, "<br>";
  echo gettype($d);
  echo "<br>";
  $s = date("Y-m-d H:i:s", $d);
  echo $s, "<br>";
  echo gettype($s);
  
?>
