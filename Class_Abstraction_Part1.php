<?php

/*

	Class Abstraction
	- Cannot Be Instantiated [ Cannot Create Object From ]
	- Made For Other Classes To Inherit Prop & Methods From
	- Can Have Methods & Properties
	- Can Have Abstracted Methods And Non Abstracted Methods
	- Abstract Methods [ Contains No Body Code ]


*/


abstract class MakeDevice {

	public $ram;

	public function sayHello() {
		echo 'Say Hello';
	}

	abstract public function sayBye($arg);
	abstract public function sayTest();

}


class AppleDevice extends MakeDevice {


}



$iphone6plus = new AppleDevice();
$iphone6plus->sayHello();
echo "<pre>";
print_r($iphone6plus);
echo "</pre>";
 
