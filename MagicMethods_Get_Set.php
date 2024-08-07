<?php


/*

	Magic Methods
	- Method With Special Name Start With Double Underscore [ __ ]

	Get:
	- Called When Getting A Property Not Accessible Or Not Found
	- Accept One Parameter [ $Prop ] 

	Set:
	- Called When Setting A Value To A Property Not Accessible Or Not Found 
	- Accept Two Parameters [ $Prop, $Value ]

*/


class Iphone {

	public $name;
	public $ram;
	private $coloring;

	public function __get($prop) {
		echo 'The Property [ ' . $prop . ' ] Is Not Found Or Not Accessible <br>';
	}

	  public function __set($prop, $val) {
		echo 'The Property [ ' . $prop . ' ] Is Not Found Or Not Accessible <br>';
		echo 'And You Cannot Assign This Value [ ' . $val . ' ] To It<br>';
	}

}


$phone = new Iphone(); 
//echo $phone->coloring; // Get Value
$phone->coloring = 'Red'; 
echo $phone->coloring;
$phone->notFound = 'Testing';
echo '<pre>';
print_r($phone);
echo '</pre>';
