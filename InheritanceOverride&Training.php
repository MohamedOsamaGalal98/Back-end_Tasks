<?php

/*

	Inheritance Override & Training

*/


// Super Class - Main Class - Parent
class AppleDevice {

	// Properties

	//public $ram = '1GB';
	public $inch = '4 Inch';
	public $space = '16 GB';
	public $color = 'Silver';
	public $screen = 'LCD';
	public $name;


	// Methods

	public function changeSpec($ra, $in, $sp, $co) {

		$this->ram = $ra;
		$this->inch = $in;
		$this->space = $sp;
		$this->color = $co;

	}


	public function sayHello($n) {
		$this->name = $n;
		echo 'Welcome To ' . $n;
	}
}

// Sub Class - Child
class Sony extends AppleDevice {

	// Properties

	public $ram = '5GB';
	public $camera = '25MB';

// Methods

	public function changeSpecs($ra, $in, $sp, $co, $ca) {

		$this->ram = $ra;
		$this->inch = $in;
		$this->space = $sp;
		$this->color = $co;
		$this->camera = $ca;

	}


	public function sayHello($n) {
		$this->name = $n;
		echo 'Welcome To ' . $n . ' This Phone Has ' . $this->ram . ' Ram';
	}

}

$iphone6plus = new AppleDevice();
$iphone6plus->changeSpec("3GB", "5 Inch", "32 GB", "Gold");
$iphone6plus->sayHello('Iphone');
$iphone6plus->price = '$400';
echo "<pre>";
print_r($iphone6plus);
echo "</pre>";
 

$sony = new sony();
$sony->changeSpecs("3GB", "5 Inch", "32 GB", "Gold", "30MB");
$sony->sayHello('Sony');
echo "<pre>";
print_r($sony);
echo "</pre>";