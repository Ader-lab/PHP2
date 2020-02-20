<?php
function cmp($a, $b)
{
    if($a === 2) {    //二最大的排法
        return 1;
    }
    if($b === 2) {
        return -1;
    }
    return $a - $b;  //下面等於這行
    // return $a > $b ? 1 : ($b > $a ? -1 : 0);

}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");       //自訂排序
foreach ($a as $key => $value) {
    echo "$value <br />";   
}
?>