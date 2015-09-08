<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once("HTMLView.php");

require_once("Product.php");
require_once("ProductCatalog.php");
require_once("ProductCatalogView.php");
require_once("StoreController.php");
require_once("ProductView.php");


$productCatalog = new \model\ProductCatalog();

$product1 = new \model\Product("Sony 50\"  SuperWide Field", 15000, "sony_50");
$product2 = new \model\Product("Philips 22\"  Super fat", 150, "philips_22_fat");

$productCatalog->add($product1);
$productCatalog->add($product2);

$store = new \controller\StoreController($productCatalog);

$store->doStore();
$html = $store->getStoreHTML();

$htmlView = new \view\HTMLView("utf-8");


echo $htmlView->getHTMLPage("I like it!", $html);
