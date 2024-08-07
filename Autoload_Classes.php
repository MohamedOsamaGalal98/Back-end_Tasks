<?php


/*

	Auto Load Classes

*/

//require 'classes/Testing1.class.php';
//require 'classes/Testing2.class.php';
//require 'classes/Testing3.class.php';

spl_autoload_register(function ($class) {

	require 'Classes/' . $class . '.class.php';

});


$var = new Testing1();

print_r($var);
