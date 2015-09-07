<?php

namespace controller;

require_once("LikeModel.php");
require_once("LikeView.php");



class LikeController {


	private $view;
	private $model;

	public function __construct() {
		$this->view = new \view\LikeView();
		$this->model = new \model\LikeModel();
	}
	
	/**
	 * @return string XHTML
	 */
	public function doControll() {
		
		
		$userPressedLikeOK = false; 
		
		//Hämta indata från användaren
		if ($this->view->didUserPressLike() == true) {
			$userPressedLikeOK = $this->model->UserLikes();
		}
		
		//Hämta data från modellen
		$likes = $this->model->GetNumberOfLikes();
		
		//Generera utdata
		$xhtml = $this->view->createLikeButton($likes, $userPressedLikeOK);
		return "$xhtml";
	}
	
}