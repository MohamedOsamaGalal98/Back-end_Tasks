<?php


/*

	Trait => PHP 5.4
	- A Mechanism For Code Reuse In Single Inheritance Languages Such As PHP.
	- Problem With Extending Classes, Is That U Can Only Extend One. This Is A Little Limiting.
	- With Traits Its Possible For PHP Classes To Inherit Methods & Properties From Multiple Sources.

	- You Cannot Extend Or Implements.
	- You Cannot Instantiate.
	- Its Supporting Class Not Replacing It.
	- Can Have Methods.
	- Have Priority Over Class.

*/


// Traits Part 4

trait MyFeature1  {
	public function feature() {
		echo 'This Is Feature Number One';
	}
}


trait MyFeature2  {
	public function feature() {
		echo 'This Is Feature Number Two';
	}
}


class Iphone {

	use MyFeature1, MyFeature2 {

		// [Trait Name] [::] [Method Name] [Keyword as] [New Name]
		MyFeature1 :: feature as osamaFeat;

		// [Trait Name] [::] [Method Name] [Keyword Insteadof] [Other Trait Name]
		MyFeature2 :: feature insteadof MyFeature1;
	}
}


$Iphone = new Iphone();
$Iphone->feature(); 
$Iphone->osamaFeat(); 
echo '<pre>';
print_r($Iphone);
echo '</pre>';



// Traits Part 3
/*
trait MyFeature {
	public function sayHello() {
		echo 'Hello From Trait';
	}
}

class AppleDevice {
	public function sayHello() {
		echo 'Hello From Class';
	}
}


class Iphone extends AppleDevice {
	use MyFeature;
}


$Iphone = new Iphone();
$Iphone->sayHello(); 
echo '<pre>';
print_r($Iphone);
echo '</pre>';
*/




// Traits Part1 , Traits Part 2
/*
trait FingerPrint {
	public function fingerFeature() {
		echo 'This Has Finger Print Feature<br>';
		return $this;
	}
}


trait TreeDimentionTouch {
	public function TreeD() {
		echo 'This Has 3D Touch Feature<br>';
		return $this;	
	}
}


trait FaceDetect {
	public function faceFeature() {
		echo 'This Has Face Detect Feature<br>';
		return $this;
	}
}


trait AllFeatures {
	use FingerPrint,TreeDimentionTouch, FaceDetect;
}

class Iphone {

	use AllFeatures;

	public function sayHello() {
		echo 'Hello From Iphone';
		return $this;
	}
}


class Sony {

	use FaceDetect;

	public function sayHello() {
		echo 'Hello From Sony';
		return $this;
	}
}


class Nokia {

	public function sayHello() {
		echo 'Hello From Nokia';
		return $this;
	}
}



$Iphone = new Iphone(); 
$Iphone->fingerFeature()->TreeD()->faceFeature()->sayHello();
echo '<pre>';
print_r($Iphone);
echo '</pre>';


$Sony = new Sony(); 
$Sony->faceFeature()->sayHello();
echo '<pre>';
print_r($Sony);
echo '</pre>';

$Nokia = new Nokia(); 
$Nokia->sayHello();
echo '<pre>';
print_r($Nokia);
echo '</pre>';*/