<?php


namespace BookStore;

class BookStore {
	private array $books;
	private array $borrowedBooks;
	private array $borrower;

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
}