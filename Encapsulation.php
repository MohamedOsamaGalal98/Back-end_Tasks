<?php


/*

	Encapsulation

*/


class AppleDevice {

	// Properties

	public $ram = '1GB';
	public $inch = '4 Inch';
	public $space = '16 GB';
	public $color = 'Silver';
	private $lock;


	// Methods

	public function changeSpec($ra, $in, $sp, $co) {

		$this->ram = $ra;
		$this->inch = $in;
		$this->space = $sp;
		$this->color = $co;

	}


	public function changeLock($lo)
	{
		$this->lock= sha1($lo);
	}

}



$iphone6plus = new AppleDevice();
$iphone6plus->changeSpec("3GB", "5 Inch", "32 GB", "Gold");


$iphone6plus->changeLock("Osama@1234");
//$iphone6plus->lock = "Osama@123";
//echo $iphone6plus->lock;


echo "<pre>";
var_dump($iphone6plus);
echo "</pre>";
