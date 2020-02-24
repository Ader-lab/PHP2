<?php

  //不管是&& 還是 || 兩個符號一起的時候 都有可能因為一個前面條件成立而不跑後面
  //希望他跑後面的條件的話 則打 & | 一個就好

  $x = 3;
  if ($x >= 10 && foo())
    echo "yes";
  else
    echo "no";
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo())
    echo "yes";
  else
    echo "no";
    
function foo()
{
   echo "foo() is running.<br>";
}

?>