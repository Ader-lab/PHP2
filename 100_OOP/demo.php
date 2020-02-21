<?php

class CAnimal{

    //public / private來決定外面的呼叫可不可以用這個屬性
    public $weight = 1;

    //method
    function makeNoise(){
        echo "Animal: bark <br>";
    }

}

$obj = new CAnimal();
$obj -> makeNoise();
//當引用物件類別裡的值的時候 不用+$符號
echo ($obj -> weight+10)."<br>";

//繼承
class Cdog extends CAnimal{
    function makeNoise(){
        //可以設定自己的，設定完也可以用parent的方法呼叫父層的方法
        parent::makeNoise();
        echo "Barking";
    }
}

$obj2 = new Cdog;
$obj2 -> makeNoise();













?>