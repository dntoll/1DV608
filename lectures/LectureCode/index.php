<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("controller/MasterController.php");
require_once("view/HTMLView.php");

$mc = new \controller\MasterController();
$mc->handleInput();

$view = $mc->generateOutput();
$htmlView = new \view\HTMLView("utf-8");
echo $htmlView->getHTMLPage("I like it!", $view->getHTML());
