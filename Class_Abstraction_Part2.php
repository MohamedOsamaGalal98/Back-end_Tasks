<?php

/*

	Class Abstraction
	- Cannot Be Instantiated [ Cannot Create Object From ]
	- Made For Other Classes To Inherit Prop & Methods From
	- Can Have Methods & Properties
	- Can Have Abstracted Methods And Non Abstracted Methods
	- Abstract Methods [ Contains No Body Code ]



	* Rules To Go On
	* Force Developers To Follow Your Methods


*/


abstract class MakeDevice {

	abstract public function testPerformance();
	abstract public function verifyOwner();
	abstract public function sayWelcome($n); 
}


class Iphone extends MakeDevice {

	public $owner;

	 public function testPerformance() {
	 	echo 'Performance Is Good 100%';
	 }

	 public function verifyOwner() {
	 	echo 'Owner Is Verified';
	 }

	 public function sayWelcome($x) {
		$this->owner = $x;
	 	echo 'Welcome ' . $x ;
	 }

}



class Ipad extends MakeDevice {

	public $owner;

	 public function testPerformance() {
	 	echo 'Performance Is Good 100%';
	 }

	 public function verifyOwner() {
	 	echo 'Owner Is Verified';
	 }

	 public function sayWelcome($s) {
	 	$this->owner = $s;
	 	echo 'Welcome ' . $s ;
	 }

}

$iphone = new Iphone();
$iphone->sayWelcome('Osama');
echo "<pre>";
print_r($iphone);
echo "</pre>";
 

$ipad = new Ipad();
$ipad->sayWelcome('Osama');
echo "<pre>";
print_r($ipad);
echo "</pre>";