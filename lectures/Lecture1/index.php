<?php

error_reporting(-1);
ini_set('display_errors', 'On');


require_once("User.php");
require_once("HTMLView.php");
require_once("UserPicker.php");


$htmlView = new \view\HTMLView("utf-8");


$users = array();

$users[] = new \model\User("Daniel", "Snöfallsvägen 13");
$users[] = new \model\User("Tobias", "Tobias adress");

$picker = new \view\UserPicker($users);

$selected = $picker->getSelectedUser();

$body = $picker->getHTML($selected);
$httpContent = $htmlView->getHTMLPage("Pick a user", $body);
echo $httpContent;