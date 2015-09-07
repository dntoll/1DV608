<?php

namespace view;

class LikeView {
	private static $likedButtonURL = "liked";

	public function __construct() {

	}

	/**
	 * 
	 * @return string XHTML string
	 */
	public function createLikeButton($likes, $userLiked) {
		assert(is_numeric($likes));
		assert(is_bool($userLiked));
		

		if ($likes == 0) {
			return "<a href='?" . self::$likedButtonURL. "=true' >Like</a> No one likes this!";
		}
		return "<a href='?" . self::$likedButtonURL. "=true' >Like</a> this thing has got $likes likes!";
	}
	
	/**
	 * @return boolean true if user klicked the link
	 */
	public function didUserPressLike() {
		if ( isset($_GET[self::$likedButtonURL]) == true ) {
			return true;
		}
		return false;
	}
}