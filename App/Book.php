<?php

namespace App;

class Book {
	private $name;
	private $field;
	private $puplishingData;
	private $author;

	public function __construct($name,$field,$puplishingData,$author) {
		$this->name = $name;
		$this->field = $field;
		$this->puplishingData = $puplishingData;
		$this->author = $author;
	}


	public function getName() {
		return $this->name; 
	}

	public function getBookData() {
		echo '[ ';
		echo 'Book Name : ' . $this->name . '<br>'; 
		echo 'Book Field : ' . $this->field . '<br>';
		echo 'Publishing Date : ' . $this->puplishingData . '<br>';
		echo 'Book Author : ' . $this->author . ' ]<br>';
		echo '<br><br>';
	}
}