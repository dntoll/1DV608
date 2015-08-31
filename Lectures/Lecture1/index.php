<?php

error_reporting(-1);
ini_set('display_errors', 'On');


require_once("User.php");
require_once("HTMLView.php");
require_once("UserPicker.php");


$htmlView = new \view\HTMLView("utf-8");


$users = array();

$users[] = new \model\User("Daniel", "Daniels adress");

$picker = new \view\UserPicker($users);
$body = $picker->getHTML(new \model\NullUser());
$httpContent = $htmlView->getHTMLPage("Hello title", $body);
echo $httpContent;