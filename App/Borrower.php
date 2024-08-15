<?php


namespace App;

class Borrower {

	private  $borrowerName;
	private  array $borrowedBook;

	public function __construct($name) {
		$this->borrowerName = $name;
	}


	public function borrowedBooks($book) {
		$this->borrowedBook[] = $book;
	}

	public function getBorrowerName() {
			echo $this->borrowerName . '<br>'; 
	}

	public function getBorrowedBookName() {
		foreach ($this->borrowedBook as $book) {
			echo $book-> getName() . '<br>'; 	
		}
	}

}