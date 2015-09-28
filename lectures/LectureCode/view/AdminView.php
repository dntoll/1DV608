<?php

namespace view;

require_once("view\ProductCatalogView.php");

class AdminView {
	private static $titlePostID = "title";
	private static $pricePostID = "price";
	private static $descriptionPostID = "description";
	private static $uniquePostID = "unique";
	private static $submitPostID = "submit";

	public $message = "";

	public function __construct(\model\AdminFacade $m, NavigationView $navigationView) {
		$pc = $m->getProducts();
		$this->catalog = new ProductCatalogView($pc, $navigationView);
	}

	public function adminWantsToCreateProduct() {
		
		return isset($_POST[self::$submitPostID]);
	}



	public function getProduct() {

		$title = $_POST[self::$titlePostID];
		$price = $_POST[self::$pricePostID]; 
		$unique = $_POST[self::$uniquePostID];
		$description = $_POST[self::$descriptionPostID];
		try {
			return new \model\Product($title, $price, $unique, $description);
		} catch (\model\NoTitleException $e) {
			$this->message = "No title set, title must be set";
		} catch (\model\NoDescriptionException $e) {
			$this->message = "No description set, title must be set";
		} catch (\Exception $e) {
			$this->message = "Unspecified error";
		} 
		return null;
	}

	public function setDuplicate() {
		$this->message = "Duplicate unique key";
	}

	public function getHTML() {
		return "
		<p>$this->message</p>
		<form method='post'>" . 
			$this->getTextField("Title", self::$titlePostID) . "</br>" .
			$this->getTextField("Description", self::$descriptionPostID) . "</br>" .
			$this->getTextField("Price", self::$pricePostID) . "</br>" .
			$this->getTextField("UniqueString", self::$uniquePostID) . "</br>" .
		"<input type='submit' name='".self::$submitPostID."'>
		</form>" . $this->catalog->getHTML();
	}

	private function getPostField($field) {
		if (isset($_POST[$field])) {
			return trim($_POST[$field]);
		}
		return  "";
	}

	private function getTextField($title, $name) {

		$value = $this->getPostField($name);
		return "
			<label for='$name'>$title :</label>
			<input id='$name' type='text' value='$value' name='$name'></input>
			";
	}
}