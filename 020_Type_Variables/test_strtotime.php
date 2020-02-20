<?php
  $d = strtotime("1970-01-01 08:00:00");    //台灣的八點是倫敦的0點  //字串轉換時間,得到數字
  // $d = strtotime("2012-09-10 -3 days");
  // $d = strtotime("2012-09-10 +1 month");
  echo $d;
  echo "<br>";
  echo date("Y-m-d H:i:s", $d);    //伺服器設定的影響       //數字轉成字串
  echo "<br>";
  echo gmdate("Y-m-d H:i:s", $d);  //倫敦的時間,因為不受伺服器設定的時區影響 //數字轉成字串
?>
