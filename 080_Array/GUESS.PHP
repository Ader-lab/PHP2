<?PHP
    $arr = array('0','1','2','3','4','5','6','7',"8","9");
    shuffle($arr);
    for($i = 0; $i < 7; $i++){
        array_pop($arr);
    }

    print_r($arr);




?> 