<?php

$obj = new CAnimal(3);
echo "weight: ", $obj->getWeight(), "<br>";
//$obj2 = $obj;
//echo "flag 1<br>";
$obj = null;
//echo "flag 2<br>";


class CAnimal
{
	// public $weight;
	private $_weight = 0;

	//如果有什麼一呼叫就一定得執行的程式 就用__construct設定
	function __construct($weightValue = 0) {
		echo "Object Created.<br>";
		$this->setWeight($weightValue);
		// 還是寫成這樣: (哪一個比較好? @@" )
		// $this->_weight = $weightValue;
	}
	//__destruct結束後就摧毀這段建構 跟物件創作後使用null清空不一樣
	//如果有多個物件使用這個類別，當還有別的物件需要用到這個類別時，就還不會執行__destruct 
	function __destruct() {
		echo "Object destroyed.";
	}
	
	public function makeNoise()
	{
		echo "CAnimal: makeNoise";
	}
	
	public function setWeight($value)
	{
		if ($value >= 0)
			$this->_weight = $value;
	}
	
	public function getWeight()
	{
		return $this->_weight;
	}
	
}

?>
