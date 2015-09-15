<?php

namespace model;

class ProductLikes {

	public function __construct(Product $p) {

	}

	public function getNumberOfLikes() {
		$numberOfLikes = file_get_contents("../data/ProductLikes.txt");

		return $numberOfLikes;
	}
}