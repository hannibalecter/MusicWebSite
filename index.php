<?php
/**
 * Created by PhpStorm.
 * User: erens
 * Date: 11.05.2017
 * Time: 23:54
 */

$activePage = "home";
$title = "Home";

require_once(__DIR__ . "/LogicLayer/ActivityManagement.php");

$objArr = ActivityManagement::getAllActivity();
$arr = array();
require_once("PresentationLayer/UI.php");
?>