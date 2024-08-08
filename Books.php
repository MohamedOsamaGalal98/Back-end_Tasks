<?php


namespace Books;

class Books {

	public	$Field;
	public  $Name;
	public  $PublishingDate;
	public  $Author;

	public function __construct($field, $name, $publishingdate, $author) {
		$this->Field = $field;
		$this->Name = $name;
		$this->PublishingDate = $publishingdate;
		$this->Author = $author;		
	}
				
}
