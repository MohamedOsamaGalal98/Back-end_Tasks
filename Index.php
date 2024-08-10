<?php

require "Book.php";
require "BookStore.php";
require "Borrower.php";

$Book1 = new Book\Book('Mechatronics', 'Engineering', '1990', 'Osama');
$Book2 = new Book\Book('Roma', 'History', '1850', 'Mohamed');

$store = new BookStore\BookStore();
$store->addBook($Book1);
$store->addBook($Book2);
$store->avilableBooks(); 


$Borrower1 = new Borrower\Borrower('Marwan');

/*echo '<pre>';
var_dump($Borrower1);
echo '</pre>';*/
$store->borrowBook($Borrower1, $Book1);
$store->borrowBook($Borrower1, $Book2);

$store->avilableBooks();
$store->getBorrowedBooks();
//$store->getBorrowerNames();

$Borrower1->getBorrowerName();
$Borrower1->getBorrowedBookName();

