<?php

namespace model;

/**
 * CREATE TABLE IF NOT EXISTS `Products` (
  `pk` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 */
class ProductDAL {

	private static $table = "Products";

	public function __construct(\mysqli $db) {
		$this->database = $db;
		
		

	}

	public function getProducts() {
		
		$this->productCatalog = new \model\ProductCatalog();

		$stmt = $this->database->prepare("SELECT * FROM " . self::$table);
		if ($stmt === FALSE) {
			throw new \Exception($this->database->error);
		}

		$stmt->execute();
	 	
	    $stmt->bind_result($pk, $title, $description, $price);

	    while ($stmt->fetch()) {
	    	$product = new Product($title, $price, $pk, $description);
	    	$this->productCatalog->add($product);
		}

		return  $this->productCatalog;
	}

	public function add(Product $toBeAdded) {

		$stmt = $this->database->prepare("INSERT INTO  `store`.`Products` (
			`pk` , `title` , `description` , `price` )
				VALUES (?, ?, ?, ?)");
		if ($stmt === FALSE) {
			throw new \Exception($this->database->error);
		}
		$pk = $toBeAdded->getUniqueString();
		$title = $toBeAdded->getTitle();
		$description = $toBeAdded->getDescription();
		$price = $toBeAdded->getPrice();
		$stmt->bind_param('sssd', $pk, $title, $description, $price);

		$stmt->execute();

	}
}

/*
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$city = "Amersfoort";


if ($stmt = $mysqli->prepare("SELECT District FROM City WHERE Name=?")) {

    
    $stmt->bind_param("s", $city);

    
    $stmt->execute();

    /* bind result variables 
    $stmt->bind_result($district);

    /* fetch value 
    $stmt->fetch();

    printf("%s is in district %s\n", $city, $district);

    /* close statement 
    $stmt->close();
}

/* close connection 
$mysqli->close();
 */