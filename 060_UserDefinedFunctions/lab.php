<?php


function showStar($count, $op = "*") {
    $result = ''; 
    if($count <= 0) {
        echo "錯誤:請大於零";
        return;
    }
    if($count >= 20){
        echo "錯誤:請小於二十";
        return;
    }
    for($i = 1; $i <= $count; $i++){
        $result .= $op;
    }
    echo $result;
}



showStar(21,"&")


?>