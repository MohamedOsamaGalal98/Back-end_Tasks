<?php

/*

	Inheritance

*/


class AppleDevice {

	// Properties

	public $ram = '1GB';
	public $inch = '4 Inch';
	public $space = '16 GB';
	public $color = 'Silver';
	public $screen = 'LCD';


	// Methods

	public function changeSpec($ra, $in, $sp, $co) {

		$this->ram = $ra;
		$this->inch = $in;
		$this->space = $sp;
		$this->color = $co;

	}
}


class Sony extends AppleDevice {

	// Properties

	public $camera = '25MB';

// Methods

	public function changeSpecs($ra, $in, $sp, $co, $ca) {

		$this->ram = $ra;
		$this->inch = $in;
		$this->space = $sp;
		$this->color = $co;
		$this->camera = $ca;

	}
}

$iphone6plus = new AppleDevice();
$iphone6plus->changeSpec("3GB", "5 Inch", "32 GB", "Gold");
echo "<pre>";
print_r($iphone6plus);
echo "</pre>";


$sony = new sony();
$sony->changeSpecs("3GB", "5 Inch", "32 GB", "Gold", "30MB");
echo "<pre>";
print_r($sony);
echo "</pre>";