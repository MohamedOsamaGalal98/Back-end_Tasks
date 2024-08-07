<?php


/*

	[ Static Keyword ] 
	
	- Static Properties/Methos Are Used To Access Properties/Methods In Global Scope
	
	-Declaring Class Properties Or Methods As Static Makes Them Accessinle Without Needing An Instantiation Of The Class.
	
	- Because Static Methods are Callable Without An Instance Of The Object Created, the Pseudo-Variable $this is not Available Inside The Method Declared As Static.

	- A Property Declared As Static Cannot be Accessed with an Instantiated Class Object ( Though a Static Method Can).

	- "One of the major benefits to using static properties is that they keep thier stored values for the duration of the script."

*/


class Iphone {

	public static $name = "Osama";
	public static $ram = "2GB";

	public static function sayHello() {
		//echo $this->name;
		return 'Hello';
	}

}

$phone = new Iphone();
echo $phone->name;
echo $phone->sayHello();
echo Iphone::sayHello();

//echo Iphone::$name . '<br>';
//echo Iphone::$ram . '<br>';
//echo Iphone::sayHello() . '<br>';



