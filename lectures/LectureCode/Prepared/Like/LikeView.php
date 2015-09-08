<?php

namespace view;

class LikeView {
	private static $likedButtonURL = "liked";

	private $model;
	private $youJustLiked = false;

	public function __construct(\model\LikeModel $m, URLView $url) {
		$this->model = $m;
		$this->url = $url;
	}

	/**
	 * 
	 * @return string XHTML string
	 */
	public function createLikeButton() {
		$likes = $this->model->GetNumberOfLikes();

		$change = "";
		if($this->youJustLiked) {
			$change = "You Just Liked this product!!!";
		}
		if ($likes == 0) {
			$likeCount = "No one likes this!";
		} else {
			$likeCount = "this thing has got $likes likes!";
		}
		$url = $this->url->getUrlWithArgument(self::$likedButtonURL, "true");

		return "$change <a href='$url' >Like</a> $likeCount";
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

	public function userDidLikeOK() {
		$this->youJustLiked = true;
	}
}