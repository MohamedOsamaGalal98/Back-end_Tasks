<?php


class BookStore {

	 private $books = [
				"Science"		=>	[ 	[ "Name"			=>	[ "Chimestory" ],
										  "PublishingDate"	=>	[ "1900" ],
										  "Author"			=>	[ "Marwan" ],
										  "Availability"	=>	["Available"]
										],
									    [ "Name"			=>	[ "Space" ],
										  "PublishingDate"	=>	[ "1850" ],
										  "Author"			=>	[ "Alaa" ],
										  "Availability"	=>	["Available"]
										] 
									],


				
				"History" 		=>	[   [ "Name"			=>	[ "Islamic History" ],
										  "PublishingDate"	=>	[ "1980" ],
										  "Author"			=>	[ "Osama" ],
										  "Availability"	=>	["Available"]
										],

							 		    [ "Name"			=>	[ "Romanian History" ],
										  "PublishingDate"	=>	[ "1860" ],
										  "Author"			=>	[ "Mohamed" ],
										  "Availability"	=>	["Available"]
										]
									],
				


				"Engineering"   =>	[   [ "Name"			=>	[ "Mechanical" ],
										  "PublishingDate"	=>	[ "2020" ],
										  "Author"			=>	[ "Ahmed" ],
										  "Availability"	=>	["Available"]
										],

							 		    [ "Name"			=>	[ "Electrical" ],
										  "PublishingDate"	=>	[ "1800" ],
										  "Author"			=>	[ "Galal" ],
										  "Availability"	=>	["Available"]
										]
									],
				


				"Fantasy"		=>	[	[ "Name"			=>	[ "The Hobbit" ],
										  "PublishingDate"	=>	[ "2001" ],
										  "Author"			=>	[ "Mohamed" ],
										  "Availability"	=>	["Available"]
										],

										[ "Name"			=>	[ "Harry Potter" ],
										  "PublishingDate"	=>	[ "1998" ],
										  "Author"			=>	[ "Peter" ],
										  "Availability"	=>	["Available"]
										]
									]
							];

 	public $borrowedBooks;

 	public $customers;

 	public $availableBooks;


	public function addBook() {

	    //$books[$field] = $name;
	    array_push($books[$field], $name);
	    echo 'The Book With Name ' . $name . ' Added To Field ' . $field . ' In The Book Store';
	    echo "<pre>";

		print_r($books);

		echo "</pre>";	
	}

	public function removeBook($field, $name) {

	}

	public function borrowBook($field, $name) {

	}

	public function returnBackBook($field, $name) {

	}

}


class Book {

	public	$Field;
	public  $Name;
	public  $PublishingDate;
	public  $Author;
				
}


$Book1 = new Book();
$Book1->Field="Engineering";
$Book1->Name="Mechatronics";
$Book1->PublishingDate="2016";
$Book1->Author="Mohamed Osama";

echo "<pre>";
var_dump($Book1);
echo "</pre>";


$Book2 = new Book();
$Book2->Field="Science";
$Book2->Name="Physics";
$Book2->PublishingDate="1800";
$Book2->Author="Hassan";

echo "<pre>";
var_dump($Book2);
echo "</pre>";

