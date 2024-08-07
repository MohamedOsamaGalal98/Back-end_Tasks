<?php


/*

	Namespace

*/


// NameSpace Part 2
require 'Apple.php';
require 'Sony.php';
require 'LG.php';

$Iphone = new Apple\Haedware\Phones\CreatePhone();
$Iphone->sayHello();
print_r($Iphone);


$Tablet = new Apple\Haedware\Tablets\CreateTablet();
$Tablet->sayHello();
print_r($Tablet);


 // NameSpace Part 1
/*require 'class.Testing.php';
class Testing {
	public $test;
}
$test = new Testing();
print_r($test);
*/
