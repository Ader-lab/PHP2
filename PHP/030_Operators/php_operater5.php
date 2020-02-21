<?php
  $x = 1;
  $y = $x++; //先做 $y = $x 再做 $x++
  echo "x = $x, y = $y";
  
  echo "<br>";

  $x = 1;
  $y = ++$x; //先做 $x++ 再做 $y = $x
  echo "x = $x, y = $y";
?>
