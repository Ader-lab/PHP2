<?php

// How to resume next when error occured?


for($i = 1; $i <= 9; $i++) {
    try{
        foo($i);
    }
    catch (Exception $err) {
        echo $err->getMessage() . "<br>";
    }
}



function foo($i) {
    if ($i == 4) {
    	throw new Exception("An Error occured");
    }
    
    echo "$i <br>";
}



?>
