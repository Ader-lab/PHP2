<?php
  $x = 3;
  if ($x >= 10 && foo())   // 兩個&&可能兩個都會執行
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo())  // 一個&兩個都會執行
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>