<?php

class Book{
	// var $title;
	// var $author;
	private $title;
	private $author;
	private $price;
	private $pages;
	public function index(){
		echo "Book class";
		
	}
	public function setTitle($t){
		$this->title = $t;
	}
	public function setAuthor($name){
		$this->author = $name;
	}
	public function setPrice($name){
		$this->price = $name;
	}
   public function setPages($name){
		$this->pages = $name;
	}
	public function getAuthor(){
		return $this->author;
	}
	public function getTitle(){
		return $this->title;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getPages(){
		return $this->pages;
	}
	
}
?>