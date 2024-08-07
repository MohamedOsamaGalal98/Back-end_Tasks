<?php


/*

	Magic Methods
	- Method With Special Name Start With Double Underscore [ __ ]

	Magic Method Clone & Clone Keyword:
	- Typical Copy Of Object In Php Works By Reference.
	Means Both ( Main And Copied ) Object Will Be Interlinked.

	- The clone operation creates a so-called shallow copy of the original instance, which means that it constructs a new object with all fields duplicated

	- The above technique works with a class having data members that are of intrinsic type i.e. int, boolean, string, float, etc.. However, this technique will not work with a class that has a data member which is an object of another class. In such a scenario, the cloned object continues to share the reference of the data member object of the class that was cloned.

	- Magic method clone executes when object cloning is performed.


*/


class Iphone {

	public $name;
	public $email;

	public function __construct($n, $e) {

		$this->name = $n;
		$this->email = $e;

	}

	public function __clone() {

		$this->name = clone $this->name;

	}

}


$main = new Iphone("Osama", "O@O.com"); 

//$copy = $main; // Copy By Reference

$copy = clone $main; // Copy By Value


$main->name = 'Sayed';

$copy->name = 'Mahmoud';

echo '<pre>';
print_r($main);
echo '</pre>';


echo '<pre>';
print_r($copy);
echo '</pre>';