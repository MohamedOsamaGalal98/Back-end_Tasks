<?php

namespace BookStore {

Abstract class BookStore {

	 public $books = [
					  "Science"		=>	[ "Chemistry", "Physics", "Space" ],
					  "History" 		=>	[ "Chemistry", "Physics", "Space" ],
					  "Engineering"   =>	[ "Mechanical", "Electrical", "Electronics" ],
					  "Fantasy"		=>	[ "The Hobbit", "Harry Potter", "Game of Thrones" ],
 					  ];

}

}


namespace BookStore\AddBook {

	class AddBook extends BookStore{

		public function addBook($field, $name) {
	    		$this -> $books[$field] = $name;
	    		echo 'The Book With Name ' . $name . ' Added To Field ' . $field . ' In The Book Store';
	    		echo "<pre>";
		
				print_r($books);
		
				echo "</pre>";	
	}

}

}


/*namespace BookStore\RemoveBook {

	public function removeBook($field, $name) {

	}

}

}


namespace BookStore\Users {

trait Users  {
	public function feature() {
		echo 'This Is Feature Number One';
	}
}

}


trait MyFeature2  {
	public function feature() {
		echo 'This Is Feature Number Two';
	}
}




namespace Apple\Haedware\Phones {

	class CreatePhone {

		public $name;

		public function sayHello() {
			echo 'Hello From Apple Company iPhone<br>';
		}
	}

}



namespace Apple\Haedware\Tablets {

	class CreateTablet {

		public $name;

		public function sayHello() {
			echo 'Hello From Apple Company iPad<br>';
		}
	}

}
*/