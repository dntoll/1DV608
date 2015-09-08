<?php
   

namespace model;    
    
class LikeModel {
	private $sessionPosition = "model::LikeModel::Likes";


	public function __construct(Product $product) {
		$this->product = $product;
		$this->sessionPosition .= $product->getUniqueProductID();

		if (isset($_SESSION[$this->sessionPosition]) == false) {
			$_SESSION[$this->sessionPosition] = 0;
		}
	}
	/**
	 * @return boolean if not pressed before
	 */
	public function UserLikes() {
		$_SESSION[$this->sessionPosition] += 1;
		
        return true;
	}
	
	/**
	 * @return int antal tryckningar
	 */
	public function GetNumberOfLikes() {
		return $_SESSION[$this->sessionPosition];
	}
}