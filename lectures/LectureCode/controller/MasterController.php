<?php

namespace controller;


require_once("model/ProductCatalog.php");
require_once("model/AdminFacade.php");
require_once("model/ProductDAL.php");


require_once("view/NavigationView.php");
require_once("view/AdminView.php");

require_once("controller/StoreController.php");
require_once("controller/AdminController.php");

class MasterController {

	private $productCatalog;
	private $navigationView;

	public function __construct() {

		$this->mysqli = new \mysqli("localhost", "root", "", "store");
		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}
		

		$this->productDAL = new \model\ProductDAL($this->mysqli);
		$this->navigationView = new \view\NavigationView();
	}

	public function handleInput() {
		if ($this->navigationView->inStore() ) {
			$store = new \controller\StoreController($this->productDAL->getProducts());

			//Handle input
			$store->doStore();

			//Generate output
			$this->view = $store->getView();
		} else {
			$model = new \model\AdminFacade($this->productDAL);
			$this->view = new \view\AdminView($model, $this->navigationView);
			$adc = new \controller\AdminController($model, $this->view, $this->navigationView);

			$adc->addProduct();	
		}
		$this->mysqli->close();
	}

	public function generateOutput() {
		return $this->view;

	}
}