<?php

namespace controller;


class AdminController {
	private $model;
	private $view;

	public function __construct(\model\AdminFacade $m, \view\AdminView $v ) {
		$this->model = $m;
		$this->view = $v;

	}

	public function addProduct() {
		

		if ($this->view->adminWantsToCreateProduct()) {
			$product = $this->view->getProduct();	
			if ($product != null) {
				try {
					$this->model->add($product);
				} catch (\Exception $e) {
					$this->view->setDuplicate();
				}
			}
		}
	}
}