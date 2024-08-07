<?php


/*

	Magic Methods
	- Method With Special Name Start With Double Underscore [ __ ]

	Call:
	- Called When Invoking Function Not Accessible Or Not Found

*/


class Iphone {

	public $name;
	public $ram;

	public function __call($method, $params) {
		echo 'The Method [ ' . $method . ' ] Not Found Or Not Accessible <br>';
		print_r($params);
	}

}


$phone = new Iphone(); 
$phone->welcomeToApp('Osama', '2GB');
$phone->welcomeToPhone();
echo '<pre>';
print_r($phone);
echo '</pre>';
