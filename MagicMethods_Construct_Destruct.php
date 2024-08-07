<?php


/*

	Magic Methods
	- Method With Special Name Start With Double Underscore [ __ ]

	Construct:
	--- Called When Object Is Created
	--- Can Be Inherited

	Destruct:
	--- Called When Object Is Destroyed

*/


class Iphone {

	public $name;
	public $ram;

	/*public function sayHello($n) {
		$this->name = $n;
		echo 'Hello ' . $n;
	}*/

	public function __construct($na, $ra) {
		//echo 'Object Is Created';
		$this->name = $na;
		$this->ram = $ra;		
		echo 'Hello ' . $na . ' Your Device Has ' . $ra . ' Ram';
	}

	public function __destruct() {
		echo 'Object Destroyed';	
	}

}


/*class Sony extends Iphone {
}*/

$phone = new Iphone('Osama', '2GB'); // This Is 1 Argument But He Need 2 
//$phone = new Sony();
//$phone->sayHello('Osama');
echo '<pre>';
print_r($phone);
echo '</pre>';
