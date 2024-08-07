<?php


/*

	Training For Using Methods With Parameters

*/


class AppleDevice {

	// Properties

	public $ram = '1GB';
	public $inch = '4 Inch';
	public $space = '16 GB';
	public $color = 'Silver';


	// Methods

	public function changeSpec($ra, $in, $sp, $co) {

		$this->ram = $ra;
		$this->inch = $in;
		$this->space = $sp;
		$this->color = $co;

	}


}



$iphone6plus = new AppleDevice();
$iphone6plus->changeSpec("3GB", "5 Inch", "32 GB", "Gold");

echo $iphone6plus->color;

echo "<pre>";
var_dump($iphone6plus);
echo "</pre>";


$iphone7plus = new AppleDevice();
$iphone7plus->changeSpec("4GB", "5.5 Inch", "256 GB", "Silver");

echo "<pre>";
var_dump($iphone7plus);
echo "</pre>";


$iphone = new AppleDevice();

echo "<pre>";
var_dump($iphone);
echo "</pre>";