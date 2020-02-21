<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    //只要是1就交換位置，-1就維持原位
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);
//usort自訂排序
//可以透過字串呼叫函示
usort($a, "cmp");
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>