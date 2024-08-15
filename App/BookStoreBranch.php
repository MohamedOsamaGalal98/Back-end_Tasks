<?php


namespace App;

 class BookStoreBranch {
	private array $books;
	private array $borrowedBooks;
	private array $borrower;
	private  $branchName;
	private  $branchAddress;
	private  $branchPhone;


	public function __construct($branchName, $branchAddress, $branchPhone) {
		$this->branchName = $branchName;
		$this->branchAddress = $branchAddress;
		$this->branchPhone = $branchPhone;
	}

	public function addBook($book) {
		$this->books[] = $book;
	}

	public function avilableBooks() {
		foreach ($this->books as $book) {
			$book->getBookData();
		}
	}

	public function borrowBook($borrower, $book) {
			if ( ($key = array_search($book, $this->books ) ) !== false) {
   				 $this->borrowedBooks[] = $this->books[$key];
   				 unset($this->books[$key]);
   				 $this->borrower[] = $borrower;
   				 $borrower->borrowedBooks($book);
			}

	}

	public function getBorrowedBooks() {
		foreach ($this->borrowedBooks as $book) {
			$book->getBookData();
		}
	}

	public function getBorrowerNames() {
		foreach ($this->borrower as $borrower) {
			echo $borrower->getBorrowerName();
		}
	}

	public function getBranchName() {
	return $this->branchName;
	}
	
	public function getBranchData() {
	echo $this->branchName;
	echo $this->branchAddress;
	echo $this->branchPhone;
	}

}
