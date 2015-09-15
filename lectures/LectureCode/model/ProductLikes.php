<?php

namespace model;

class ProductLikes {


	private static $folder = "../data/";

	public function __construct(Product $p) {
		$this->productID = $p->getUniqueString();
	}

	public function getNumberOfLikes() {
		//$numberOfLikes = file_get_contents("../data/ProductLikes.txt");
		$filesInFolder = scandir(self::$folder);

		$numberOfLikesForProduct = 0;

		foreach ($filesInFolder as $fileName) {

			//Please note that :: is from the getFileName
			$parts = explode("::", $fileName);

			if (count($parts) == 2 && $parts[1] == $this->productID) {
				$numberOfLikesForProduct++;
			}
		}

		return $numberOfLikesForProduct;
	}

	public function doLike($uniqueString) {
		file_put_contents($this->getFileName($uniqueString), "");
	}

	public function doUnlike($uniqueString) {
		unlink($this->getFileName($uniqueString));
	}

	public function hasUserLiked($uniqueString) {
		return file_exists($this->getFileName($uniqueString));
	}

	private function getFileName($uniqueString) {
		//Please note that :: affects the getNumberOfLikes
		return self::$folder . $uniqueString . "::" . $this->productID;
	}
}