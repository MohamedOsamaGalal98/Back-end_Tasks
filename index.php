<?php


/*

	self vs $this

	self:
	- Refer To Current Class
	- Access Static Members
	- Not Use ($) Because Its Not Represent A Variable But Represent Class Construction


	$this:
	- Refer To Current Object 
	- Access Non Static Members 
	- Use ($) Because It Represent A Variable


*/

class AppleDevice {

	// Properties

	public $ram = '1GB';
	public $inch = '4 Inch';
	public $space = '16 GB';
	//public $color = 'Silver';
	public $ownerName; 


	// Constants

	//const CONSTNAME = 'Value';
	
	//const CHIP = 'A9';
	//const MINCHARS = 5;

	const OWNERNAME = 5;


	// Methods

	/*public function doubleHomePressed() {
		echo 'This Device Does Not Support This Feature';
	}*/

	/*public function getSpecification() {
		echo 'This Iphone Ram Is: ' . $this->ram . '<br>';
		echo 'This Iphone Screen Inch Is: ' . $this->inch . '<br>';
	}*/

	public function setOwnerName($owner) {
		//if ( strlen($this->ownerName) < 3 ) {
		if ( strlen($owner) < self::OWNERNAME ) {
			echo 'Owner Name Cant Be Less Than ' . self::OWNERNAME . ' Chars <br>' ;
		} else {
			echo 'Your Name Has Been Set <br>';
		}
	}

}


$iphone6plus = new AppleDevice();
$iphone6plus->ram = '2GB';
$iphone6plus->inch = '5 Inch';
$iphone6plus->space = '32 GB';
$iphone6plus->color = 'Gold';
//$iphone6plus->ownerName = 'Osama';
$iphone6plus->setOwnerName('Osama');
echo AppleDevice::OWNERNAME . '<br>';
echo $iphone6plus::OWNERNAME . '<br>';

echo "<pre>";
var_dump($iphone6plus);
echo "</pre>";



$iphone7plus = new AppleDevice();
$iphone7plus->ram = '4GB';
$iphone7plus->inch = '5.5 Inch';
$iphone7plus->space = '25GB';
//$iphone7plus->color = 'Silver';
$iphone7plus->colour = 'Silver';

echo "<pre>";
var_dump($iphone7plus);
echo "</pre>";



$iphone = new AppleDevice();

echo "<pre>";
var_dump($iphone);
echo "</pre>";