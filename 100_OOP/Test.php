<?php



class Bike {
    public $speed = 1;

    function __construct($val){
        $this->speedSet();
        echo $val."<br>";
        echo '111'."<br>";
    }
    

    function speedSet(){
        echo '777'."<br>";
    }
}

class car extends Bike{
    
    function __construct($val,$p = 0){
        parent::__construct($val);
        echo $val.'<br>';
        echo $p.'<br>';
    }
    function speedSet(){
        parent::speedSet();
        echo 'aaa'.'<br>';
    }

}

// $b1 = new Bike(5);
$c1 = new car(5,2);
// $c1->speedSet();





?>