<?php

// $s = "abcde";
// $pos = strpos($s, "abc");
// if ($pos !== false)  // found
//   echo "found";
// else
//   echo "not found";


$str = "abcdefg";
function test($a,$b){
  $ppp = strpos($a, $b);
  return ($ppp !== false) ? $ppp : -1;
}
echo test($str,"g")

?>
