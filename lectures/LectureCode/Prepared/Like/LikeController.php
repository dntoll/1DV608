<?php

namespace controller;

require_once("LikeModel.php");
require_once("LikeView.php");



class LikeController {


	private $view;
	private $model;

	public function __construct(\model\LikeModel $model, \view\LikeView $view) {

		$this->model = $model;
		$this->view = $view;
		
	}
	
	/**
	 * @return string XHTML
	 */
	public function doControll() {
		
		
		$userPressedLikeOK = false; 
		
		//Hämta indata från användaren
		if ($this->view->didUserPressLike() == true) {
			$userPressedLikeOK = $this->model->UserLikes();

			//store changes in view
			$this->view->userDidLikeOK();
		}
		
		
	}
	
}