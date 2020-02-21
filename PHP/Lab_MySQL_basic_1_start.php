<?php
header("content-type:text/html; charset=utf-8");

// 0. 請先建立 Class 資料庫 （SetupDB/setup_class.txt）


// 1. 連接資料庫伺服器
$link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error()); //@把錯誤訊息關掉
// var_dump( $link );
$result = mysqli_query($link, "set names utf8"); //query執行
mysqli_select_db($link, "class");

// 2. 執行 SQL 敘述
$commandText = "select * from students";
$result = mysqli_query($link, $commandText);
// $row = mysqli_fetch_assoc($result);
// var_dump($row);

// 3. 處理查詢結果
while ($row = mysqli_fetch_assoc($result))
{
  echo "ID：{$row['cID']}<br>";
  echo "Name：{$row['cName']}<br>";   //大括號包住陣列就可以使用""
  echo "<HR>";
}

// 4. 結束連線
mysqli_close($link);

echo "<br />-- Done --";
?>
