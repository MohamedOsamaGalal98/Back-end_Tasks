<?php


/*

	Polymorphisim
	- Have Methods Without Body Code

*/

/* // Ex1:

interface Mobile {

	public function pressHome();

}


class Iphone implements Mobile {

	public $name;

	public function pressHome() {

		echo 'You Will See Opened Applications';

	}

}


class Sony implements Mobile {

	public $name;

	public function pressHome() {
		
		echo 'Will Close All Apps';
	
	}

}


$iphone = new Iphone();
$iphone->pressHome();
echo "<pre>";
print_r($iphone);
echo "</pre>";
 

$sony = new Sony();
$sony->pressHome();
echo "<pre>";
print_r($sony);
echo "</pre>";*/


// Ex2:

interface DBConnects {

	public function getUsers();
	public function getArticles();
	public function showStats();


}


class MySQL implements DBConnects {

public $name;

	public function getUsers() {
		echo 'Select * From Users';
	}

	public function getArticles() {
		echo 'Select * From Articles';
	}

	public function showStats() {
		echo 'Select * From Stats';		
	}

}



class Oracle implements DBConnects {

	public function getUsers() {
		echo 'Hello * From Users';
	}

	public function getArticles() {
		echo 'Hello * From Articles';
	}

	public function showStats() {
		echo 'Hello * From Stats';		
	}

}



$mysql = new MySQL();
//$mysql = new Oracle();

$mysql->getUsers();
$mysql->getArticles();
$mysql->showStats();
echo "<pre>";
print_r($mysql);
echo "</pre>";
 
