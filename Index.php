<?php

require __DIR__ . '/vendor/autoload.php';

$loader = new Composer\Autoload\ClassLoader;
$loader->register();

use App\Book;
use App\Borrower;
use App\BookStoreBranch;
use App\City;


	//cities = [];
	//branches = []


$Book1 = new Book('Mechatronics', 'Engineering', '1990', 'Osama');
$Book2 = new Book('Roma', 'History', '1850', 'Mohamed');
$Book3 = new Book('physics', 'science', '1700', 'Ahmed');


$store1 = new BookStoreBranch('Miami', '5-Alessawy st.-Miami', '01101101234');
$store1->addBook($Book1);
$store1->addBook($Book3);

$store2 = new BookStoreBranch('SanStefano', '4-Aldemerdash st.-SanStefano', '01147891234');
$store2->addBook($Book1);
$store2->addBook($Book2);

$store3 = new BookStoreBranch('October', '43-abdelsalam st.-October', '01124561234');
$store3->addBook($Book2);
$store3->addBook($Book3);

$store1->avilableBooks(); 
$store2->avilableBooks(); 
$store3->avilableBooks(); 


$alex = new City('Alexandria');
$alex->setCityBranches($store1);
$alex->setCityBranches($store2);

$cairo = new City('Cairo');
$cairo->setCityBranches($store3);

$alex->getCityName();
echo '<br>';
$alex->getCityBranches();
echo '<br>';
$cairo->getCityName();
echo '<br>';
$cairo->getCityBranches();
echo '<br>';


$Borrower1 = new Borrower('Marwan');
$Borrower2 = new Borrower('Alaa');
$Borrower3 = new Borrower('Osama');


//$store1->borrowBook($Borrower1, $Book1);
//$store2->borrowBook($Borrower2, $Book2);
//$store3->borrowBook($Borrower3, $Book2);


//$store1->avilableBooks(); 
//$store2->avilableBooks(); 
//$store3->avilableBooks(); 

//$store1->getBorrowedBooks();
//$store1->getBorrowerNames();

//$store2->getBorrowedBooks();
//$store2->getBorrowerNames();


//$Borrower1->getBorrowerName();
//$Borrower1->getBorrowedBookName();
//
//
//$Borrower2->getBorrowerName();
//$Borrower2->getBorrowedBookName();