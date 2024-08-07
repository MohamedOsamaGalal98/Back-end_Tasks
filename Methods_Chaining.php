<?php


/*

	Methods Chaining
	- When A Class's Methods Return The $this Keyword, They Can Be Chanined Together

*/


class Iphone {

	public $name;
	public $email;

	public function pressPower() {
		echo 'You Have Pressed The Power Button<br>';
		return $this;
	}

	public function bootPhone() {
		echo 'The Phone Is Booting Now...<br>';
		return $this;
	}

	public function sayWelcome() {
		echo 'Welcome To Phone<br>';
		return $this;
	}

}


$phone = new Iphone(); 
//$phone->pressPower();
//$phone->bootPhone();
//$phone->sayWelcome();

$phone->pressPower()->bootPhone()->sayWelcome();

echo '<pre>';
print_r($phone);
echo '</pre>';