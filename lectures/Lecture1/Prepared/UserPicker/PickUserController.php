<?php

namespace controller;

class PickUserController {

	private $view;
	private $model;


	public function __construct(\model\UserArray $users, \view\UserView $view) {
		$this->view = $view;
		$this->model = $users;
	}


	public function doPickUser() {
		//Get user input
		$selected = $this->view->getSelectedUser();

		if ($selected != null) {
			//Make changes to the model state
			$this->model->select($selected);
		}
	}

	public function getOutput() {

		//present the state
		$selected = $this->model->getSelectedUser();
		return  $this->view->getHTML($selected);
	}
}