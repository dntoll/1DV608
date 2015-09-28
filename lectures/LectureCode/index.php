<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once("model\Product.php");
require_once("model\ProductCatalog.php");
require_once("model\ProductLikes.php");

require_once("view\ProductCatalogView.php");
require_once("view\ProductView.php");
require_once("view\HTMLView.php");
require_once("view\NavigationView.php");
require_once("view\PopularityView.php");


require_once("controller\StoreController.php");
require_once("controller\PopularityController.php");

require_once("model/AdminFacade.php");
require_once("view/AdminView.php");

require_once("controller/AdminController.php");
require_once("controller/MasterController.php");



$mc = new \controller\MasterController();

$mc->handleInput();

$view = $mc->generateOutput();
$htmlView = new \view\HTMLView("utf-8");
echo $htmlView->getHTMLPage("I like it!", $view->getHTML());
