<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once("model\Product.php");
require_once("model\ProductCatalog.php");

require_once("view\ProductCatalogView.php");
require_once("view\ProductView.php");
require_once("view\HTMLView.php");

require_once("controller\StoreController.php");


$productCatalog = new \model\ProductCatalog();

//Some temporary code to get stuff up and running
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur vel quam eget sollicitudin. Nunc sed libero felis. Praesent a lacus quis ex semper sollicitudin. Aenean id urna at leo semper tincidunt. Nunc at tortor erat. Fusce scelerisque est dolor, non aliquam nunc tempus in. Mauris pellentesque, magna sed fringilla pellentesque, eros magna euismod sapien, eu vehicula ligula sem ut mi. Donec porttitor tempor ex ut aliquam. Aliquam luctus blandit sapien in fringilla. Donec pharetra mauris eu dui semper, a rutrum nunc mattis. Aliquam porta odio eget nulla posuere tempus. Integer pharetra felis nec ante commodo bibendum. Ut vehicula metus sed ligula condimentum, sit amet mollis ante rhoncus.";
$product1 = new \model\Product("Sony 50\"  SuperWide Field", 15000, "sony_50", $description);
$product2 = new \model\Product("Philips 22\"  Super fat", 150, "philips_22_fat", $description);

$productCatalog->add($product1);
$productCatalog->add($product2);

$store = new \controller\StoreController($productCatalog);

//Handle input
$store->doStore();

//Generate output
$html = $store->getStoreHTML();
$htmlView = new \view\HTMLView("utf-8");
echo $htmlView->getHTMLPage("I like it!", $html);
